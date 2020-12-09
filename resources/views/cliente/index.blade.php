@extends('layout.master')

@section('css')
    <style type="text/css">
        h1 {
            margin: 30px 0px 30px 0px;
        }

    </style>
@stop

@section('conteudo')
    @include('mensagens.mensagens');
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Cliente</h1>
                        <a class="btn btn-primary mb-2" href="{{ route('cliente.create') }}">Novo Cliente</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <form action="{{ route('cliente.search') }}" method="post">
                                        @csrf
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <label class="sr-only" for="nome">Nome Cliente</label>
                                                <input type="text" class="form-control mb-2" name="nome" id="nome"
                                                    placeholder="Nome do Cliente">
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary mb-2">Pesquisar</button>
                                            </div>
                                        </div>
                                    </form>
                                    @if (isset($nome_cliente))
                                        <div>
                                            <p><strong>Resultados para: </strong> {{ $nome_cliente }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="d-flex justify-content-end">
                                    <form action="{{ route('relatorio.export') }}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-auto">
                                                <label class="sr-only" for="nome">Nome Cliente</label>
                                                <input type="hidden" name="nome" id="nome"
                                                    value="{{ isset($nome_cliente) ? $nome_cliente : '' }}" />
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary mb-2" title="Exportar resultados para XLSX">Exportar XLSX</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome Cliente</th>
                                    <th scope="col">Galc</th>
                                    <th scope="col">Porta</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">Velocidade</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($clientes))

                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <th scope="row">{{ $cliente->id }}</th>
                                            <td>{{ $cliente->nome_cliente }}</td>
                                            <td>{{ $cliente->galc }}</td>
                                            <td>{{ $cliente->porta }}</td>
                                            <td>{{ $cliente->endereco }}</td>
                                            <td>{{ $cliente->velocidade }}</td>
                                            <td>
                                                <a href="{{ route('cliente.edit', ['cliente' => $cliente->id]) }}"><i
                                                        class="fa fa-edit btn btn-primary"></i></a>

                                                <a href="#" class="btn btn-danger fa fa-trash"
                                                    onclick="event.preventDefault(); document.getElementById('delete').submit();">
                                                    <form id="delete"
                                                        action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        {{ csrf_field() }}
                                                    </form>
                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td style="text-align:center;" colspan="7">Nenhum registro encontrado!</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center">
                            @if (isset($nome_cliente))
                                {!! $clientes->appends(['nome' => $nome_cliente])->links() !!}
                            @else
                                {!! $clientes->links() !!}
                            @endif
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
