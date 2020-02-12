<h1>A customer sent a message on Codista!</h1>

<h2>Customer Name : {{ $request->name }}</h2>
<h3>Phone Number: {{ $request->number }}</h3>
<h3>Email: {{ $request->email }}</h3>

<hr>

<h3>Subject: {{ $request->subject }}</h3>
<p>{{ $request->message }}</p>
