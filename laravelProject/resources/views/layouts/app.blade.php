<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Your Site</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <!-- Add more navbar links here -->
                    </ul>
                    <!-- Logout button -->
                    <form class="d-flex">
                        <button class="btn btn-outline-danger" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <div id="sidebar" class="col-md-2 mt-4">
                    <!-- Sidebar content -->
                    <ul class="list-group">
                        <li class="list-group-item"><a href="profile">link 1</a></li>
                        <li class="list-group-item"><a href="#">link 2</a></li>
                        <li class="list-group-item"><a href="#">link 3</a></li>
                        <li class="list-group-item"><a href="#">link 4</a></li>
                        <li class="list-group-item"><a href="#">link 5</a></li>
                        <li class="list-group-item"><a href="#">link 6</a></li>
                        <!-- Add more sidebar links here -->
                    </ul>
                </div>

                <!-- Content -->
                <div id="content" class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="bg-dark text-light text-center py-3 mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Your Company Name {{ date('Y') }}</p>
                    </div>
                    <div class="col-md-6">
                        <!-- Add social media icons or additional content here -->
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
