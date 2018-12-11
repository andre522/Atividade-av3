<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$produtos = Produto::all();
		return view('produto.produto-lista', ['produtos' => $produtos]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('produto.produto-criar');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ProdutoRequest $request) {
		$produto = new Produto();
		$produto->nome = $request->input('nome');
		$produto->descricao = $request->input('descricao');
		$produto->quantidade = $request->input('quantidade');
		$produto->preco = $request->input('preco');
		if ($produto->save()) {
			return redirect()->route('produto');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$produto = Produto::find($id);
		return view('produto.produto-edit', compact('produto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(ProdutoRequest $request, $id) {
		$produto = Produto::find($id)->update($request->all());
		return redirect()->route('produto');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		Produto::find($id)->delete();
		return redirect()->route('produto');
	}
}
