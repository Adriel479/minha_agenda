@extends('template-agenda')
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
            <tr>
                <td>Adriel Vieira</td>
                <td>North 654</td>
                <td>toystory@abrael.com</td>
                <td>(08) 9 5965 - 6352</td>
                <td>
                        <a href="#" class="badge badge-primary"><i style="font-size: 20px" class="fa fa-edit "></i></a>
                        <a href="#" class="badge badge-danger"><i style="font-size: 20px" class="fa fa-trash"></i></a>
                        <a href="#" class="badge badge-success"><i style="font-size: 20px" class="fa fa-whatsapp"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
 

@stop