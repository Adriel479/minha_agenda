@extends('template-agenda')
@section('conteudo')

    <h2 class="text-center">Novo contato</h2>

    <form action="" method="post">

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" />
        </div>

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" class="form-control" />
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" class="form-control" />
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" class="form-control" />
        </div>

        <div class="text-center">
            <input type="submit" value="Registrar Contato" class="btn btn-primary"/>
        </div>

    </form>

@stop