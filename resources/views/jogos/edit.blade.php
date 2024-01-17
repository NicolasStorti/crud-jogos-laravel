@extends('layouts.app')

@section('title', 'Edição de Jogo')

@section('content')
    <div class="container mt-5">
        <h1>Editar Jogo</h1>
        <form action="{{ route('jogos-update', ['id' => $jogos->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Digite o Nome do Jogo">
            </div>
            <div class="form-group mb-3">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digite a Categoria do Jogo">
            </div>
            <div class="form-group mb-3">
                <label for="ano_criacao">Ano de Criação:</label>
                <input type="number" class="form-control" name="ano_criacao" value="{{ $jogos->ano_criacao }}" placeholder="Digite o Ano de Criação">
            </div>
            <div class="form-group mb-3">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Digite o Valor do Jogo">
            </div>
            <div class="form-group mb-3">
                <input type="submit" class="btn btn-success" name="submit" value="Atualizar">
            </div>

        </form>
    </div>
@endsection
