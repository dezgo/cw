@extends('layouts.app') @section('content')
<style>
  .splash {
    background-image: url('/images/home_bg.png');
    background-repeat: no-repeat;
    background-size: 1152px 883px;
    margin-left: -15px;
  }

  .row {
    margin-right: 0px
  }

  .prof_tag {
    float: right;
  }

  .services {
    background-color: #D5D7D8;
  }

  .services-box {
    position: relative;
    margin: 10px;
  }

  .boxed-title {
    background-color: white;
    font-family: 'Arial Black', 'Arial Bold', Gadget, sans-serif;
    font-size: 20px;
    color: #11274B;
    padding-top: 5px;
    padding-bottom: 5px;
  }

</style>
<div class="splash">
    <img src="/images/spacer.gif" height="154px">
    <Br>
    <img class="prof_tag" src="/images/prof_support.gif">
    <Br>
    <img src="/images/spacer.gif" height="308px">
    <img src="/images/red_tagline.gif">
</div>

<div class="row services">
  <div class="col-md-12">
    <img src="/images/spacer.gif" height="20px">
  </div>
</div>
<div class="row services">
  <div class="col-md-3 boxed-title">
    <img src="/images/spacer.gif" width="20px"> Specialising&nbsp;in:
  </div>
</div>
<div class="row services">
  <div class="col-md-2 col-md-offset-1 services">
    <div class="services-box">
      <img width="147" height="86" src="/images/virus removal.png">
    </div>
  </div>
  <div class="col-md-2 services">
    <div class="services-box">
      <img width="147" height="86" src="/images/cloud services.png">
    </div>
  </div>
  <div class="col-md-2 services">
    <div class="services-box">
      <img width="147" height="86" src="/images/troubleshooting.png">
    </div>
  </div>
  <div class="col-md-2 services">
    <div class="services-box">
      <img width="147" height="86" src="/images/secure back up.png">
    </div>
  </div>
  <div class="col-md-3 services">
    <div class="services-box">
      <img width="147" height="86" src="/images/user staff.png">
    </div>
  </div>
</div>

<div class="row services">
    <div class="col-md-2 col-md-offset-1 services">
    <div class="services-box">
      <a href="/services/email">
      <img width="147" height="86" src="/images/email issues.png">
      </a>
    </div>
    </div>
  <div class="col-md-2 services">
    <div class="services-box">
      <img width="147" height="86" src="/images/new computer sales.png">
    </div>
  </div>
  <div class="col-md-2 services">
    <div class="services-box">
      <img width="147" height="86" src="/images/tablet and mobile set up.png">
    </div>
  </div>
  <div class="col-md-2 services">
    <div class="services-box">
      <img width="147" height="86" src="/images/web design.png">
    </div>
  </div>
  <div class="col-md-3 services">
    <div class="services-box">
      <img width="147" height="86" src="/images/printer set up.png">
    </div>
  </div>
</div>

<div class="row services">
  <div class="col-md-12">
    <img src="/images/spacer.gif" height="30px">
  </div>
</div>


@endsection
