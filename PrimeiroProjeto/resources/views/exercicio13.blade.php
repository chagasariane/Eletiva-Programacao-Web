@extends('layout')

@section('conteudo')
    <h1>Teste 13</h1>
        <form method="post" action="\resposta13">
            @CSRF
            <div class="mb-3">
                <label for="metro" class="form-label">Insira um valor em metro:</label>
                <input type="number" id="metro" name="metro" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    @isset($centimetro)
        <p class="text-success">O valor em centímetro é: {{ $centimetro }}</p>
    @endisset
@endsection