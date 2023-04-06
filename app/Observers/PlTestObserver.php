<?php

/**
 * PlTestObserver
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Observers;

use App\Models\PlTest;
use App\Models\TestHistory;

class PlTestObserver
{
    /**
     * Handle the "creating" event.
     *
     * @param  \App\PlTest $model
     * @return void
     */
    public function creating(PlTest $model)
    {
        
    }

    /**
     * Handle the "created" event.
     *
     * @param  \App\PlTest $model
     * @return void
     */
    public function created(PlTest $model)
    {
        
    }

    /**
     * Handle the "updating" event.
     *
     * @param  \App\PlTest $model
     * @return void
     */
    public function updating(PlTest $model)
    {
        if (method_exists($model, "getChanges") && !empty($model->getChanges())) {
            $history = new TestHistory();
            $history->fill([
                'test_id' => $model->id,
                'title' => PlTest::class,
                'change_set' => $model->getChanges()
            ]);
            $history->save();
        }
    }

    /**
     * Handle the "updated" event.
     *
     * @param  \App\PlTest $model
     * @return void
     */
    public function updated(PlTest $model)
    {
        
    }
}
