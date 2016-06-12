@extends('layouts.app')

@section('head')
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
    background-color: #11274B;
  }

  .service {
      background-color: white;
      padding: 10px;
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
@stop

@section('content')
<div class="splash">
    <img alt="spacer" src="/images/spacer.gif" height="154">
    <Br>
    <img alt="Professional Support" class="prof_tag" src="/images/prof_support.gif">
    <Br>
    <img alt="spacer" src="/images/spacer.gif" height="308">
    <img alt="Fast Friendly Reliable Onsite Support" src="/images/red_tagline.gif">
</div>

<div class="row services">
  <div class="col-md-12">
    <img alt="spacer" src="/images/spacer.gif" height="20">
  </div>
</div>
<div class="row services">
  <div class="col-md-3 boxed-title">
    <img alt="spacer" src="/images/spacer.gif" width="20"> Specialising&nbsp;in:
  </div>
</div>
<div class="row services">
    <div class="col-md-12">
        <br>
    </div>
</div>
<div class="row services">
  <div class="col-md-3 text-center">
      <div class="service">
          <img alt="Virus Removal Service" src="/images/sv_virus_removal1.png">
      </div>
  </div>
  <div class="col-md-3 text-center">
      <div class="service">
          <img alt="Cloud Services" src="/images/sv_cloud_services1.png">
      </div>
  </div>
  <div class="col-md-3 text-center">
      <div class="service">
      <img alt="Troubleshooting Service" src="/images/sv_troubleshooting1.png">
  </div>
  </div>
  <div class="col-md-3 text-center">
      <div class="service">
        <img alt="Secure Backup Service" src="/images/sv_secure_backup1.png">
    </div>
  </div>
</div>
<div class="row services">
    <div class="col-md-3 text-center">
        <div class="service">
      <img alt="Email Issues" src="/images/sv_email_issues1.png">
  </div>
    </div>
  <div class="col-md-3 text-center">
      <div class="service">
          <a id="systemslink" href="/services/systems">
              <img alt="New Computer Sales" src="/images/sv_new_computer_sales1.png">
          </a>
    </div>
  </div>
  <div class="col-md-3 text-center">
      <div class="service">
        <img alt="Tablet and Mobile Setup" src="/images/sv_tablet_and_mobile_setup1.png">
    </div>
  </div>
  <div class="col-md-3 text-center">
      <div class="service">
      <img alt="Web Design Service" src="/images/sv_web_design1.png">
  </div>
  </div>
</div>
<div class="row services">
  <div class="col-md-3 col-md-offset-3 text-center">
      <div class="service">
      <img alt="Printer Setup" src="/images/sv_printer_setup1.png">
  </div>
  </div>
  <div class="col-md-3 text-center">
      <div class="service">
      <img alt="Staff/User Training Service" src="/images/sv_user_staff1.png">
  </div>
  </div>
</div>

<div class="row services">
  <div class="col-md-12">
    <img alt="spacer" src="/images/spacer.gif" height="30">
  </div>
</div>


@endsection
