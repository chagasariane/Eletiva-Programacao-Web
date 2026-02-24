<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use function PHPUnit\Framework\returnSelf;

class ExercicioController extends Controller {

    public function exibirFormulario(){
        return view('exercicio');
    }
    public function calcularSoma(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $soma = $valor1 + $valor2;
        return view('exercicio', ['soma' => $soma]);
    }

    public function exibirFormulario2(){
        return view('exercicio2');
    }
    public function calcularSub(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $sub = $valor1 - $valor2;
        return view('exercicio2', ['sub' => $sub]);
    }

    public function exibirFormulario3(){
        return view('exercicio3');
    }
    public function calcularMult(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $mult = $valor1 * $valor2;
        return view('exercicio3', ['mult' => $mult]);
    }

    public function exibirFormulario4(){
        return view('exercicio4');
    }
    public function calcularDiv(Request $request){
        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        if ($valor2 != 0){
            $div = $valor1 / $valor2;
            return view('exercicio4', ['div' => $div]);
        } else{
            return view('exercicio4', ['ndiv' => 0]);
        }
    }      

    public function exibirFormulario5(){
        return view('exercicio5');
    }
    public function calcularMedia(Request $request){
        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $nota3 = $request->input('nota3');
        $media = ($nota1 + $nota2 + $nota3) / 3;
        return view('exercicio5', ['media' => $media]);
    }

    public function exibirFormulario6(){
        return view('exercicio6');
    }
    public function calcularFahrenheit(Request $request){
        $celsius = $request->input('celsius');
        $fahrenheit = ($celsius * (9 / 5)) + 32;
        return view('exercicio6', ['fahrenheit' => $fahrenheit]);
    }

    public function exibirFormulario7(){
        return view('exercicio7');
    }
    public function calcularCelsius(Request $request){
        $fahrenheit = $request->input('fahrenheit');
        $celsius = ($fahrenheit - 32) * (5 / 9);
        return view('exercicio7', ['celsius' => $celsius]);
    }

    public function exibirFormulario8(){
        return view('exercicio8');
    }
    public function calcularAreaRetangulo(Request $request){
        $largura = $request->input('largura');
        $altura = $request->input('altura');
        $areaRetangulo = $altura * $largura;
        return view('exercicio8', ['areaRetangulo' => $areaRetangulo]);
    }

    public function exibirFormulario9(){
        return view('exercicio9');
    }
    public function calcularAreaCirculo(Request $request){
        $raio = $request->input('raio');
        $areaCirculo = 3.14 * ($raio ** 2);
        return view('exercicio9', ['areaCirculo' => $areaCirculo]);
    }

    public function exibirFormulario10(){
        return view('exercicio10');
    }
    public function calcularPerimetroRetangulo(Request $request){
        $altura = $request->input('altura');
        $largura = $request->input('largura');
        $perimetroRetangulo = ($altura * 2) + ($largura * 2);
        return view('exercicio10', ['perimetroRetangulo' => $perimetroRetangulo]);
    }
    
    public function exibirFormulario11(){
        return view('exercicio11');
    }
    public function calcularPerimetroCirculo(Request $request){
        $raio = $request->input('raio');
        $perimetroCirculo = 2 * 3.14 * $raio;
        return view('exercicio11', ['perimetroCirculo' => $perimetroCirculo]);
    }

    public function exibirFormulario12(){
        return view('exercicio12');
    }
    public function calcularBaseExpoente(Request $request){
        $base = $request->input('base');
        $expoente = $request->input('expoente');
        $resultado = $base ** $expoente;
        return view('exercicio12', ['resultado' => $resultado]);
    }

    public function exibirFormulario13(){
        return view('exercicio13');
    }
    public function calcularCentimetros(Request $request){
        $metros = $request->input('metros');
        $centimetros = $metros * 100;
        return view('exercicio13', ['centimetros' => $centimetros]);
    }

    public function exibirFormulario14(){
        return view('exercicio14');
    }
    public function calcularMilhas(Request $request){
        $quilometros = $request->input('quilometros');
        $milhas = $quilometros * 0.621371;
        return view('exercicio14', ['milhas' => $milhas]);
    }

    public function exibirFormulario15(){
        return view('exercicio15');
    }
    public function calcularImc(Request $request){
        $peso = $request->input('peso');
        $altura = $request->input('altura');
        $imc = $peso / ($altura ** 2);
        return view('exercicio15', ['imc' => $imc]);
    }

    public function exibirFormulario16(){
        return view('exercicio16');
    }
    public function calcularDesconto(Request $request){
        $preco = $request->input('preco');
        $percentual = $request->input('percentual');
        $desconto = $preco - ($preco * ($percentual / 100));
        return view('exercicio16', ['desconto' => $desconto]);
    }
}

