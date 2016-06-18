@extends('layouts.app')

@section('content')
<h1>Components</h1>

<table class="table">
    <tr>
        <th>Category</th>
        <th>Component</th>
        <th>Price</th>
        <th>Age (days)</th>
    </tr>
@foreach($components as $component)
<tr>
    <Td><a class="list" href="/component/{{ $component->id }}/edit">{{ $component->long_name }}</a></td>
    <Td><a class="list" href="/component/{{ $component->id }}/edit">{{ $component->description }}</a></td>
    <Td><a class="list" href="/component/{{ $component->id }}/edit">{{ money_format('%i', $component->price/100) }}</a></td>
    <Td><a class="list" href="/component/{{ $component->id }}/edit">
        {{ date_diff(DateTime::createFromFormat('Y-m-d H:i:s', $component->updated_at), new DateTime())->format('%a') }}
        </a>
    </td>
</tr>
@endforeach
</table>

@stop

@section('head')
<style>
a.list, a.list:hover {
    color: inherit;
}
</style>
<script>
$( document ).ready(function() {
    $("tr").not(':first').hover(
      function () {
        $(this).css("background","#10477C");
        $(this).css("color","white");
      },
      function () {
        $(this).css("background","");
        $(this).css("color","black");
      }
    );
});

</script>
@stop
