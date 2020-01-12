@extends('agenda.template')
@section('conteudo')

    <h2 class="text-center">Editar contato</h2>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('update', ['id'=>$contato->id])}}" method="post">
    
        @csrf
        @method('put')
       
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ $contato->nome }}" class="form-control" />
        </div>

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" value="{{ $contato->endereco }}" class="form-control" />
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" value="{{ $contato->email }}" class="form-control" />
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" value="{{ $contato->telefone }}" class="form-control" />
        </div>

        <div class="text-center">
            <input type="submit" value="Alterar Contato" class="btn btn-primary"/>
        </div>

    </form>

@stop