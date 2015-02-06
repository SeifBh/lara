@if(Session::has('message'))
    {{ Session::get('message')}}
@endif
<br>
@if (!empty($data))
    Hello, {{{ $data['name'] }}} 
    <img src="{{ $data['photo']}}">
    <br>
    Your email is {{ $data['email']}}
    <br>
    <a href="logout">Logout</a>
@else
<button  href="login/fb" class="btn btn-facebook"><i class="fa fa-facebook"></i> | Connect with Facebook</button>

@endif