@extends('layout.app')
@section('title','Criar novo Livro')
@section('content')
    <h1>Criar novo Livro</h1>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div> 
    @endif
    <br />
    {{Form::open(['route' => 'livros.store', 'method' => 'POST'])}}
        {{Form::label('titulo', 'Titulo')}}
        {{Form::text('titulo','',['class'=>'form-control','required','placeholder'=>'Titulo completo'])}}
        {{Form::label('descricao', 'Descrição')}}
        {{Form::text('descricao','',['class'=>'form-control','required','placeholder'=>'Descrição'])}}
        {{Form::label('autor', 'Autor')}}
        {{Form::text('autor','',['class'=>'form-control','required','placeholder'=>'Autor'])}}
        {{Form::label('editora', 'Editora')}}
        {{Form::text('editora','',['class'=>'form-control','required','placeholder'=>'Nome da Editora'])}}
        {{Form::label('ano', 'Ano')}}
        {{Form::text('ano','',['class'=>'form-control','required','placeholder'=>'Ano'])}}
        <br />
        {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
        {!!Form::button('Cancelar',['onclick'=>'javascript:history.go(-1)', 'class'=>'btn btn-secondary'])!!}
    {{Form::close()}}
@endsection
