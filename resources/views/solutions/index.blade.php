@extends('layouts.app')

@section('head')
<meta name="title" content="Small Business IT Support &amp; Cloud Services Specialist in Canberra">
@stop

@section('content')
<div class="row">
    <div class="col-md-5">
        <img alt="Fast Reliable Friendly Onsite Support" src="/images/business_solutions.png">
    </div>
    <div class="col-md-7">
        <h3>Business Solutions</h3>
        We provide professional IT support for small business, whether it is a single project or
        contracted day to day running running of your computer network. We can help
        with things like:<br>
        <br>
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li>Mac or PC</li>
                        <li>Business Email Setup</li>
                        <li>Troubleshooting</li>
                        <li>User support and training</li>
                        <li>Secure backup</li>
                        <li>Internet/Wifi</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Tablet and mobile setup</li>
                        <li>Virus removal &amp; protection</li>
                        <li>Network/local printer installation</li>
                        <li>New computer sales &amp; support</li>
                        <li>Networking</li>
                        <li>Wesite design and hosting</li>
                    </ul>
                </div>
            </div>
        Your issue not covered? We can probably still help, so contact us now
        for a chat.
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <img alt="spacer" src="/images/spacer.gif" height="40">
    </div>
</div>
<div class="row">
    <div class="col-md-7">

        <div class="row">
          <div class="col-md-6">
            <img alt="Virus Removal and Protection" src="/images/svb_virus.png"><br>
            <br>
            <a id="emailserviceslink" href="/services/email">
                <img alt="Email Issues/Business Email" src="/images/svh_email.png" class="clickable"><Br>
            </a>
            <br>
            <img alt="Troubleshooting" src="/images/svb_troubles.png"><br>
            <br>
            <img alt="Networking" src="/images/svb_network.png"><br>
            <br>
            <a id="systemslink" href="/services/systems">
                <img alt="New Computer Sales and Setup" src="/images/svh_new_comp.png" class="clickable"><br>
            </a>
          </div>
          <div class="col-md-6">
            <img alt="User/Staff Support and Training" src="/images/svb_user.png"><br>
            <br>
            <a href="http://partners.carbonite.com/computerwhiz-canberra" target="_blank">
                <img alt="Secure Backup" src="/images/svb_secure.png" class="clickable"><br>
            </a>
            <br>
            <img alt="Web Design and Web Hosting" src="/images/svb_web.png"><br>
            <br>
            <img alt="Cloud Services" src="/images/svb_cloud.png"><br>
            <br>
            <img alt="Internet Connection" src="/images/svb_internet.png"><br>
          </div>
        </div>
    </div>
    <div class="col-md-5">
        @include('includes.contact')
    </div>
</div>

@stop
