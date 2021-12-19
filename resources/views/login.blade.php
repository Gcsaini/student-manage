<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Admin - Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <link
      href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/fonts/icofont/icofont.min.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/apex/apexcharts.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  </head>
  <body>
    <div class="mn-vh-100 d-flex align-items-center">
      <div class="container">
        <div class="card justify-content-center auth-card">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
              <h4 class="mb-5 font-20">Welcome Admin</h4>
              @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error! </strong>{{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              @endif
              @if(Session::has('success'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>!! </strong>{{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              @endif
              <form action="" method="post">
                @csrf
                <div class="form-group mb-20">
                  <label for="email" class="mb-2 font-14 bold">Email Address</label>
                  <input
                    type="email"
                    id="email"
                    class="theme-input-style"
                    placeholder="Email Address"
                    name="email"
                    required
                  />
                </div>
                <div class="form-group mb-20">
                  <label for="password" class="mb-2 font-14 bold"
                    >Password</label
                  >
                  <input
                    type="password"
                    id="password"
                    class="theme-input-style"
                    placeholder="********"
                    name="password"
                    required
                  />
                </div>
                <div class="d-flex justify-content-between mb-20">
                  
                  <a href="#" class="font-12 text_color"
                    >Forgot Password?</a
                  >
                </div>
               
                <div class="d-flex align-items-center">
                  <button type="submit" class="btn long mr-20">Log In</button>
                  <span class="font-12 d-block"
                    ><a href="{{url('register')}}" class="bold">Sign Up</a>, If you
                    have no account.</span
                  >
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/plugins/apex/custom-apexcharts.js')}}"></script>
  </body>
  </html>