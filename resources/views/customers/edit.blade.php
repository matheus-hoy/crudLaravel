@extends('layout')
@section('content')
@include('components.navbar')

<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-2">
            <form class="form-control form-control-lg" class="form-control form-control-sm" method="POST" action="{{route('customers.update', ['id'=> $customer->id])}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" type="text" name="name" placeholder="Digite o nome completo" value="{{$customer -> name}}"><br>
                </div>
                <div class="form-group">
                    <label>CPF</label>
                    <input class="form-control" type="text" name="cpf" placeholder="Digite o seu CPF" value="{{$customer -> cpf}}"><br>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" type="email" name="email" placeholder="Digite o seu e-mail" value="{{$customer -> email}}"><br>
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input class="form-control" type="text" name="telefone" placeholder="Digite seu telefone" value="{{$customer -> telefone}}"><br>
                </div>
                <br><input class="btn btn-primary mx-auto d-block" type="submit" value="Editar">
            </form>
        </div>
    </div>
</div>

@endsection


