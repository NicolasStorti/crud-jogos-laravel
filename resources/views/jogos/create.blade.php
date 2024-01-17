@extends('layouts.app')

@section('title', 'Adicionar Jogos')

@section('content')
    <div class="container mt-5">
        <h1>Adicione um Novo Jogo</h1>
        <form action="{{ route('jogos-store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite o Nome do Jogo">
            </div>
            <div class="form-group mb-3">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" placeholder="Digite a Categoria do Jogo">
            </div>
            <div class="form-group mb-3">
                <label for="ano_criacao">Ano de Criação:</label>
                <input type="number" class="form-control" name="ano_criacao" placeholder="Digite o Ano de Criação">
            </div>
            <div class="form-group mb-3">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor" placeholder="Digite o Valor do Jogo">
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" name="submit">
            </div>

        </form>
    </div>
@endsection
