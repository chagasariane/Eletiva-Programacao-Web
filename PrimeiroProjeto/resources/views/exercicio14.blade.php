@extends('layout')

@section('conteudo')
    <h1>Exercício 14</h1>
        <form method="post" action="\resposta14">
            @CSRF
            <div class="mb-3">
                <label for="quilometros" class="form-label">Insira um valor em quilometros:</label>
                <input type="number" id="quilometros" name="quilometros" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    @isset($milhas)
        <p class="text-success">O valor em milhas são: {{ $milhas }}</p>
    @endisset
@endsection