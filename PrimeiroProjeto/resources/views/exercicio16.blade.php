@extends('layout')

@section('conteudo')
    <h1>Exercício 16</h1>
        <form method="post" action="/resposta16">
            @CSRF 
            <div class="mb-3">
                <label for="preco" class="form-label">Informe o preço:</label>
                <input type="number" id="preco" name="preco" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="percentual" class="form-label">Informe o percentual de desconto:</label>
                <input type="number" id="percentual" name="percentual" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    @isset($desconto)
        <p class="text-success">O valor com desconto é de: R${{ $desconto }}</p>
    @endisset
@endsection