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
                <h1>Editando Cliente</h1>
                <form action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}" method="post">
                    @csrf
                    @method('put')
                    @include('cliente._partials.form')
                </form>
            </div>

        </div>

    </div>

@endsection
