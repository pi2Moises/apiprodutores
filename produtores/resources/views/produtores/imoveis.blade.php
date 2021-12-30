@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card full-height">
        <div class="card-body">
            <div class="card-title">IMÓVEL(IS) DE <span style="text-transform: uppercase; font-weight: bold;">{{$nome_produtor}}</span>
                <div class="card-tools">
                    <a href="{{url('/')}}" class="btn btn-info btn-border btn-round btn-sm mr-2">
                        <span class="btn-label">
                            <i class="fas fa-angle-left"></i>
                        </span>
                        Voltar
                    </a>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                @if($imoveis)
                <input type="hidden" name="id_produtor" id="id_produtor" value="{{$id_produtor}}">
                <table id="basic-datatables" class="table table-hover display table table-striped table-hover dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NOME DO IMÓVEL</th>
                            <th>UF</th>
                            <th>MUNICÍPIO</th>
                            <th>ÁREA</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $i  = 1;
                        @endphp
                            @foreach ($imoveis as $v)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td style="text-transform: uppercase">{{$v->nome_imovel}}</td>
                                    <td>{{$v->uf}}</td>
                                    <td>{{$v->municipio}}</td>
                                    <td>{{$v->area}}</td>
                                    <td>
                                        @if(count($v->atividades) > 0)
                                            <button class="btn btn-default busca-atividades" data-id="{{$v->id}}" data-toggle="modal" data-target="#exampleModal">
                                                <span class="btn-label">
                                                    <i class="fas fa-folder-open"></i>
                                                </span>
                                                Exibir Atividades
                                            </button>
                                        @else 
                                        <p class="text-danger">Sem registro de atividades.</p>
                                        @endif
                                    </td>
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
  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 1200px;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Lista de Atividades</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body lista-atividades">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
</div>
@endsection