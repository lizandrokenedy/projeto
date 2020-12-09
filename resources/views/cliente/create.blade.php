@extends('layout.master')

@section('css')
    <style type="text/css">

    </style>
@stop

@section('conteudo')
    @include('mensagens.mensagens');
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Novo Cliente</h1>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('cliente.store') }}" method="post">
                            @csrf
                            @include('cliente._partials.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
