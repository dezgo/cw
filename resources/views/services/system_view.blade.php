@extends('layouts.app')

@section('content')
<h1>View System Built</h1>

<form method="POST" action="/services/systems_send" id="frmOrderSystem">
  {{ csrf_field() }}

  <div class="form-group">
    <label for="name" class="control-label">ID</label><br>
    <input type="text" name="id" class="form-control" value="{{ $system->id }}" readonly>
  </div>

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

  <div class="form-group">
    <label for="components" class="control-label">Components</label><br>
  @foreach ($system->components as $system_component)
    {{ $system_component->component->description }}<br>
  @endforeach
<Br>
      <input type='submit' value='Send' class='btn btn-primary'>
      <br><br>
      Or if you want to update something first, click Edit to go back<br>
      <a href='javascript:history.back()' class='btn btn-default'>Edit</a>
  </form>
@stop
