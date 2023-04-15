<?php

/**
 * HospitalPatient
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HospitalPatient extends FormRequest
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
            'discharge_date' => 'nullable|date',
            'price' => 'nullable|numeric',
            'procedure' => 'nullable|max:255',
            'hospital_id' => 'required|exists:hospitals,id'
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
            'mobile' => str_replace(['-', '_'], '', $this->mobile),
            'aadhar_card' => str_replace(['/', '_'], '', $this->aadhar_card)
        ]);
    }
}
