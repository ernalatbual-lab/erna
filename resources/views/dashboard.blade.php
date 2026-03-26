<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="bg-dark text-white p-3" style="width:220px; height:100vh;">
        <h4>🚀 Menu</h4>
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">🏠 Dashboard</li>
            <li class="nav-item mb-2">📄 Data</li>
            <li class="nav-item mb-2">⚙️ Setting</li>
        </ul>
    </div>

    <!-- CONTENT -->
    <div class="flex-grow-1">

        <!-- NAVBAR -->
        <nav class="navbar navbar-light bg-light px-3 shadow-sm">
            <span>Halo, {{ session('username') ?? 'User' }}</span>

            <div class="d-flex gap-2">
                <a href="/" class="btn btn-secondary btn-sm">Ke Login</a>

                <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
            </div>
        </nav>

        <!-- ISI -->
        <div class="container mt-4">

            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3 shadow text-center">
                        <h5>Total Data</h5>
                        <h3>100</h3>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3 shadow text-center">
                        <h5>User</h5>
                        <h3>10</h3>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3 shadow text-center">
                        <h5>Laporan</h5>
                        <h3>25</h3>
                    </div>
                </div>
            </div>

            <div class="card mt-4 p-4 shadow">
                <h3>Selamat Datang 👋</h3>
                <p>Ini dashboard kamu, tampilannya sudah lebih modern.</p>
            </div>

        </div>

    </div>

</div>

</body>
</html>