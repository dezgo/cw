@extends('layouts.app')

@section('content')


<table class="table">
    <tr><td><h1>Component Categories</h1></td></tr>
@foreach($component_categories as $component_category)
<tr>
    <Td><a class="list" href="/component/{{ $component_category->id }}">{{ $component_category->long_name }}</a></td>
</tr>
@endforeach
</table>

@stop

@section('head')
<style>
a.list, a.list:hover {
    color: inherit;;
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
