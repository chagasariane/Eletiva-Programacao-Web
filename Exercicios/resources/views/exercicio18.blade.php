@extends('layout')

@section('conteudo')
    <h1>Exercício 18</h1>
        <form method="post" action="/resposta18">
            @CSRF 
            <div class="mb-3">
                <label for="capital" class="form-label">Informe o capital:</label>
                <input type="number" id="capital" name="capital" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="taxa" class="form-label">Informe a taxa de juros:</label>
                <input type="number" id="taxa" name="taxa" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="periodo" class="form-label">Informe o período:</label>
                <input type="number" id="periodo" name="periodo" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    @isset($jurosCompostos)
        <p class="text-success">O valor dos juros compostos é de: R$</p>
    @endisset
@endsection