<?php

/**
 * AncTest
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AncTest extends FormRequest
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
            'patient_id' => 'required|exists:patients,id',
            'menstrual_history_lmp' => 'nullable|date',
            'menstrual_history_edd' => 'nullable|date',
            'obstetric_history_g' => 'nullable|max:255',
            'obstetric_history_p' => 'nullable|max:255',
            'obstetric_history_a' => 'nullable|max:255',
            'obstetric_history_l' => 'nullable|max:255',
            'obstetric_history_first' => 'nullable|max:255',
            'obstetric_history_second' => 'nullable|max:255',
            'obstetric_history_third' => 'nullable|max:255',
            'marital_life' => 'nullable|max:255',
            'infertility_treatment' => Rule::in([\App\Models\AncTest::INFERTILITY_STATUS_ACTIVE, \App\Models\AncTest::INFERTILITY_STATUS_INACTIVE]),
            'previous_surgeries' => 'nullable|max:255',
            'past_history' => 'nullable|max:255',
            'family_history' => 'nullable|max:255',
            'blood_group' => [
                'nullable',
                Rule::in(\App\Models\AncTest::BLOOD_GROUPS)
            ],
            'hb' => 'nullable|max:255',
            'platelets' => 'nullable|max:255',
            'hiv' => 'nullable|max:255',
            'hbsag' => 'nullable|max:255',
            'udrl' => 'nullable|max:255',
            'urine_randm' => 'nullable|max:255',
            'tsh' => 'nullable|max:255',
            'bl_suger' => 'nullable|max:255',
            'ogtt' => 'nullable|max:255',
            'hb_electro' => 'nullable|max:255',
            'dual_markar' => 'nullable|max:255',
            'quadraple_markar' => 'nullable|max:255',
            'general_examination' => 'nullable',
            'vaccination' => [
                'nullable',
                Rule::in(\App\Models\AncTest::VACCINATIONS)
            ]
        ];
    }
}
