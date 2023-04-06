<?php

/**
 * AncTest
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Models;

use App\Traits\Changable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AncTest extends Model
{
    use HasFactory, Changable;

    public const INFERTILITY_STATUS_ACTIVE = 'Yes';
    public const INFERTILITY_STATUS_INACTIVE = 'No';
    public const VACCINATIONS = [
        'TI',
        'Influenza',
        'Booster',
        'Covid'
    ];

    public const BLOOD_GROUPS = [
        'A+',
        'B+',
        'AB+',
        'O+',
        'A-',
        'B-',
        'AB-',
        'O-'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id',
        'menstrual_history_lmp',
        'menstrual_history_edd',
        'obstetric_history_g',
        'obstetric_history_p',
        'obstetric_history_a',
        'obstetric_history_l',
        'obstetric_history_first',
        'obstetric_history_second',
        'obstetric_history_third',
        'marital_life',
        'infertility_treatment',
        'previous_surgeries',
        'past_history',
        'family_history',
        'blood_group',
        'hb',
        'platelets',
        'hiv',
        'hbsag',
        'udrl',
        'urine_randm',
        'tsh',
        'bl_suger',
        'ogtt',
        'hb_electro',
        'dual_markar',
        'quadraple_markar',
        'general_examination',
        'vaccination'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function history()
    {
        return $this->hasMany(TestHistory::class, 'test_id', 'id');
    }

    /*******************************************
    * Query Scopes
    *******************************************/
    public function scopeForPatient($query, $patient)
    {
        return $query->where('patient_id', ($patient instanceof Patient) ? $patient->id : $patient);
    }

    /**
     * Maintain the history.
     */
    private function getChangableProperty(): array
    {
        return [
            'Blood group' => $this->blood_group,
            'HB' => $this->hb,
            'Platelets' => $this->platelets,
            'HIV' => $this->hiv,
            'HBSAG' => $this->hbsag,
            'UDRL' => $this->udrl,
            'Urine R&M' => $this->urine_randm,
            'TSH' => $this->tsh,
            'BL suger' => $this->bl_suger,
            'OGTT' => $this->ogtt,
            'HB electro' => $this->hb_electro,
            'Dual markar' => $this->dual_markar,
            'Quadraple markar' => $this->quadraple_markar
        ];
    }
}
