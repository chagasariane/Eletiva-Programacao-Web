@extends('layout')

@section('conteudo')
    <h1>Exercício 19</h1>
    <form method="post" action="/resposta19">
        @CSRF
        <div class="mb-3">
            <label for="dias" class="form-label">Insira um valor em dias: </label>
            <input type="number" id="dias" name="dias" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($horas)
       <div class="mt-4">
            <p><strong>Conversão de {{ $dias }} dias para:<strong></p>
            <p>Horas: {{ $horas }}h </p>
            <p>Minutos: {{ $minutos }}min</p>
            <p>Segundos: {{ $segundos }}s</p>
       </div>

    @endisset
@endsection
