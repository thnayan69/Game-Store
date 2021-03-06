<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('custom')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('custom')}}/assets/img/favicon.png">
  <title>@yield('title')</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{asset('custom')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('custom')}}/assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
</head>


{{-- ------------------------------------- Navbar ------------------------------------- --}}
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="{{route('moderator.index')}}" rel="tooltip" title="Explore the Gaming World" data-placement="bottom">
        <span>Game•</span> Store
      </a>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('moderator.index')}}">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <p>
              <img src="{{asset($data->MOD_IMAGE)}}" alt="Circle image" class="img-fluid rounded-circle shadow" style="width:25px;">Profile
            </p>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{route('moderator.viewProfile')}}">VIEW Profile</a>
            <a class="dropdown-item" href="{{route('moderator.editProfile')}}">EDIT Profile</a>
            <a class="dropdown-item" href="{{route('moderator.changePicture')}}">CHANGE Profile Picture</a>
            <a class="dropdown-item" href="{{route('moderator.changePassword')}}">CHANGE Password</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('moderator.pendingList')}}">Pending List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('moderator.gamerList')}}">Gamer List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('moderator.developerList')}}">Developer List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout.index')}}">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
{{-- -- ------------------------------------- End Navbar --------------------------------------- --}}
@yield('content')
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