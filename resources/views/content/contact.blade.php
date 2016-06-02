@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-4">
    <img alt="Contact" src='/images/contact.png'><br>
    <img alt="spacer" src="/images/spacer.gif" height="80"><br>
    <h4><b>Location:</b> Red Hill, ACT</h4>
    <br>
    <h4><b>Email:</b> web@computerwhiz.com.au</h4>
    <br>
    <h4><b>Office:</b> 02 6112 8025</h4>
    <h4><b>Mobile:</b> 0474 029 265</h4>
  </div>
  <div class="col-md-7 col-md-offset-1">
    <h1>Contact</h1>
    We provide IT support for anyone, whether you need help with your home computer,
    or contracted day-to-day running of your business network.<br>
    <br>
    @include('includes.contact')
  </div>
</div>

<script>
$('#frmContact').one('submit', function() {
    $(this).find('input[type="submit"]').attr('disabled','disabled');
});
</script>
@stop
