@extends('layout.app')
@section('title','Listagem de Contatos')
@section('content')
    <h1>Listagem de Contatos</h1>
    @if(Session::has('mensagem'))
        <div class="alert alert-info">
            {{Session::get('mensagem')}}
        </div>
    @endif

    <br />
    <a class="btn btn-success" href="{{url('contatos/create')}}">Criar</a>
    <br /><br />
    <table class="table table-striped">
        @foreach ($contatos as $contato)
            <tr>
                <td>
                    <a href="{{url('contatos/'.$contato->id)}}">{{$contato->nome}}</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
