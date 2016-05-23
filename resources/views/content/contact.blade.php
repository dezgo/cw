@extends('layouts.app')

@section('content')
<style>
  .book_now {
    background-color: #11274B;
    color: white;
    font-family: font-family: 'Arial Black', 'Arial Bold', Gadget, sans-serif;
    font-size: 18px;
    padding: 8px;
  }
</style>
<div class="row">
  <div class="col-md-4">
    <img src='\images\contact.png'><br>
    <img src="/images/spacer.gif" height="80px"><br>
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
    @if (session('message_success'))
    <div class="alert alert-success" role="alert">
      {{ session('message_success') }}
    </div>
    @else
    @if (session('message_error'))
    <div class="alert alert-danger" role="alert">
      {{ session('message_error') }}
    </div>
@endif
      <div class="book_now">
      BOOK NOW! or Request a Callback!
    </div>
<br>
    <form method="POST" action="/contact_send" id="frmContact">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="control-label">Name*</label><br>
        <input type="text" name="name" size="50" class="form-control" value="{{ old('name') }}">
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="control-label">Email</label><br>
        <input type="text" name="email" size="50" class="form-control" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
        <label for="phone" class="control-label">Telephone</label><br>
        <input type="text" name="phone" size="15" class="form-control" value="{{ old('phone') }}">
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
        <label for="message" class="control-label">Message</label>
        <textarea cols="50" rows="5" name="message" class="form-control">{{ old('message') }}</textarea>
        @if ($errors->has('message'))
            <span class="help-block">
                <strong>{{ $errors->first('message') }}</strong>
            </span>
        @endif
      </div>

      <input type="submit" class="btn btn-primary" value="Send">
    </form>
@endif
  </div>
</div>

<script language="javascript">
$('#frmContact').one('submit', function() {
    $(this).find('input[type="submit"]').attr('disabled','disabled');
});
</script>
@stop
