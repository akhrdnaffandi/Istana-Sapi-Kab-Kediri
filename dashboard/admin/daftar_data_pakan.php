<?php
include "connect.php";

$search = isset($_POST['search']) ? trim($_POST['search']) : "";
$sql = "SELECT * FROM tbdaftarpakan";
if (!empty($search)) {
    $sql .= " WHERE jenis_pakan LIKE :search";
}
$stmt = $db->prepare($sql);
if (!empty($search)) {
    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
}
$stmt->execute();

?>

<main class="app-main"> 
    <div class="app-content-header"> 
        <div class="container-fluid">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <h3 class="mb-0 fw-semibold">Daftar Data Pakan</h3>
                </div>
            </nav> 
        </div>
    </div>
    <div class="card mb-4 mx-4"> 
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <form method="POST" class="col-sm-3 d-flex" role="search">
                    <input class="form-control me-2 border border-secondary" type="text" name="search" placeholder="Cari data..." value="<?php echo htmlspecialchars($search); ?>" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </form>
            </div>
            <table class="table table-bordered mt-3 border-secondary rounded rounded-2">
                <thead class="text-center rounded-top rounded-2">
                    <tr>
                        <th>No</th>
                        <th>Jenis Pakan</th>
                        <th>Jumlah Pakan (kg)</th>
                        <th>Pakan Perhari (kg/sapi)</th>
                        <th>Kelola</th>
                    </tr>
                </thead>
                <tbody class="text-center align-middle">
                    <?php
                    if ($stmt->rowCount() > 0) {
                        $no = 1;
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr data-id='{$row['id_pakan']}'>";
                            echo "<td>", $no++, "</td>";
                            echo "<td contenteditable='false' class='editable'>", $row['jenis_pakan'], "</td>";
                            echo "<td contenteditable='false' class='editable'>", $row['jumlah_pakan'], "</td>";
                            echo "<td contenteditable='false' class='editable'>", $row['pakan_perhari'], "</td>";
                            echo "<td>
                                    <button class='btn btn-warning text-light btn-edit me-1'><i class='bi bi-pencil-square'></i></button>
                                    <button class='btn btn-success text-light btn-update me-1' disabled><i class='bi bi-floppy2-fill'></i></button>
                                    <a href='hapus_data_pakan.php?id_pakan=", $row['id_pakan'], "' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus?\")'><i class='bi bi-trash'></i></a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>Data tidak tersedia</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".btn-edit").forEach(button => {
            button.addEventListener("click", function () {
                let row = this.closest("tr");
                let cells = row.querySelectorAll(".editable");
                let icon = this.querySelector("i"); // Mengambil ikon di dalam tombol

                if (row.classList.contains("editing")) {
                    // Jika dalam mode edit, kembalikan ke nilai awal
                    cells.forEach(cell => {
                        cell.innerText = cell.getAttribute("data-original");
                        cell.contentEditable = false;
                        cell.style.backgroundColor = "transparent";
                    });

                    row.querySelector(".btn-update").disabled = true;
                    row.classList.remove("editing");
                    icon.classList.remove("bi-x-square");
                    icon.classList.add("bi-pencil-square"); // Kembali ke ikon edit
                } else {
                    // Simpan nilai awal sebelum diedit
                    cells.forEach(cell => {
                        cell.setAttribute("data-original", cell.innerText);
                        cell.contentEditable = true;
                        cell.style.backgroundColor = "#f8f9fa";
                    });

                    row.querySelector(".btn-update").disabled = false;
                    row.classList.add("editing");
                    icon.classList.remove("bi-pencil-square");
                    icon.classList.add("bi-x-square"); // Ganti ke ikon silang
                }
            });
        });

        document.querySelectorAll(".btn-update").forEach(button => {
            button.addEventListener("click", function () {
                let row = this.closest("tr");
                let id = row.getAttribute("data-id");
                let cells = row.querySelectorAll(".editable");
                let icon = row.querySelector(".btn-edit i"); // Ikon edit pada tombol edit
                
                let data = {
                    id_pakan: id,
                    jenis_pakan: cells[0].innerText,
                    jumlah_pakan: cells[1].innerText,
                    pakan_perhari: cells[2].innerText,
                };

                fetch("update_data_pakan.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(result => {
                    if (result.success) {
                        alert("Data berhasil diperbarui!");
                        row.querySelectorAll(".editable").forEach(cell => {
                            cell.contentEditable = false;
                            cell.style.backgroundColor = "transparent";
                        });
                        button.disabled = true;
                        row.classList.remove("editing");
                        icon.classList.remove("bi-x-square");
                        icon.classList.add("bi-pencil-square"); // Kembalikan ikon ke edit
                    } else {
                        alert("Gagal memperbarui data.");
                    }
                })
                .catch(error => console.error("Error:", error));
            });
        });        
    });
</script>
