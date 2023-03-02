@include('nav')

<h3>Forgot Password</h3>

<form action="{{ route('forgot_password_submit') }}" method="POST">
    @csrf
    <div>Email Adress</div>
    <div>
        <input type="text" name="email">
    </div>
   
    <div style="margin-top:10px">
        <input type="submit" value="Send">
        <a href="{{ route('login') }}">Back to login</a>
    </div>
</form>