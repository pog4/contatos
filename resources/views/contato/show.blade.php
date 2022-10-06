@extends('layout.app')
@section('title','Contato - {{$contato->nome}}')
@section('content')
<h1>Contato - {{$contato->nome}}</h1>
<ul>
    <li>ID:{{$contato->nome}}</li>
    <li>e_mail:{{$contato->email}}</li>
    <li>Telefone:{{$contato->telefone}}</li>
    <li>Cidade:{{$contato->cidade}}</li>
    <li>Estado:{{$contato->estado}}</li>
</ul>
@endsection