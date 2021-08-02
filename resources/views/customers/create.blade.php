@extends('layout')
@section('content')
@include('components.navbar')

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 my-3">
        <form method="POST" action="{{ route('customers.store') }}" class="form-control form-control-lg" class="form-control form-control-sm" id="formulario" method="post" action="processor.php">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Seu Nome completo.">
                @error('name')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>


            <div class="form-group">
                <label for="CPF">CPF</label>
                <input type="text" name="cpf" class="form-control" id="cpf" aria-describedby="cpf" placeholder="Seu CPF.">
                @error('cpf')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>


            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Seu email.">
                <small id="email" class="form-text text-muted">Nunca vamos compartilhar seu email, com
                    ninguém!</small>
                @error('email')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" aria-describedby="telefone" placeholder="Seu telefone.">
                @error('telefone')
                <p class="text-danger">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <br><input class="btn btn-primary mx-auto d-block" type="submit" value="cadastrar-se">

        </form>
    </div>
</div>


@endsection
