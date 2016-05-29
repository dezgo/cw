@extends('layouts.app')

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
        <ul>
            <div class="row">
                <div class="col-md-6">
                        <li>Mac or PC</li>
                        <li>Business Email Setup</li>
                        <li>Troubleshooting</li>
                        <li>User support and training</li>
                        <li>Secure backup</li>
                        <li>Internet/Wifi</li>
                </div>
                <div class="col-md-6">
                        <li>Tablet and mobile setup</li>
                        <li>Virus removal &amp; protection</li>
                        <li>Network/local printer installation</li>
                        <li>New computer sales &amp; support</li>
                        <li>Networking</li>
                        <li>Wesite design and hosting</li>
                </div>
            </div>
        </ul>
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
            <img alt="Email Issues/Business Email" src="/images/svb_email.png"><br>
            <br>
            <img alt="Troubleshooting" src="/images/svb_troubles.png"><br>
            <br>
            <img alt="Networking" src="/images/svb_network.png"><br>
            <br>
            <img alt="New Computer Sales and Setup" src="/images/svb_new_comp.png"><br>
          </div>
          <div class="col-md-6">
            <img alt="User/Staff Support and Training" src="/images/svb_user.png"><br>
            <br>
            <img alt="Secure Backup" src="/images/svb_secure.png"><br>
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
