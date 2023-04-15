<?php

/**
 * PlTest
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Models;

use App\Traits\Changable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlTest extends Model
{
    use HasFactory, Changable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id',
        'description'
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
        return [];
    }
}
