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
  <div class="col-md-2 col-md-offset-1 services">
    <div class="services-box">
      <img alt="Virus Removal Service" width="147" height="86" src="/images/sv_virus_removal.png">
    </div>
  </div>
  <div class="col-md-2 services">
    <div class="services-box">
      <img alt="Cloud Services" width="147" height="86" src="/images/sv_cloud_services.png">
    </div>
  </div>
  <div class="col-md-2 services">
    <div class="services-box">
      <img alt="Troubleshooting Service" width="147" height="86" src="/images/sv_troubleshooting.png">
    </div>
  </div>
  <div class="col-md-2 services">
    <div class="services-box">
        <a href="http://partners.carbonite.com/computerwhiz-canberra" target="_blank">
            <img alt="Secure Backup Service" width="147" height="86" src="/images/sv_secure_backup.png">
        </a>
    </div>
  </div>
  <div class="col-md-3 services">
    <div class="services-box">
      <img alt="Staff/User Training Service" width="147" height="86" src="/images/sv_user_staff.png">
    </div>
  </div>
</div>

<div class="row services">
    <div class="col-md-2 col-md-offset-1 services">
    <div class="services-box">
      <a href="/services/email">
      <img alt="Email Issues" width="147" height="86" src="/images/sv_email_issues.png">
      </a>
    </div>
    </div>
  <div class="col-md-2 services">
    <div class="services-box">
      <img alt="New Computer Sales" width="147" height="86" src="/images/sv_new_computer_sales.png">
    </div>
  </div>
  <div class="col-md-2 services">
    <div class="services-box">
      <img alt="Tablet and Mobile Setup" width="147" height="86" src="/images/sv_tablet_and_mobile_setup.png">
    </div>
  </div>
  <div class="col-md-2 services">
    <div class="services-box">
      <img alt="Web Design Service" width="147" height="86" src="/images/sv_web_design.png">
    </div>
  </div>
  <div class="col-md-3 services">
    <div class="services-box">
      <img alt="Printer Setup" width="147" height="86" src="/images/sv_printer_setup.png">
    </div>
  </div>
</div>

<div class="row services">
  <div class="col-md-12">
    <img alt="spacer" src="/images/spacer.gif" height="30">
  </div>
</div>


@endsection
