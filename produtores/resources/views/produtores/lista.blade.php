@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card full-height">
        <div class="card-body">
            <div class="card-title">Lista de Produtores</div>
            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                @if($dados)
                <table id="basic-datatables" class="table table-hover display table table-striped table-hover dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NOME DO PRODUTOR</th>
                            <th>CPF</th>
                            <th>TELEFONE</th>
                            <th>EMAIL</th>
                            <th>QTD CONSULTA(S)</th>
                            <th>DT ÚLTIMA CONSULTA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $i  = 1;
                        @endphp
                            @foreach ($dados as $v)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td style="text-transform: uppercase"><a href=" {{url('/imoveis',$v->id)}} "> {{$v->nome}} </a></td>
                                    <td>{{$v->cpf}}</td>
                                    <td>{{$v->telefone}}</td>
                                    <td>{{$v->email}}</td>
                                    <td>{{$v->total_acessos}}</td>
                                    <td>{{$v->ultimo_acesso}}</td>
                                </tr>
                                @php 
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                @else
                    Nenhum registro encontrado.
                @endif
            </div>
        </div>
    </div>
</div>

@endsection