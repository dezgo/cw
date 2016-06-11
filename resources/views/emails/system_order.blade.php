Incoming system order!<br />
<br />
<b>Name:</b> {{ $system->name}}<br />
<b>Number:</b> {{ $system->phone }}<br />
<b>Email:</b> {{ $system->email }}<br />
<hr>
<b>Components:</b><br>
<table>
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
</table>
<Br>
Get cracking dude!
