<style>
    body {
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    }
</style>
<br>
<div style="width:100%; background-color: #11284C; text-align:center; color: white;">
    <br>
    <h1>Your New PC is coming!</h1>
    <br>
</div>
<br>
Hi {{ $system->name }},<br>
<br>
Thank you so much for your order. Your order number is {{ $system->id }}. Please
take note of this number as it could come in handy if we need to find your order.
Here's what you've ordered:<br>
<br>
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
    <tr>
        <td align="right" colspan="3">
            {{ money_format('%i', $system->total) }}
        </td>
    </tr>
</table>
<Br>
I have your details as follows:<br>
<br />
<b>Name:</b> {{ $system->name }}<br />
<b>Number:</b> {{ $system->phone }}<br />
<b>Email:</b> {{ $system->email }}<br />
<br>
Please reply to this email if any of the above details are incorrect, or call us
on 02 6112 8025.<br>
<br>
We'll be in touch shortly to confirm your order.<br>
<br>
Cheers,<br>
<br>
<img src='http://computerwhiz.com.au/images/sig-sm.png' alt="Derek Signature"><br>
<br>
<b>Derek Gillett</b><br>
<em>Technician/Owner</em><br>
Computer Whiz - Canberra<br>
P 02 6112 8025<br>
M 0474 029 265<br>
E: derek@computerwhiz.com.au<br>
W <a href="http://computerwhiz.com.au">http://computerwhiz.com.au</a>
