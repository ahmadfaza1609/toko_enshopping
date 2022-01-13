<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.admin.meta')

    <title>Login | Admin </title>

    @stack('before-style')

    @include('includes.admin.style')

    @stack('after-style')

</head>

<body class="bg-gradient-primary">

    <div class="container">


        <!-- Outer Row -->
        <div class="row justify-content-center align-self-center">
            @if (session('loginEror'))
            <div class="alert alert-danger">
                {{ session('loginEror') }}
            </div>
            @endif
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hallo Admin!</h1>
                                    </div>
                                    <form class="user" action="{{ route('login.product') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Enter Username Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                                id="password" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" >Login</button>

                                    </form>
                                    {{-- <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @stack('before-style')

    @include('includes.admin.script')

    @stack('after-style')


</body>

</html>
