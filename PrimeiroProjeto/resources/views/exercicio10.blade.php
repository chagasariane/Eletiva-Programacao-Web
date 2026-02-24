@extends('layout')

@section('conteudo')
    <h1>Exercício 10</h1>
    <form method="post" action="/resposta10">
        @CSRF
        <div class="mb-3">
            <label for="largura" class="form-label">Insira a largura do retângulo:</label>
            <input type="number" id="largura" name="largura" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="altura" class="form-label">Insira a altura do retângulo:</label>
            <input type="number" id="altura" name="altura" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($perimetroRetangulo)
        <p class="text-success">O perímetro do retângulo é: {{ $perimetroRetangulo }}</p>
    @endisset
@endsection