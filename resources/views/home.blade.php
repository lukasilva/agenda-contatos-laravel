@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contatos as $contato)
            <tr>
                <th scope="row">{{$contato->id}}</th>
                <td>{{$contato->name}}</td>
                <td>{{$contato->email}}</td>
                <td>{{$contato->telefone}}</td>
            </tr>
            @endforeach
            </tbody>
        
        </table>
         <div class='text-right'>
            {{ $contatos->links() }}
        </div>
    </div>
   
    <div class="form-actions text-center">
        <a type="button" class="btn btn-primary" href="contato/cadastro"> Cadastrar</a>            
    </div>
    
</div>
@endsection
