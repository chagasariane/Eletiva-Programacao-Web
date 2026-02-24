@extends('layout')

@section('conteudo')
    <h1>Teste 12</h1>
    <form method="post" action="/resposta12">
        @CSRF 
        <div class="mb-3">
            <label for="base" class="form-label">Informe um valor para a base:</label>
            <input type="number" id="base" name="base" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="expoente" class="form-label">Informe um valor para o expoente:</label>
            <input type="number" id="expoente" name="expoente" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($resultado)
        <p class="text-success">O resultado da base elevada ao expoente é: {{ $resultado }}</p>
    @endisset
@endsection