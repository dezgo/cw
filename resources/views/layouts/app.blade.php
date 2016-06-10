<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Offering a high-quality, timely, professional IT support service to home users and small to medium sized businesses in Canberra and Queanbeyan."/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="High-quality IT support services"/>
    <meta property="og:description" content="Offering a high-quality, timely, professional IT support service to home users and small to medium sized businesses in Canberra and Queanbeyan."/>
    <meta property="og:url" content="{{ url('') }}"/>
    <meta property="og:site_name" content="Computer Whiz - Canberra"/>
    <meta property="og:image" content="{{ url('/images/logo.jpg') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <title>Computer Whiz - Canberra</title>
    <link rel="icon"
          type="image/png"
          href="/images/favicon.png">
    <link href="/css/all.css" rel="stylesheet">
    <script src="/js/all.js"></script>
    <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-75871864-1', 'auto'); ga('send', 'pageview'); </script>
    @yield('head')

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

  .clickable {
      padding:1px;
      border:1px solid #021a40;
  }
</style>
@yield('head')
</head>

<body id="app-layout">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="container">
      @if (Auth::check())
      <nav class="navbar navbar-default">
          <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle menulink" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </nav>
      @endif
        <div class="row">
          <div class="col-md-6">
            <img alt="Logo" src='/images/logo.png'>
          </div>
          <div class="col-md-6 text-right">
            <img alt="Need IT support? CALL NOW! 02 6112 8025 7 days a week" src='/images/numeros.png'>
          </div>
        </div>
        <img alt="spacer" src="/images/spacer.gif" height="10">
        <div class="row">
          <div class="col-md-12 menubar">
            <ul class="nav nav-tabs">
              <li role="presentation"{!! Request::segment(1) == 'home' ? ' class="active"' : '' !!}>
                  <a id="homelink" class="menulink" href="/home">Home</a></li>
              <li role="presentation"{!! Request::segment(1) == 'about' ? ' class="active"' : '' !!}>
                  <a id="aboutlink" class="menulink" href="/about">About</a></li>
              <li role="presentation"{!! Request::segment(1) == 'remote' ? ' class="active"' : '' !!}>
                  <a id="remotelink" class="menulink" href="/remote">Remote Support</a></li>
              <li role="presentation"{!! Request::segment(1) == 'services' ? ' class="active"' : '' !!}>
                  <a id="serviceslink" class="menulink" href="/services">Home Services</a></li>
              <li role="presentation"{!! Request::segment(1) == 'solutions' ? ' class="active"' : '' !!}>
                  <a id="solutionslink" class="menulink" href="/solutions">Business Solutions</a></li>
              <li role="presentation"{!! Request::segment(1) == 'contact' ? ' class="active"' : '' !!}>
                  <a id="contactlink" class="menulink" href="/contact">Contact</a></li>
            </ul>
          </div>
        </div>
        @yield('content')

        <div class="fb-like" data-href="https://www.facebook.com/computerwhizcanberra/" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>

        <img alt="spacer" src="/images/spacer.gif" height="50">
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
