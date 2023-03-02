@include('admin.nav')

<h1>Dashboard - Admin</h1>
<p>Hi {{ Auth::guard('admin')->user()->name }},welcome to dashboard!</p>
