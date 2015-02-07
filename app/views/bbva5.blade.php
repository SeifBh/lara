
@extends('bbva5_a')

@section('contenue')
    {{ Form::open(array('method' => 'post')) }}
@section('log')


@if(Session::has('message'))
    {{ Session::get('message')}}
@endif
<br>

@if (!empty($data))
@section('fbPhoto')
 <img src="{{ $data['photo']}}">
 @stop
 @section('fbName')
{{{ $data['name'] }}} 
@stop



   

@else
    Hi! Would you like to <a href="/login/fb">Login with Facebook</a>?

@endif



@stop