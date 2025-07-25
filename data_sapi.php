<?php
include "connect.php";

$search = isset($_POST['search']) ? trim($_POST['search']) : "";
$sql = "SELECT * FROM tbdaftarsapi";
if (!empty($search)) {
    $sql .= " WHERE nama_sapi LIKE :search";
}
$stmt = $db->prepare($sql);
if (!empty($search)) {
    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
}
$stmt->execute();

?>

<style>
    html, body {
        height: 100%;
    }
    .wrapper {
        display: flex;
        flex-direction: column;
        min-height: 80vh;
    }
    .app-main {
        flex: 1;
    }
</style>

<div class="container mt-4">
    <div class="wrapper">
        <main class="app-main"> 
            <div class="app-content-header"> 
                <div class="container-fluid">
                    <nav class="navbar bg-body-tertiary">
                        <div class="container-fluid justify-content-center">
                            <h3 class="mb-0 fw-semibold mt-2">Daftar Data Sapi</h3>
                        </div>
                    </nav> 
                </div>
            </div>
            <div class="card shadow mb-4 mx-4 mt-5"> 
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <form method="POST" class="col-sm-3 d-flex" role="search">
                            <input class="form-control me-2 border border-secondary" type="text" name="search" placeholder="Cari data..." value="<?php echo htmlspecialchars($search); ?>" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </form>
                    </div>
                    <table class="table table-bordered mt-3 border-secondary rounded">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Berat Sebelum (kg)</th>
                                <th>Berat Sesudah (kg)</th>
                                <th>Rasio Sapi</th>
                                <th>Grade Sapi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                            <?php
                            if ($stmt->rowCount() > 0) {
                                $no = 1;
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<tr data-id='{$row['id_sapi']}'>";
                                    echo "<td>", $no++, "</td>";
                                    echo "<td contenteditable='false' class='editable'>", $row['nama_sapi'], "</td>";
                                    echo "<td contenteditable='false' class='editable'>", $row['berat_sebelum'], "</td>";
                                    echo "<td contenteditable='false' class='editable'>", $row['berat_sesudah'], "</td>";
                                    echo "<td contenteditable='false' class='editable'>", $row['rasio_sapi'], "</td>";
                                    echo "<td contenteditable='false' class='editable'>", $row['grade_sapi'], "</td>";
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
    </div>
</div>