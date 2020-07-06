@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p> Você está logado!<br>
                    Escolha uma das opções no menu superior:<br>
                        <b>Capturar</b>: permite capturar artigos do blog da UpLexis<br>
                        <b>Consultar</b>: permite consultar os artigos capturados (artigos repetidos não são inseridos novamente)<br>
                        <b>Registrar</b>: permite criar um novo usuário<br>
                   </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
