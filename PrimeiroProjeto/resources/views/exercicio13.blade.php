@extends('layout')

@section('conteudo')
    <h1>Exercício 13</h1>
        <form method="post" action="\resposta13">
            @CSRF
            <div class="mb-3">
                <label for="metros" class="form-label">Insira um valor em metros:</label>
                <input type="number" id="metros" name="metros" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    @isset($centimetros)
        <p class="text-success">O valor em centímetro é: {{ $centimetros }}</p>
    @endisset
@endsection