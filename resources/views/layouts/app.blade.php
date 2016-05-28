<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Computer Whiz - Canberra</title>

    <link href="/css/all.css" rel="stylesheet">
    <script language="javascript" src="/js/all.js"></script>

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

  a:link.menulink, a:visited.menulink {
    color: white;
  }

  a:hover.menulink {
    color: black;
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
@yield('head')
</head>

<body id="app-layout">
    <nav class="navbar">
  @if (Auth::check())
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle menulink" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

            <ul class="dropdown-menu" role="menu">
              <li><a class="menulink" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
  @endif
    <div class="row">
      <div class="col-md-6">
        <img alt="Logo" src='/images/logo.png'>
      </div>
      <div class="col-md-6 text-right">
        <img alt="Need IT support? CALL NOW! 02 6112 8025 7 days a week" src='/images/numeros.png'>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 menubar">
        <ul class="nav nav-tabs">
          <li role="presentation"{!! Request::segment(1) == 'home' ? ' class="active"' : '' !!}><a class="menulink" href="/home">Home</a></li>
          <li role="presentation"{!! Request::segment(1) == 'about' ? ' class="active"' : '' !!}><a class="menulink" href="/about">About</a></li>

          <li role="presentation" class="dropdown{!! Request::segment(1) == 'services' ? ' active' : '' !!}">
              <a class="dropdown-toggle menulink" data-toggle="dropdown" href="/services" role="button" aria-haspopup="true" aria-expanded="false">
                Home Services <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li role="presentation"><a href="/services">What do we do?</a></li>
                <li role="presentation"><a href="/services/email">Email Issues</a></li>
                <li role="presentation"><a href="/services/systems">New Computer Sales &amp; Set Up</a></li>
              </ul>
          </li>

          <li role="presentation"{!! Request::segment(1) == 'solutions' ? ' class="active"' : '' !!}><a class="menulink" href="/solutions">Business Solutions</a></li>
          <li role="presentation"{!! Request::segment(1) == 'contact' ? ' class="active"' : '' !!}><a class="menulink" href="/contact">Contact</a></li>
        </ul>
      </div>
    </div>
</nav>
    <div class="container">
        @yield('content')

        <img alt="spacer" src="/images/spacer.gif" height="100">
        <div class="boxed-row">
          For more information or to request an appointment please call 02 6112 8025
          or complete the form on the Contact page.
        </div>

        <div class="row">
          <div class="col-md-1">
            <img alt="HP Logo" src="/images/logo_hp.png">
          </div>
          <div class="col-md-2">
            <img alt="Microsoft Logo" src="/images/logo_microsoft.png">
          </div>
          <div class="col-md-2">
            <img alt="Kaspersky Logo" src="/images/logo_kaspersky.png">
          </div>
          <div class="col-md-2">
            <img alt="Toshiba Logo" src="/images/logo_toshiba.png">
          </div>
          <div class="col-md-2">
            <img alt="Dell Logo" src="/images/logo_dell.png">
          </div>
          <div class="col-md-2">
            <img alt="ASUS Logo" src="/images/logo_asus.png">
          </div>
          <div class="col-md-1">
            <img alt="Acer Logo" src="/images/logo_acer.png">
          </div>
        </div>
    </div>
</body>

</html>
