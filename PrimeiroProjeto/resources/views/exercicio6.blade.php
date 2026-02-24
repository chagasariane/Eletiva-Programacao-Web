@extends('layout')

@section('conteudo')
    <h1>Exercício 6</h1>
    <form method="post" action="resposta6">
        @CSRF
        <div class="mb-3">
            <label for="celsius" class="form-label">Insira uma temperatura em Celsius: </label>
            <input type="number" id="celsius" name="celsius" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($fahrenheit)
        <p class= "text-success">A temperatura convertida em Fahrenheit é: {{ $fahrenheit }}</p>
    @endisset
@endsection