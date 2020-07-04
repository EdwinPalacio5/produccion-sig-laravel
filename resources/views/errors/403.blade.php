@extends('errors::illustrated-layout')
@section('title','403')
@section('code','Acceso Negado')
@section('image')
<img src="{{asset('./img/403.png')}}" class="ml-3" alt="ACCESS DENIED" width="600">
@endsection
@section('message','NO ERES USUARIO ESTRATEGICO.')