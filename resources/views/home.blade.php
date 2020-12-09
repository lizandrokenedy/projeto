@extends('layout.master')

@section('css')


@stop

@section('conteudo')

    <div class="container">


        <div class="row">
            <div class="col-12">
                <div class="jumbotron">
                    <h1 class="mb-3 text-center display-4">Projeto Oi</h1>

                    <div class="text-center mb-3">
                        <img class="img-responsive" src="{{ asset('oi-logo-home.png') }}" width="250px"
                            alt="Oi Logo Home" />
                    </div>
                    <h3 class="text-center lead">Este projeto visa a seleção de candidatos para construir um time
                        sólido na empresa Oi.</h3>
                    <h3 class="text-center lead">Fundada em 22 de maio de 1998 com sua sede no Rio de Janeiro, a Oi
                        é a maior operadora de telefonia fixa e a
                        quarta maior operadora de telefonia móvel do Brasil, sendo também a terceira maior empresa do setor
                        de
                        telecomunicações na América do Sul.</h3>

                    <div class="text-center mt-3">
                        <a class="btn btn-primary btn-lg"
                            href="https://www.oi.com.br/ri/conteudo_pt.asp?idioma=0&conta=28&tipo=43303" target="_blank"
                            role="button">Conheça nossa história</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

            </div>

        </div>

    </div>

@endsection
