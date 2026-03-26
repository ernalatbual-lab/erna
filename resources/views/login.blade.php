<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(135deg, #667eea, #764ba2);" class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow-lg" style="width:350px; border-radius:20px;">
    <h3 class="text-center mb-3">🔐 Login</h3>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password">
        </div>

        <button class="btn btn-primary w-100">Masuk</button>
    </form>

    <p class="text-center mt-3 text-muted">© Sistem Kamu</p>
</div>

</body>
</html>