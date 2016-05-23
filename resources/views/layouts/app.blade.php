<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Computer Whiz - Canberra</title>

    <!-- Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

<!-- Styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> {{--
<link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<link rel="stylesheet" href="/css/font-awesome.min.css">

<style>
  body {
    font-family: 'Lato';
    margin-top: 5px;
    margin-left: 15px;
    margin-right: 15px;
  }

  .fa-btn {
    margin-right: 6px;
  }

  .menubar {
    background-color: #A5061C;
  }

  a {
    color: white;
  }

  .boxed-row {
    background-color: #10477C;
    font-family: 'Arial Narrow', Arial, sans-serif;
    font-size: 16px;
    color: white;
    padding-top: 5px;
    padding-bottom: 5px;
    margin-left: -15px;
    text-align: center;
  }

  h1, h2, h3 {
    color: #B21F24;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>

<body id="app-layout">
  @if (Auth::check())
  <nav class="navbar">
    <div class="container">
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @endif
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src='/images/logo.png'>
      </div>
      <div class="col-md-6 text-right">
        <img src='/images/numeros.png'>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 menubar">
        <ul class="nav nav-tabs">
          <li role="presentation"{!! Request::segment(1) == 'home' ? ' class="active"' : '' !!}><a href="/home">Home</a></li>
          <li role="presentation"{!! Request::segment(1) == 'about' ? ' class="active"' : '' !!}><a href="/about">About</a></li>

          <li role="presentation" class="dropdown{!! Request::segment(1) == 'services' ? ' active' : '' !!}">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Home Services <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li role="presentation"><a href="/services">What do we do?</a></li>
                <li role="presentation"><a href="/services/email">Email Issues</a></li>
                <li role="presentation"><a href="/services/systems">New Computer Sales &amp; Set Up</a></li>
              </ul>
          </li>

          <li role="presentation"{!! Request::segment(1) == 'solutions' ? ' class="active"' : '' !!}><a href="/solutions">Business Solutions</a></li>
          <li role="presentation"{!! Request::segment(1) == 'contact' ? ' class="active"' : '' !!}><a href="/contact">Contact</a></li>
        </ul>
      </div>
    </div>

    @yield('content')

    <img src="/images/spacer.gif" height="100px">
    <div class="boxed-row">
      For more information or to request an appointment please call 02 6112 8025
      or complete the form on the Contact page.
    </div>

    <div class="row">
      <div class="col-md-1">
        <img src="/images/logo_hp.png">
      </div>
      <div class="col-md-2">
        <img src="/images/logo_microsoft.png">
      </div>
      <div class="col-md-2">
        <img src="/images/logo_kaspersky.png">
      </div>
      <div class="col-md-2">
        <img src="/images/logo_toshiba.png">
      </div>
      <div class="col-md-2">
        <img src="/images/logo_dell.png">
      </div>
      <div class="col-md-2">
        <img src="/images/logo_asus.png">
      </div>
      <div class="col-md-1">
        <img src="/images/logo_acer.png">
      </div>
    </div>
    </div>

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js"></script>
  {{--
  <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>

</html>
