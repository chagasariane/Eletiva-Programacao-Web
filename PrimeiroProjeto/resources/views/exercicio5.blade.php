@extends('layout')

@section('conteudo')
    <h1>Exercício 5</h1>
    <form method="post" action="/resposta5">
        @CSRF
        <div class="mb-3">
            <label for="nota1" class="form-label">Insira a primeira nota:</label>
            <input type="number" id="nota1" name="nota1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="nota2" class="form-label">Insira a segunda nota:</label>
            <input type="number" id="nota2" name="nota2" class="form-control" required="">
        </div><div class="mb-3">
            <label for="nota3" class="form-label">Insira a terceira nota:</label>
            <input type="number" id="nota3" name="nota3" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($media)
        <p class="text-success">O valor da média é: {{ $media }}</p>
    @endisset
@endsection