@extends('layouts.app')

@section('content')
<h1>Check your PC</h1>

<form method="POST" action="/services/systems_send" id="frmOrderSystem">
  {{ csrf_field() }}

    <input type="hidden" name="id" value="{{ $system->id }}">

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

    <table class="table">
        <thead>
            <th align="left">Category</th>
            <th align="left">Component</th>
            <th align="left">Price</th>
        </thead>
    @foreach ($system->system_components as $system_component)
        <tr>
            <td valign="top">
                {{ $system_component->component->component_category->long_name }}
            </td>
            <td valign="top">
                {{ $system_component->component->description }}
            </td>
            <td valign="top" align="right">
                {{ money_format('%i',$system_component->component->price) }}
            </td>
        </tr>
    @endforeach
        <tr>
            <td align="right" colspan="3">
                {{ money_format('%i', $system->total) }}
            </td>
        </tr>
    </table>
<Br>
      <input type='submit' value='Send' class='btn btn-primary'>
      <br><br>
      Or if you want to update something first, go
      <a href='/services/systems/{{ $system->id }}/edit' class='btn btn-default'>Back</a>
  </form>
  <br>
@stop
