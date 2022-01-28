<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{config('app.name')}} | Login</title>
    
  <link rel="icon" href="asset/images/logo/kruisstraat_logo_single.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
      integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="../../asset/css/components.css">
  </head>
  <body>
    <div id="app">
      <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
          <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-dark">
            <div class="p-4 m-3">
                
                 <a href="index">
                    <img src="{{ asset('asset/images/logo/kruisstraat_logo.png') }}" alt="logo" width="120px" height="50px" class=" mb-5 mt-2 "></a>
              <h4 class="text-light font-weight-normal">Welcome to <span class="font-weight-bold">Kruistraat</span></h4>
              <p class="text-muted">Before you get started, you must login or register through admin panel if you don't have any account.</p>

              <!-- Alert -->
              @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{ $message }}</strong>
                </div>
              @elseif ($message = Session::get('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>{{ $message }}</strong>
                </div>
              @endif

              <form method="POST" action="#}" class="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid border-danger @enderror" name="email" value="{{ old('email') }}">
                  @error('email')
                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password" class="control-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid border-danger @enderror" name="password">
                  @error('password')
                    <span class="invalid-feedback mb-2 mt-0" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group text-right">
                  <a href="#" class=" text-danger float-left mt-3">
                    Forgot Password?
                  </a>

                  {{-- <a href="dashboard">login admin</a>
                  <a href="indexUsers">login user</a> --}}
                  <button type="submit" class="btn btn-danger btn-lg  ">
                    Login
                  </button>
                </div>
              </form>

              {{-- Login with Google --}}
              <div class="ssoLogin center text-center mt-5">
                <a href="{{ route('google.login') }}">
                  <h6>- Login With -</h6>
                  <button type="submit" class="ssoGoogle btn btn-dark mt-3 "
                    style="width: 50px; height:50px; background-color:rgb(43, 43, 43)"> <i class="fab fa-google"></i></button>
                </a>
              </div>

              <div class="text-center mt-5 text-small">
                Copyright &copy; Kruisstraat 2021.
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{ asset('asset/images/bg/login-bg.jpg') }}">
            <div class="absolute-bottom-left index-2">
              <div class="text-light p-5 pb-2">
                <div class="mb-5 pb-3">
                  <h1 class="mb-2 display-4 font-weight-bold">Kruisstraat</h1>
                  <h5 class="font-weight-normal text-muted-transparent">The Street where cultures meet</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
      integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script src="{{ asset('asset/js/stisla.js') }}"></script>
    
    <!-- Template JS File -->
    <script src="{{ asset('asset/js/scripts.js') }}"></script>

    {{-- Toastr Js --}}
    <script src="{{ asset('asset/js/toastr.js') }}"></script>

    @if (Session::get('success'))
    <script>
      toastr.success("{!! Session::get('success') !!}");
    </script>
    @elseif (Session::get('error'))
    <script>
      toastr.error("{!! Session::get('error') !!}");
    </script>
    @endif
  </body>
</html>