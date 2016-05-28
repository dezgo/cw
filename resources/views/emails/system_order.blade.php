Incoming system order!<br />
<br />
<b>Name:</b> {{ $request->name}}<br />
<b>Number:</b> {{ $request->phone }}<br />
<b>Email:</b> {{ $request->email }}<br />
<hr>
<b>Components:</b><br>
foreach ($system->components as $system_component)
  {{ $system_component->component->description }}<br>
}
<Br>
Get cracking dude!
