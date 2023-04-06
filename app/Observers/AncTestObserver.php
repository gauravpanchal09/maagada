<?php

/**
 * AncTestObserver
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Observers;

use App\Models\AncTest;
use App\Models\TestHistory;

class AncTestObserver
{
    /**
     * Handle the "creating" event.
     *
     * @param  \App\AncTest $model
     * @return void
     */
    public function creating(AncTest $model)
    {
        
    }

    /**
     * Handle the "created" event.
     *
     * @param  \App\AncTest $model
     * @return void
     */
    public function created(AncTest $model)
    {
        
    }

    /**
     * Handle the "updating" event.
     *
     * @param  \App\AncTest $model
     * @return void
     */
    public function updating(AncTest $model)
    {
        if (method_exists($model, "getChanges") && !empty($model->getChanges())) {
            $history = new TestHistory();
            $history->fill([
                'test_id' => $model->id,
                'title' => AncTest::class,
                'change_set' => $model->getChanges()
            ]);
            $history->save();
        }
    }

    /**
     * Handle the "updated" event.
     *
     * @param  \App\AncTest $model
     * @return void
     */
    public function updated(AncTest $model)
    {
        
    }
}
