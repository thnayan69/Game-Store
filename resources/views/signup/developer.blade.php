<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('custom')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('custom')}}/assets/img/favicon.png">
  <title>Signup | Developer</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{asset('custom')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('custom')}}/assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="register-page">
  {{-- ------------------------------------- Navbar ------------------------------------- --}}
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{route('landingPage.index')}}">
          <span>Game•</span> Store
        </a>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('landingPage.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login.index')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('signup.index')}}">Signup</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- -- ------------------------------------- End Navbar --------------------------------------- --}}
  <div class="wrapper">
    <div class="page-header">
      <div class="page-header-image"></div>
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6 offset-lg-0 offset-md-3">
              <div id="square7" class="square square-7"></div>
              <div id="square8" class="square square-8"></div>
              <div class="card card-register">
                <div class="card-header">
                  <img class="card-img" src="{{asset('custom')}}/assets/img/square1.png" alt="Card image">
                  <h4 class="card-title" style="color:white;">Register</h4>
                  <h4 class="card-title" style="color:white;">Developer</h4>
                </div>
                <div class="card-body">
                  <form class="form" method="POST" enctype="multipart/form-data">
                    @if ($errors->has('USERNAME'))
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="USERNAME" placeholder="{{$errors->getBag('default')->first('USERNAME')}}">
                    </div>
                    @else
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="USERNAME" placeholder="Username...">
                    </div>
                    @endif

                    @if ($errors->has('DEV_NAME'))
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_NAME" placeholder="{{$errors->getBag('default')->first('DEV_NAME')}}">
                    </div>
                    @else
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-single-02"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_NAME" placeholder="Full Name...">
                    </div>
                    @endif

                    @if ($errors->has('DEV_DESCRIPTION'))
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-paper"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_DESCRIPTION" placeholder="{{$errors->getBag('default')->first('DEV_DESCRIPTION')}}">
                    </div>
                    @else
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-paper"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_DESCRIPTION" placeholder="Description...">
                    </div>
                    @endif

                    @if ($errors->has('DEV_ADDRESS'))
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-square-pin"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_ADDRESS" placeholder="{{$errors->getBag('default')->first('DEV_ADDRESS')}}">
                    </div>
                    @else
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-square-pin"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_ADDRESS" placeholder="Address...">
                    </div>
                    @endif

                    @if ($errors->has('DEV_EMAIL'))
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-email-85"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_EMAIL" placeholder="       {{$errors->getBag('default')->first('DEV_EMAIL')}}">
                    </div>
                    @else
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-email-85"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_EMAIL" placeholder="Email...">
                    </div>
                    @endif

                    @if ($errors->has('DEV_WEBSITE'))
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-tablet-2"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_WEBSITE" placeholder="{{$errors->getBag('default')->first('DEV_WEBSITE')}}">
                    </div>
                    @else
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-tablet-2"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_WEBSITE" placeholder="Website...">
                    </div>
                    @endif

                    @if ($errors->has('DEV_CREDIT_CARD'))
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-money-coins"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_CREDIT_CARD" placeholder="{{$errors->getBag('default')->first('DEV_CREDIT_CARD')}}">
                    </div>
                    @else
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-money-coins"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="DEV_CREDIT_CARD" placeholder="Credit Card No...">
                    </div>
                    @endif

                    @if ($errors->has('PASSWORD'))
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="PASSWORD" placeholder="{{$errors->getBag('default')->first('PASSWORD')}}">
                    </div>
                    @else
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="PASSWORD" placeholder="Password...">
                    </div>
                    @endif

                    @if ($errors->has('CONFIRM_PASSWORD'))
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="CONFIRM_PASSWORD" placeholder="{{$errors->getBag('default')->first('CONFIRM_PASSWORD')}}">
                    </div>
                    @else
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-lock-circle"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="CONFIRM_PASSWORD" placeholder="Confirm Password...">
                    </div>
                    @endif

                    @if ($errors->has('DEV_LOGO'))
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-upload"></i>
                        </div>
                      </div>
                      <input type="file" name="DEV_LOGO" placeholder="{{$errors->getBag('default')->first('DEV_LOGO')}}" class="form-control">
                    </div>
                    <h6>{{$errors->getBag('default')->first('DEV_LOGO')}}</h6>

                    @else
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tim-icons icon-upload"></i>
                        </div>
                      </div>
                      <input type="file" name="DEV_LOGO" class="form-control">
                    </div>
                    @endif

                    <button type="submit" class="btn btn-info btn-round btn-lg">Register</button>
                  </form>
                </div>
                {{-- <div class="card-footer">
                  <button type="submit" class="btn btn-info btn-round btn-lg">Register</button>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="register-bg"></div>
          <div id="square1" class="square square-1"></div>
          <div id="square2" class="square square-2"></div>
          <div id="square3" class="square square-3"></div>
          <div id="square4" class="square square-4"></div>
          <div id="square5" class="square square-5"></div>
          <div id="square6" class="square square-6"></div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h1 class="title">Game•Store</h1>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('custom')}}/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="{{asset('custom')}}/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{{asset('custom')}}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="{{asset('custom')}}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{asset('custom')}}/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('custom')}}/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="{{asset('custom')}}/assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{asset('custom')}}/assets/js/plugins/moment.min.js"></script>
  <script src="{{asset('custom')}}/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('custom')}}/assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
</body>

</html>