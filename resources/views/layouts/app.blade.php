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
                <a class="navbar-brand" href="#">Books Shope</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
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
                <li class="list-group-item d-grid gap-2">
                    <a href="form" class="btn btn-primary">Add Student</a>
                </li>
                <li class="list-group-item d-grid gap-2">
                    <a href="students" class="btn btn-primary">Edit Student </a>
                </li>
                <li class="list-group-item d-grid gap-2">
                    <a href="books" class="btn btn-primary">Add Books</a>
                </li>
                <li class="list-group-item d-grid gap-2">
                    <a href="students" class="btn btn-primary">Edit Books </a>
                </li>
                <!-- Add more sidebar links here as buttons -->

            </ul>
        </div>

        <!-- Content -->
        <div id="content" class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
