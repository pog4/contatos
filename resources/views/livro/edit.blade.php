@extends('layout.app')
@section('title','Alteração Livro {{$livro->titulo}}')
@section('content')
    <h1>Alteração Livro {{$livro->titulo}}</h1>
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
    @if(Session::has('mensagem'))
        <div class="alert alert-success">
            {{Session::get('mensagem')}}
        </div>
    @endif 
    <br />
    {{Form::open(['route' => ['livrps.update',$livro->id], 'method' => 'PUT'])}}
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
        <a href="{{url('livros')}}" class="btn btn-secondary">Voltar</a>
    {{Form::close()}}
@endsection

