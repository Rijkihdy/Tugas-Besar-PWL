<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Management System</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/branch') }}">Branches</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/employee') }}">Employees</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/product') }}">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/transaction') }}">Transactions</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <footer class="text-center mt-4">
        <p>&copy; 2024 Management System</p>
    </footer>
</body>
</html>
