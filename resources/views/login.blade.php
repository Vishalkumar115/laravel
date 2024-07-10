<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="bg-light dark:bg-dark">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-md-6 col-lg-4">
                    <!-- <a href="#" class="d-flex align-items-center mb-4 text-decoration-none">
                        <img class="me-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo" width="30" height="30">
                        <span class="text-dark">Flowbite</span>
                    </a> -->
                    <div class="bg-white rounded-lg shadow-sm dark:border md:mt-0 ">
                        <div class="p-4">
                            <h1 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Sign in to your account</h1>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Your email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="name@company.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                <p class="mt-3 mb-0 text-center text-muted">Don’t have an account yet? <a href="#" class="text-primary">Sign up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
