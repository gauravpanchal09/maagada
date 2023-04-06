<?php

/**
 * Hospital
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class Hospital extends FormRequest
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
            'name' => 'required|max:255',
            'status' => Rule::in([\App\Models\Hospital::STATUS_ACTIVE, \App\Models\Hospital::STATUS_INACTIVE])
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'status' => \App\Models\Hospital::STATUS_ACTIVE
        ]);
    }
}
