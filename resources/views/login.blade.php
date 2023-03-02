@include('nav')

<h3>Login</h3>

<form action="{{ route('login_submit') }}" method="POST">
    @csrf
    <div>Email Address</div>
    <div>
        <input type="text" name="email">
    </div>
    <div>Password</div>
    <div>
        <input type="password" name="password">
    </div>
    <div style="margin-top:10px">
        <input type="submit" value="Login">
        <a href="{{ route('forgot_password') }}">Forgot password</a>
    </div>
</form>