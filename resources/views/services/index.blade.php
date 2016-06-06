@extends('layouts.app')

@section('head')
<style>
.clickable {
    padding:1px;
    border:1px solid #021a40;
}
</style>

@stop

@section('content')
<div class="row">
    <div class="col-md-5">
        <img alt="Fast Reliable Friendly Onsite Support" src="/images/services.png">
    </div>
    <div class="col-md-7">
        <h3>Home Services</h3>
        We can help with everything from troubleshooting, diagnosing, building, servicing, maintaining
        and repairing any brand of desktops and laptops<br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>Mac or PC</li>
                    <li>Email Issues</li>
                    <li>Troubleshooting</li>
                    <li>User support and training</li>
                    <li>Secure backup</li>
                    <li>Internet/Wifi</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>Tablet and mobile set up</li>
                    <li>Virus removal &amp; protection</li>
                    <li>Printer set up</li>
                    <li>New computer sales &amp; set up</li>
                    <li>Photos - sharing accesing &amp; storing them securely</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <img alt="spacer" src="/images/spacer.gif" height="40">
    </div>
</div>
<div class="row">
    <div class="col-md-8">

        <div class="row">
          <div class="col-md-6">
            <img alt="Virus Removal and Protection" src="/images/svh_virus.png"><br>
            <br>
            <a href="/services/email"><img alt="Email Issues" src="/images/svh_email.png" class="clickable"></a><Br>
            <br>
            <img alt="Troubleshooting" src="/images/svh_troubl.png"><br>
            <br>
            <img alt="Tablet and Mobile Setup and Training" src="/images/svh_tablet.png"><br>
            <br>
            <img alt="New Computer Sales and Setup" src="/images/svh_new_comp.png"><br>
            <br>
          </div>
          <div class="col-md-6">
            <img alt="User Support and Training" src="/images/svh_user.png"><br>
            <Br>
            <a href="http://partners.carbonite.com/computerwhiz-canberra" target="_blank">
                <img alt="Secure Backup" src="/images/svh_secure.png" class="clickable"><Br>
            </a>
            <br>
            <img alt="Photos-Storing and Sharing" src="/images/svh_photos.png"><br>
            <br>
            <img alt="Printer Setup" src="/images/svh_printer.png"><br>
            <br>
            <img alt="Internet Connection" src="/images/svh_internet.png"><br>
            <br>
          </div>
        </div>
    </div>
    <div class="col-md-4">
        @include('includes.contact')
    </div>
</div>

@stop
