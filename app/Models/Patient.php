<?php

/**
 * Patient
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    private const REGISTRATION_START_NUMBER = 1000;
    
    // Test types
    public const TEST_ANC = "anc";
    public const TEST_INFERTILITY = "infertility";
    public const TEST_GYNAE = "gynae";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'dob',
        'aadhar_card',
        'mobile',
        'doctor',
        'husband_name',
        'husband_dob',
        'hospital_id'
    ];

    /**
     * The attributes that are type castable.
     *
     * @var array
     */
    protected $appends = [
        'age',
        'husband_age'
    ];

    public function getAgeAttribute() 
    {
        return Carbon::parse($this->dob)->age;
    }

    public function getHusbandAgeAttribute() 
    {
        return Carbon::parse($this->husband_dob)->age;
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    /**
     * Generate registration number
     * @return self
     */
    public function generateRegistrationNumber(): self
    {
        $lastPatient = self::latest()->first();
        $this->registration_number = $lastPatient ? (self::REGISTRATION_START_NUMBER + $lastPatient->id) : self::REGISTRATION_START_NUMBER;

        return $this;
    }

    /*******************************************
    * Query Scopes
    *******************************************/
    public function scopeForHospitalPatient($query)
    {
        return $query->whereNotNull('hospital_id');
    }

    public function scopeForNonHospitalPatient($query)
    {
        return $query->whereNull('hospital_id');
    }
}
