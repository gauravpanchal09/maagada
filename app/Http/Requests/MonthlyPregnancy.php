<?php

/**
 * MonthlyPregnancy
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonthlyPregnancy extends FormRequest
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'result_pregnancy' => 'required|date',
            'type_pregnancy' => 'required|max:255'
        ];
    }
}
