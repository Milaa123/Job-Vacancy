{{-- @include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Job Vacancy | Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <h4>Job Vacancy 1.0</h4>
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                            <nav class=" nav nav-pills d-flex gap-2 text-center my-3">
                                <a href="{{ URL::to('/register/job-seekers') }}"
                                    class="btn btn-outline-primary nav-link active">Job Seekers</a>
                                <a href="{{ URL::to('/register/companies') }}"
                                    class="btn btn-outline-primary">Perusahaan</a>
                            </nav>
                            <form method="POST" action="{{ URL::to('/register/job-seekers/proses') }}"
                                class="needs-validation" novalidate="" autocomplete="off">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email')is-invalid @enderror" name="email"
                                        value="" autofocus required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password')is-invalid @enderror" name="password"
                                        required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password"> Re Type Password</label>
                                    <input id="password_confirmation" type="password"
                                        class="form-control  @error('password_confirmation')is-invalid @enderror"
                                        name="password_confirmation" required>
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <p class="form-text text-muted mb-3">
                                    By registering you agree with our terms and condition.
                                </p>

                                <div class="align-items-center d-flex">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Already have an account? <a href="{{ url::to('/login-page') }}"
                                    class="text-dark">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html> --}}


@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Job Vacancy | Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <h4>Job Vacancy 1.0</h4>
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                            <nav class=" nav nav-pills d-flex gap-2 text-center my-3">
                                <a href="{{ URL::to('/register/job-seekers') }}"
                                    class="btn btn-outline-primary nav-link active">Job Seekers</a>
                                <a href="{{ URL::to('/register/companies') }}"
                                    class="btn btn-outline-primary">Perusahaan</a>
                            </nav>
                            <form method="POST" id="loginForm" action="{{ URL::to('/register/job-seekers/proses') }}"
                                class="needs-validation" novalidate="" autocomplete="off">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email')is-invalid @enderror" name="email"
                                        value="" autofocus required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password')is-invalid @enderror" name="password"
                                        required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password"> Re Type Password</label>
                                    <input id="password_confirmation" type="password"
                                        class="form-control  @error('password_confirmation')is-invalid @enderror"
                                        name="password_confirmation" required>
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <p class="form-text text-muted mb-3">
                                    By registering you agree with our terms and condition.
                                </p>

                                <div class="align-items-center d-flex">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Register
                                    </button>
                                </div>
                            </form>
                            {{-- 
                            <form method="POST" action="{{ route('login.google.post') }}" class="mt-3">
                                @csrf
                                <input type="hidden" name="role" id="role" value="">
                                <div class="align-items-center d-flex">
                                    <button type="submit" class="btn btn-danger ms-auto">
                                        Login with Google
                                    </button>
                                </div>
                            </form> --}}

                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Already have an account? <a href="{{ URL::to('/login-page') }}"
                                    class="text-dark">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        &copy; 2024 Job Vacancy. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script>
        function setRole(role) {
            document.getElementById('role').value = role;
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#loginForm').on('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Loading...',
                    html: 'Please wait while we process your request',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });
                this.submit();
            });
        });
    </script>
</body>

</html>
