<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContatoRequest extends FormRequest
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
            'nome' => 'required',
            'ra' => 'required',
            'curso' => 'required',
            'msg' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome' => 'O campo  de Nome é obrigatório !',
            'ra' => 'O campo  de RA é obrigatório !',
            'curso' => 'O campo  de curso é obrigatório !',
            'msg' => 'O campo  de menssagem é obrigatório !',
        ];
    }
}