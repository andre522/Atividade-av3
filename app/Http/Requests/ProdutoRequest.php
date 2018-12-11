<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:5',
            'descricao' => 'required',
            'quantidade' => 'required',
            'preco' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é requerido',
            'nome.min' => 'O campo nome deve conter no minimo 5 caracteres',
            'descricao.required' => 'A descrição é requerido',
            'quantidade.required' => 'A quantidade é requerida',
            'preco.required' => 'O preco é requerido',
        ];
    }
}
