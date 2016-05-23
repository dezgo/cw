@extends('layouts.app')

@section('content')
<style>
h2 {
  font-variant: small-caps;
}
a.component {
  color: black;
}
</style>

<h1>New Computer Sales &amp; Set Up</h1>
Is your computer running slow? It might be slow internet, malware, or maybe it's
just time for a new one. If your computer is over 5 years old, it's generally
a good time to consider an upgrade rather than spending money on your existing
system.<br>
<br>
Below is a system builder you can use to pick exactly the sort of computer you
want. You get to pick every component, and we build it, install the software,
transfer your old data across to it, and come to you to set it up.<br>
<br>

<form method="POST" action="/services/systems">
  {{ csrf_field() }}

<div class="row">
  <div class="col-md-9">
@foreach ($components as $key => $value)
<a name="{{ $key }}"></a>
<h2>{{ $key }}</h2>
<div class="row">
  <div class="col-md-3">
    <img src="/images/{{ $components[$key]['image_path'] }}">
    @if ($value['parts'][0]['max_speed'] > 0)
    <br>
    Speed:&nbsp;<span id="{{ $key }}SpeedValue"></span><div class="progress">
      <div id="{{ $key }}Speed" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
        <span class="sr-only">Speed not selected yet</span>
      </div>
    </div>
    @endif
  </div>

  <div class="col-md-9">
    <div class="list-group">
      @foreach($components[$key]['parts'] as $component)
      <div class="radio">
        <label>
          <input type="radio" name="opt{{ $key }}" value="{{ $component['id'] }}" price="{{ $component['price'] }}"
          {{ count($components[$key]['parts']) == 1 ? ' checked="checked"' : '' }}>
          {{ $component['description'].' ('.money_format('%i', $component['price']).')' }}
        </label>
      </div>
      @endforeach
    </div>

  </div>
</div>
@endforeach
</div>
  <div class="col-md-3">
    <div class="panel panel-default" data-spy="affix">
      <div class="panel-body">
        <h2>PC Builder</h2>
        @foreach ($components as $key => $value)
          <i id='{{ $key }}Status' aria-hidden="true"></i>&nbsp;
          <a class="component" href="#{{ $key }}">{{ ucwords($key,'_') }}</a><br>
        @endforeach
        <h4>Total:&nbsp;$<span id="systemTotalPrice">0.00</span></h4>
        <input type=submit value="Next" class="btn btn-primary" disabled>
      </div>
    </div>
  </div>
</div>

</form>

<script language="javascript">
$(document).ready(function() {
    @foreach($components as $key => $value)
    $('input[type=radio][name=opt{{ $key }}]').change(function() {
      @if ($value['parts'][0]['max_speed'] > 0)
        switch (this.value) {
          @foreach($components[$key]['parts'] as $component)
            case '{{ $component['id'] }}':
              $('#{{ $key }}Speed').css('width', '{{ round($component['speed'] / $component['max_speed'] * 100, 0) }}%');
              $('#{{ $key }}SpeedValue').html('').append('{{ round($component['speed'] / $component['max_speed'] * 100, 0) }}');
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
    total += parseFloat($(this).attr('price'));
  });
  $('#systemTotalPrice').html('').append(total.toFixed(2));
};

updateStatus = function() {
  @foreach($components as $key => $value)
  if (typeof $('input[type=radio][name=opt{{ $key }}]:checked').val() === "undefined") {
    $('#{{ $key }}Status').attr('class', 'fa fa-hourglass-2');
  }
  else {
    if ($('input[type=radio][name=opt{{ $key }}]:checked').val() == 0) {
      $('#{{ $key }}Status').attr('class', 'fa fa-minus');
    }
    else {
      $('#{{ $key }}Status').attr('class', 'fa fa-check');
    }
  }
  @endforeach
};

enabledSubmit = function() {
  var remain = 0;
  @foreach($components as $key => $value)
  if (typeof $('input[type=radio][name=opt{{ $key }}]:checked').val() === "undefined") {
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
