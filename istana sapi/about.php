<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
</head>
<body>

<div class="wrapper">
    <main class="app-main"> 
        <div class="app-content-header"> 
            <div class="container-fluid">
                <nav class="navbar bg-body-tertiary">
                </nav> 
            </div>
        </div>
        <div class="container mt-3">
            <div class="card shadow mb-4">
                <div class="card-body p-4">

                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2>About Us</h2>
                            <p class="text-justify mt-3">
                                <strong>ISTANA SAPI</strong> adalah peternakan sapi terkemuka di Kabupaten Kediri yang berfokus pada 
                                pengelolaan dan pengembangan sapi berkualitas tinggi. Dengan standar peternakan modern, 
                                kami memastikan setiap sapi mendapatkan perawatan terbaik, nutrisi yang seimbang, dan lingkungan 
                                yang sehat. Selain menyediakan sapi potong dan perah, kami juga melayani edukasi bagi masyarakat 
                                tentang dunia peternakan. 
                            </p>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="assets/about.jpg" class="img-fluid rounded" alt="About Us">
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-center mb-4">Owner Istana Sapi</h2>
            <div class="card shadow mb-4">
                <div class="card-body p-4">
                    <div class="row">
                        <!-- Owner 1 -->
                        <div class="col-md-6 text-center mt-5">
                            <img src="assets/foto.jpeg" class="img-fluid rounded-circle mb-3" alt="Owner 1" width="150" height="150">
                            <h4>Owner 1</h4>
                            <p class="text-muted">Founder & CEO</p>
                            <div>
                                <a href="https://facebook.com/sitinurlaila" target="_blank" class="btn btn-primary btn-sm mx-1">
                                    <i class="bi bi-facebook"></i> Facebook
                                </a>
                                <a href="https://instagram.com/sitinurlaila" target="_blank" class="btn btn-danger btn-sm mx-1">
                                    <i class="bi bi-instagram"></i> Instagram
                                </a>
                            </div>
                        </div>

                        <!-- Owner 2 -->
                        <div class="col-md-6 text-center mt-5">
                            <img src="assets/foto.jpeg" class="img-fluid rounded-circle mb-3" alt="Owner 2" width="150" height="150">
                            <h4>Owner 2</h4>
                            <p class="text-muted">Co-Founder & CFO</p>
                            <div>
                                <a href="https://facebook.com/sitinurlaila" target="_blank" class="btn btn-primary btn-sm mx-1">
                                    <i class="bi bi-facebook"></i> Facebook
                                </a>
                                <a href="https://instagram.com/sitinurlaila" target="_blank" class="btn btn-danger btn-sm mx-1">
                                    <i class="bi bi-instagram"></i> Instagram
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-center mb-4">Contact</h2>
            <div class="card shadow mb-4">
                <div class="card-body p-4">
                    <div class="row text-center">
                        <div class="col-md-4 mb-3">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <h5 class="mt-2">Address</h5>
                            <p>Tlogowono, Nglumbang, Kec. Gurah, Kabupaten Kediri, Jawa Timur</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <i class="fas fa-phone fa-2x"></i>
                            <h5 class="mt-2">Call Us</h5>
                            <p>+62 812 3456 7890</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <i class="fas fa-envelope fa-2x"></i>
                            <h5 class="mt-2">Email Us</h5>
                            <p>info@example.com</p>
                        </div>
                        <iframe class="rounded"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.2476056905493!2d112.09955457419095!3d-7.869138478239087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78f70036c76b37%3A0x79894dc9bc554fc4!2sIstana%20Sapi!5e0!3m2!1sid!2sid!4v1741527320924!5m2!1sid!2sid" 
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

</body>
</html>