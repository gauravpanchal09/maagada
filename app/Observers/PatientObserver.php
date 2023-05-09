<?php

/**
 * PatientObserver
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Observers;

use App\Models\Patient;
use Carbon\Carbon;

class PatientObserver
{
    /**
     * Handle the "creating" event.
     *
     * @param  \App\Patient $model
     * @return void
     */
    public function creating(Patient $model)
    {
        if (!empty($model->dob)) {
            $model->age = Carbon::parse($model->dob)->age;
        }

        if (!empty($model->husband_dob)) {
            $model->husband_age = Carbon::parse($model->husband_dob)->age;
        }
    }

    /**
     * Handle the "created" event.
     *
     * @param  \App\Patient $model
     * @return void
     */
    public function created(Patient $model)
    {
        
    }

    /**
     * Handle the "updating" event.
     *
     * @param  \App\Patient $model
     * @return void
     */
    public function updating(Patient $model)
    {
        if (!empty($model->dob)) {
            $model->age = Carbon::parse($model->dob)->age;
        }

        if (!empty($model->husband_dob)) {
            $model->husband_age = Carbon::parse($model->husband_dob)->age;
        }
    }

    /**
     * Handle the "updated" event.
     *
     * @param  \App\Patient $model
     * @return void
     */
    public function updated(Patient $model)
    {
        
    }
}
