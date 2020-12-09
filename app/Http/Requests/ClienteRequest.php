<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome_cliente' => 'required|max:50',
            'galc' => 'required|max:50',
            'porta' => 'nullable|numeric',
            'endereco' => 'required|max:100',
            'velocidade' => 'required|numeric'
        ];
    }
}
