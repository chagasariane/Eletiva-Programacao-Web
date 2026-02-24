<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

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
        $area_retangulo = $altura * $largura;
        return view('exercicio8', ['area_retangulo' => $area_retangulo]);
    }

}