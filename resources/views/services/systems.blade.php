@extends('layouts.app')

@section('head')
<title>Systems</title>
@stop

@section('content')
<style>
h2 {
  font-variant: small-caps;
}
a.component {
  color: black;
}
.affix {
  top: 0;
}
</style>

<h1>Want a new desktop computer?</h1>
Like magic, get a new computer in place of your old one, with all your data on it,
programs just the way you like them, and we can even come to you and set it up.<br>
<br>
Below is a system builder you can use to pick exactly the sort of computer you
want. You get to pick every component, and we do the rest.<br>
<br>
<form method="POST" action="/services/systems">
  {{ csrf_field() }}

@if (!empty($system))
    <input type="hidden" name="system_id" value="{{ $system->id }}">
@endif
<div class="row">
  <div class="col-md-9">
@foreach ($component_categories as $component_category)
<h2 id="{{ $component_category->name }}">{{ $component_category->long_name }}</h2>
<div class="row">
  <div class="col-md-3">
    <img alt="{{ $component_category->name }}" src="/images/{{ $component_category->image_path }}">
    @if ($component_category->max_speed() > 0)
    <br>
    Speed:&nbsp;<span id="{{ $component_category->name }}SpeedValue"></span><div class="progress">
      <div id="{{ $component_category->name }}Speed" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
        <span class="sr-only">Speed not selected yet</span>
      </div>
    </div>
    @endif
  </div>

  <div class="col-md-9">
      {{ $component_category->description }}<br>
    <div class="list-group">
        @if (!$component_category->required)
        <div class="radio">
          <label>
            <input type="radio" name="opt{{ $component_category->name }}" value="skip" data-price="0"
            @if (!empty($system) and !$system->contains_component_in_category($component_category))
            checked="checked"
            @endif
            >
            Skip
          </label>
        </div>
        @endif
      @foreach($component_category->components as $component)
      <div class="radio">
        <label>
          <?php
          $checked = (count($component_category->components) == 1 and $component_category->required);
          if (!empty($system) and !$checked ) {
            $checked = array_search($component->id, $system->component_ids());
          }
          ?>
          <input type="radio" name="opt{{ $component_category->name }}" value="{{ $component->id }}" data-price="{{ $component->price }}"
          {{ $checked ? ' checked="checked"' : '' }}>
          {{ $component->description.' ('.money_format('%i', $component->price).')' }}
        </label>
      </div>
      @endforeach
    </div>

  </div>
</div>
<hr>
@endforeach
</div>
  <div class="col-md-3">
    <div class="panel panel-default" data-spy="affix" data-offset-top="200">
      <div class="panel-body">
        <a class="component" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <small>Click to show/hide</small></a>
            <h2>Status</h2>
        <div class="collapse in" id="collapseExample">
            @foreach ($component_categories as $component_category)
              <i id='{{ $component_category->name }}Status' aria-hidden="true"></i>&nbsp;
              <a class="component" href="#{{ $component_category->name }}">{{ ucwords($component_category->name,'_') }}</a><br>
            @endforeach
            <h4>Total:&nbsp;$<span id="systemTotalPrice">0.00</span></h4>
            <input id='btnNext' type=submit value="Next" class="btn btn-primary" disabled>
          </div>
      </div>
    </div>
  </div>
</div>

</form>

<script>
$(document).ready(function() {
    @foreach ($component_categories as $component_category)
    $('input[type=radio][name=opt{{ $component_category->name }}]').change(function() {
      @if ($component_category->max_speed() > 0)
        switch (this.value) {
          @foreach($component_category->components as $component)
            case '{{ $component->id }}':
              $('#{{ $component_category->name }}Speed').css('width', '{{ round($component->speed / $component_category->max_speed() * 100, 0) }}%');
              $('#{{ $component_category->name }}SpeedValue').html('').append('{{ round($component->speed / $component_category->max_speed() * 100, 0) }}');
              break;
          @endforeach
            break;
        }
      @endif

      calcTotal();
      updateStatus();
      enabledSubmit();
    });
    @endforeach

});

calcTotal = function() {
  var total = 0;
  $(':radio:checked').each(function(){
    total += parseFloat($(this).attr('data-price'));
  });
  $('#systemTotalPrice').html('').append(total.toFixed(2));
};

updateStatus = function() {
    @foreach ($component_categories as $component_category)
    if (typeof $('input[type=radio][name=opt{{ $component_category->name }}]:checked').val() === "undefined") {
        $('#{{ $component_category->name }}Status').attr('class', 'fa fa-hourglass-2');
    }
    else {
        if ($('input[type=radio][name=opt{{ $component_category->name }}]:checked').val() == 0) {
            $('#{{ $component_category->name }}Status').attr('class', 'fa fa-minus');
        }
        else {
            $('#{{ $component_category->name }}Status').attr('class', 'fa fa-check');
        }
    }
    @endforeach
};

enabledSubmit = function() {
  var remain = 0;
  @foreach ($component_categories as $component_category)
  if (typeof $('input[type=radio][name=opt{{ $component_category->name }}]:checked').val() === "undefined") {
    remain++;
  }
  @endforeach

  if (remain == 0) {
    $('input[type="submit"]').prop('disabled', false);
  }
}

calcTotal();
updateStatus();
enabledSubmit();

</script>
@stop
