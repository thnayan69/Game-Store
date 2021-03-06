@extends('layouts.moderator.app')
@section('content')

<body class="register-page">
  {{-- -- ------------------------------------- Cards -------------------------------------- --}}
  <div id="square1" class="square square-1"></div>
  <div id="square2" class="square square-2"></div>
  <div id="square3" class="square square-3"></div>
  <div id="square4" class="square square-4"></div>
  <div id="square5" class="square square-5"></div>
  <div id="square6" class="square square-6"></div>
  <div id="square7" class="square square-7"></div>
  <div id="square8" class="square square-8"></div>
  {{-- -- ------------------------------------- End Cards -------------------------------------- --}}
  {{-- <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h1 class="title">Game•Store</h1>
          </div>
          <div class="col-md-3">
            <ul class="nav">
              <li class="nav-item">
                <a href="{{asset('custom')}}/index.html" class="nav-link">Home</a>
  </li>
  <li class="nav-item">
    <a href="{{asset('custom')}}/examples/landing-page.html" class="nav-link">Landing</a>
  </li>
  <li class="nav-item">
    <a href="{{asset('custom')}}/examples/register-page.html" class="nav-link">Register</a>
  </li>
  <li class="nav-item">
    <a href="{{asset('custom')}}/examples/profile-page.html" class="nav-link">Profile</a>
  </li>
  </ul>
  </div>
  <div class="col-md-3">
    <ul class="nav">
      <li class="nav-item">
        <a href="https://creative-tim.com/contact-us" class="nav-link">Contact Us</a>
      </li>
      <li class="nav-item">
        <a href="https://creative-tim.com/about-us" class="nav-link">About Us</a>
      </li>
      <li class="nav-item">
        <a href="https://creative-tim.com/blog" class="nav-link">Blog</a>
      </li>
      <li class="nav-item">
        <a href="https://opensource.org/licenses/MIT" class="nav-link">License</a>
      </li>
    </ul>
  </div>
  <div class="col-md-3">
    <h3 class="title">Follow us:</h3>
    <div class="btn-wrapper profile">
      <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
        <i class="fab fa-twitter"></i>
      </a>
      <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
        <i class="fab fa-facebook-square"></i>
      </a>
      <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
        <i class="fab fa-dribbble"></i>
      </a>
    </div>
  </div>
  </div>
  </div>
  </footer> --}}
  </div>
  <form method="POST">
    <br><br><br>
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="tim-icons icon-zoom-split"></i>
                </div>
              </div>
              <input type="text" name="search" onkeyup="gameSearch()" id="search" list="gameList" class="form-control" placeholder="Search Games..." style="height:50px">
              <datalist id="gameList">
              </datalist>
              <button class="btn btn-success" type="submit">
                <i class="tim-icons icon-zoom-split"></i> SEARCH
              </button>
            </div>
          </div>
          <div class="col-md-12">
            @if( Session::has( 'error' ))
            <h1>{{ Session::get( 'error' ) }}😱</h1>
            @else
            <h1></h1>
            @endif
          </div>
        </div>
      </div>
    </section>
  </form>

  <script type="text/javascript">
    function gameSearch() {
      var search = document.getElementById("search").value;
      $.ajax({
        type: "GET",
        url: '{{route('
        search.games ')}}',
        data: {
          search: search,
        },
        dataType: 'html',
        success: function(response) {
          //alert(response);
          document.getElementById("gameList").innerHTML = response;

        }
      });
    }
  </script>
  @endsection
  @section('title')
  Home | Moderator
  @endsection