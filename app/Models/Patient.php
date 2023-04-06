<?php

/**
 * Patient
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Models;

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
        'age',
        'aadhar_card',
        'mobile',
        'madamName',
        'hospital_id',
        'price',
        'discharge_date',
        'procedure'
    ];

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
