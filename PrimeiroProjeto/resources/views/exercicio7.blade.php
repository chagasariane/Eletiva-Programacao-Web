@extends('layout')

@section('conteudo')
    <h1>Teste 7</h1>
        <form method="post" action="resposta7">
            @CSRF
            <div class="mb-3">
                <label for="fahrenheit" class="form-label">Insira uma temperatura em Fahrenheit:</label>
                <input type="number" id="fahrenheit" name="fahrenheit" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    @isset($celsius)
        <p class="text-success">A temperatura convertida em Celsius é: {{ $celsius }}</p>
    @endisset
@endsection