@include('nav')

<h1>Dashboard - User</h1>
<p>Hi {{ Auth::guard('web')->user()->name }},welcome to dashboard!</p>
