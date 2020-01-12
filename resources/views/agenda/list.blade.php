@extends('agenda.template')
@section('conteudo')

    <h2 class="text-center">Contatos</h2>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contatos as $contato)
                <tr>
                    <td>{{ $contato->nome }}</td>
                    <td>{{ $contato->endereco }}</td>
                    <td>{{ $contato->email }}</td>
                    <td>{{ $contato->telefone }}</td>
                    <td>
                        <a href="{{route('edit', ['id'=>$contato->id])}}" class="d-block badge badge-primary"><i style="font-size: 20px" class="fa fa-edit "></i></a>
                        <a href="{{route('delete', ['id'=>$contato->id])}}" class="d-block badge badge-danger"><i style="font-size: 20px" class="fa fa-trash"></i></a>
                        <a href="#" class="d-block badge badge-success"><i style="font-size: 20px" class="fa fa-whatsapp"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop