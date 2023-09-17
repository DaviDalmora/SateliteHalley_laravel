<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\dados_sensores;
use Illuminate\Http\Request;

class SateliteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //..recuperando os veículos do banco de dados
    $satelite = dados_sensores::all();
    //..retorna a view index passando a variável $satelite
    return view('index')->with('satelite', $satelite);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //..mostrando o formulário de cadastro
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //..instancia um novo model satelite
        $satelite = new dados_sensores();
        //..pega os dados vindos do form e seta no model
        $satelite->name = $request->input('name');
        $satelite->year = $request->input('year');
        $satelite->color = $request->input('color');
        //..persiste o model na base de dados
        $satelite->save();
        //..retorna a view com uma variável msg que será tratada na própria view
        $satelite = dados_sensores::all();
        return view('satelite.index')->with('satelite', $satelite)
            ->with('msg', 'Veículo cadastrado com sucesso!');      
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //..recupera o veículo da base de dados
        $satelite = dados_sensores::find($id);
        //..se encontrar o veículo, retorna a view com o objeto correspondente
        if ($satelite) {
            return view('satelite.show')->with('satelite', $satelite);
        } else {
            //..senão, retorna a view com uma mensagem que será exibida.
            return view('satelite.show')->with('msg', 'Veículo não encontrado!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //..recupera o veículo da base de dados
        $satelite = dados_sensores::find($id);
        //..se encontrar o veículo, retorna a view de ediçãcom com o objeto correspondente
        if ($satelite) {
            return view('satelite.edit')->with('satelite', $satelite);
        } else {
            //..senão, retorna a view de edição com uma mensagem que será exibida.
            $satelite = dados_sensores::all();            
            return view('satelite.index')->with('satelite', $satelite)
                ->with('msg', 'Veículo não encontrado!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //..recupera o veículo mediante o id
        $satelite = dados_sensores::find($id);
        //..atualiza os atributos do objeto recuperado com os dados do objeto Request
        $satelite->name = $request->input('name');
        $satelite->year = $request->input('year');
        $satelite->color = $request->input('color');
        //..persite as alterações na base de dados
        $satelite->save();
        //..retorna a view index com uma mensagem
        $satelite = dados_sensores::all();
        return view('satelite.index')->with('satelite', $satelite)
            ->with('msg', 'Veículo atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //..recupeara o recurso a ser excluído
        $satelite = dados_sensores::find($id);
        //..exclui o recurso
        $satelite->delete();
        //..retorna à view index.
        $satelite = dados_sensores::all();
        return view('satelite.index')->with('satelite', $satelite)
            ->with('msg', "Veículo excluído com sucesso!");
    }
}
