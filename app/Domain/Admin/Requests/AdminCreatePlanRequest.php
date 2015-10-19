<?php

namespace NpTS\Domain\Admin\Requests;

use NpTS\Http\Requests\Request;

class AdminCreatePlanRequest extends Request
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
            'slots'     =>  ['required' , 'int'],
            'price'     =>  ['required' , 'numeric'],
        ];
    }

    public function messages()
    {
        return [
            'slots.required'    => 'Você deve inserir uma quantidade de slots!',
            'slots.int'         =>  'A quantidade de slots deve ser um número!',

            'price.required'    =>  'Você deve inserir um preço!',
            'price.numeric'     =>  "O preço deve ser um número!",
        ];
    }
}
