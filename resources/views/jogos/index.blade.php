@extends('layouts.app')

@section('title', 'Lista de Jogos')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
                <h1 class="text-md-start text-center">Lista de Jogos</h1>
            </div>
            <div class="col-md-6 text-md-end text-center">
                <a href="{{ route('jogos-create') }}" class="btn btn-primary">Novo Jogo</a>
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ano de Criação</th>
                <th scope="col">Valor</th>
                <th scope="col">Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jogos as $jogo)
                <tr>
                    <th>{{ $jogo->id }}</th>
                    <th>{{ $jogo->nome }}</th>
                    <th>{{ $jogo->categoria }}</th>
                    <th>{{ $jogo->ano_criacao }}</th>
                    <th>{{ $jogo->valor }}</th>
                    <th class="d-flex">
                        <a href="{{ route('jogos-edit', ['id'=>$jogo->id]) }}" class="btn btn-secondary me-2">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <form action="{{ route('jogos-destroy', ['id'=>$jogo->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection
