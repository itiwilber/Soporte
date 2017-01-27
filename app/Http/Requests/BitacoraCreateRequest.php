<?php

namespace Cinema\Http\Requests;

use Cinema\Http\Requests\Request;

class BitacoraCreateRequest extends Request
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
            'nivelGas' => 'required',
                'carroceria' => 'required',
                'nivelAceite' => 'required',
                'kilometros' => 'required',
                'llantas' => 'required',
                'destino' => 'required',
                'conductor' => 'required',
                'fecha' => 'required',
                'horario' => 'required',
        ];
    }
}
