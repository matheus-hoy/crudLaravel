@extends('layout')
@section('content')
    @include('components.navbar')

    <h2 class="d-flex justify-content-center mt-4">Visualização</h2>
    <div class="mt-4 card">
        <div class="card-body mx-auto" style="width:45rem;">
            <ul class="list-group">
                <li class="list-group-item">
                    <b>Nome</b>: {{ $customer->name }}
                </li>
                <li class="list-group-item">
                    <b>CPF</b>: {{ $customer->cpf }}
                </li>
                <li class="list-group-item">
                    <b>E-mail</b>: {{ $customer->email }}
                </li>
                <li class="list-group-item">
                    <b>Telefone</b>: {{ $customer->telefone }}
                </li>
            </ul>
        </div>
        <div class="btn-lg mx-auto">
            <a href="{{ route('customers.index') }}"><button class="btn btn-primary">
                    Voltar
            </button></a>
        </div>
    </div>

@endsection
