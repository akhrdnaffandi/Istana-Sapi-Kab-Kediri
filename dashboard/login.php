<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istana Sapi | Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="assets/logois2.png">

</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow" style="width: 350px;">
        <div class="text-center">
            <img src="assets/logois.png" alt="Logo" width="100">
        </div>
        <h5 class="text-center fw-bold mt-1">Admin Login</h5>
        <form method='POST' action='check_auth.php' class="login-form">
            <div class="mb-3 input-group mt-3">
                <span class="input-group-text text-primary"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" name="user" placeholder="Username" required>
            </div>
            <div class="mb-3 input-group">
                <span class="input-group-text text-danger"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" name="pass" placeholder="Password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
