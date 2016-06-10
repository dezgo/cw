@section('head')
<style>
  .book_now {
    background-color: #11274B;
    color: white;
    font-family: 'Arial Black', 'Arial Bold', Gadget, sans-serif;
    font-size: 15px;
    padding: 8px;
  }
</style>
@stop

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
  BOOK NOW! or Request a Callback
</div>
<br>
<form method="POST" action="/contact_send" id="frmContact">
  {{ csrf_field() }}

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="control-label">Name*</label><br>
    <input type="text" id="name" name="name" size="50" class="form-control" value="{{ old('name') }}">
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
  </div>

  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="control-label">Email</label><br>
    <input type="text" id="email" name="email" size="50" class="form-control" value="{{ old('email') }}">
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
  </div>

  <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    <label for="phone" class="control-label">Telephone</label><br>
    <input type="text" id="phone" name="phone" size="15" class="form-control" value="{{ old('phone') }}">
    @if ($errors->has('phone'))
        <span class="help-block">
            <strong>{{ $errors->first('phone') }}</strong>
        </span>
    @endif
  </div>

  <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
    <label for="message" class="control-label">Message</label>
    <textarea cols="50" rows="5" id="message" name="message" class="form-control">{{ old('message') }}</textarea>
    @if ($errors->has('message'))
        <span class="help-block">
            <strong>{{ $errors->first('message') }}</strong>
        </span>
    @endif
  </div>

  <input id="btnSend" type="submit" class="btn btn-primary" value="Send">
</form>
@endif
