@extends('layout')

@section('conteudo')
    <h1>Exercício 9</h1>
    <form method="post" action="resposta9">
        @CSRF
        <div class="mb-3">
            <label for="raio" class="form-label">Insira o raio do círculo:</label>
            <input type="number" id="raio" name="raio" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($area_circulo)
        <p class="text-success">A área do círculo é: {{ $area_circulo }}</p>
    @endisset
@endsection