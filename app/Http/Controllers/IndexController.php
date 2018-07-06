<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $interador = 1;
        // Após upload do arquivo, recupero o conteúdo do mesmo
        //$contents = File::get($request->file('arquivo'));
        $lines = file($request->file('arquivo'));
        // palavrasIndex contém as palavras chaves a serem procuradas no texto
        $palavrasIndex = explode(',', $lines[0]);
        // arrayIndex é um array que cada uma de suas posições é pre
        $arrayIndex = [];
        dd($palavrasIndex);
        for($interador=1; $interador<= count($lines); $i++ ){
            // Separo todas as palavras daquela linha, num array resultadoLinha
            // onde cada uma de suas posições serão comparadas com as palavras 
            // dentro de palavrasIndex
            $resultadoLinha = explode(' ', $lines[$interador]);
            /**
             * Faltam apenas 10 minutos para entregar o teste, por esse motivo 
             * vou escrever o restante da minha lógica, e casp queiram posso implementar e 
             * enviar depois
             */

             /**
              * Faço um loop que percorrerá o array de palavrasIndex
              e para cada palavra nesse array, eu percorro o array resultadoLinha que 
              representa uma linha do texto. Percorrendo esse array resultadoLinha, comparo 
              suas posições(que representam palavras daquela linha) com as palavras dentro de palavrasIndex
              na posição corrente. Se uma igualdade é encontrada eu faço um array_push na posição
              corrente de  palavrasIndex, incluindo o valor do incrementador para aquele índice do array palavrasIndex.
              */
        };
        /**
         * No final eu criei um matriz(array multidimensional) em palavrasIndex: onde cada um dos seus 
        índices são as palavras do índice remissivo, e cada posição tem um outro array que representa
        as linhas onde aquela palavra(o índice do array), apatrece no texto.
        Por fim retorno esses dados na mesma view que o upload do arquivo doi feito, 
        demostrando os índeces do array palavrasIndex(que são as palavras do índice) e ao lado
        os valores dos incrementos, que são os números das linhas onde tal palavra do índice foi encontrada.
         */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
