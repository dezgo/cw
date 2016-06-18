@extends('layouts.app')

@section('content')
<h1>Visitor Tracking Information</h1>

<table class="table">
    <tr>
        <th>IP</th>
        <th>User Agent</th>
        <th>URI</th>
        <th>Referer</th>
        <th>Updated</th>
    </tr>
@foreach($visitors as $visitor)
    <Tr>
        <td>{{ $visitor->addr }}</td>
        <td>{{ $visitor->user_agent }}</td>
        <td>{{ $visitor->document_uri }}</td>
        <td>{{ $visitor->http_referer }}</td>
        <td>{{ $visitor->updated_at }}</td>
    </tr>
@endforeach
</table>

@stop
