@extends('layout')

@section('conteudo')
    <h1>Exercício 11</h1>
    <form method="post" action="/resposta11">
        @CSRF
        <div class="mb-3">
            <label for="raio" class="form-label">Insira o raio do círculo:</label>
            <input type="number" id="raio" name="raio" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($perimetroCirculo)
        <p class="text-success">O perímetro do círculo é: {{ $perimetroCirculo }}</p>
    @endisset
@endsection