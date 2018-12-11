<?php

namespace App\Http\Controllers;
use App\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$clientes = cliente::all();
		return view('cliente.cliente-lista', ['clientes' => $clientes]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('cliente.cliente-criar');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$clientes = new cliente();
		$clientes->data_nascimento = $request->input('data_nascimento');
		$clientes->estado_civil = $request->input('estado_civil');
		$clientes->endereco = $request->input('endereco');
		$clientes->usuario = $request->input('usuario');
		$clientes->senha = $request->input('senha');
		$clientes->cpf = $request->input('cpf');
		$clientes->telefone = $request->input('telefone');
		if ($clientes->save()) {
			return redirect()->route('cliente');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\cliente  $cliente
	 * @return \Illuminate\Http\Response
	 */
	public function show(cliente $cliente) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\cliente  $cliente
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$clientes = cliente::find($id);
		return view('cliente.cliente-edit')->with('clientes', $clientes);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\cliente  $cliente
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$clientes = cliente::find($id);
		$clientes->data_nascimento = $request->data_nascimento;
		$clientes->estado_civil = $request->estado_civil;
		$clientes->endereco = $request->endereco;
		$clientes->usuario = $request->usuario;
		$clientes->senha = $request->senha;
		$clientes->cpf = $request->cpf;
		$clientes->telefone = $request->telefone;
		$clientes->save();
		return redirect()->route('cliente');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\cliente  $cliente
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$cliente = cliente::find($id);
		$cliente->delete();

		return redirect()->back();
	}
}
