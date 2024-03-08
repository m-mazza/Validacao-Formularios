<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

use function PHPSTORM_META\map;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $regras = [
            'nome'      =>'required|min:3|max:46',
            'idade'     =>'required',
            'endereco'  =>'required|min:5',
            'email'     =>'required|email|unique:clientes',
        ];
        $mensagens = [
            // 'nome.required'     => 'O campo nome está vazio',
            // 'nome.min'          => 'O campo nome deve ter no mínimo 3 caracteres',
            // 'nome.max'          => 'O campo nome contém mais que 46 caracteres',
            // 'idade.required'    => 'O campo idade está vazio',
            // 'endereco.required' => 'O campo endereço está vazio',
            // 'endereco.min'      => 'O campo endereço deve ter no mínio 3 caracteres',
            // 'email.required'    => 'O campo email está vazio',
            // 'email.email'       => 'O email digitado não é valido',
            // 'email.unique'      => 'O email inserido já está cadastrado',

            'required'  => 'O campo :attribute está vazio!',
            'min'       => 'O campo :attribute deve conter no mínimo :min caracteres',
            'max'       => 'O campo :attribute deve conter no máximo :max caracteres',
            'email'     => 'O :attribute forecido deve ser válido',
            'unique'    => 'O :attribute já está cadastrado'
        ];

        $request->validate($regras,$mensagens);


        $cliente = new Cliente();
        $cliente->nome      = $request->input('nome');
        $cliente->idade     = $request->input('idade');
        $cliente->endereco  = $request->input('endereco');
        $cliente->email     = $request->input('email');
        $cliente->save();
        return redirect('./');

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
