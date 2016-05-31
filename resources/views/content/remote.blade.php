@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-5">
        <img alt="Remote Support Lady" src="/images/remote_img.png">
    </div>
    <div class="col-md-7">
        <h3>Remote Support</h3>
        Need support now? Try our remote support option. Clicking the button below will
        download a small program called "TeamViewer QuickSupport". TeamViewer is an
        industry leader in remote support software. The QuickSupport module is
        optimized for instant support. It doesn't require installation or administrator
        rights.<br>
        <br>
        Once you run the program below, we will see your computer appear
        and will be able to initiate a connection. Once initiated, you must accept
        the request to provide remote support. From then on, you can sit back
        and relax while we get to work resolving your issue right before your
        eyes!<br>
        <br>
        <a target="qs" href='http://get.teamviewer.com/computerwhiz_qs'><img src="/images/remote_btn.png"></a>
        <iframe style="visibility:hidden;display:none" name="qs"></iframe>
    </div>
</div>

@stop
