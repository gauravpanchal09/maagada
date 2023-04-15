<?php

/**
 * InTestObserver
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Observers;

use App\Models\InTest;
use App\Models\TestHistory;

class InTestObserver
{
    /**
     * Handle the "creating" event.
     *
     * @param  \App\InTest $model
     * @return void
     */
    public function creating(InTest $model)
    {
        
    }

    /**
     * Handle the "created" event.
     *
     * @param  \App\InTest $model
     * @return void
     */
    public function created(InTest $model)
    {
        
    }

    /**
     * Handle the "updating" event.
     *
     * @param  \App\InTest $model
     * @return void
     */
    public function updating(InTest $model)
    {
        if (method_exists($model, "getChanges") && !empty($model->getChanges())) {
            $history = new TestHistory();
            $history->fill([
                'test_id' => $model->id,
                'title' => InTest::class,
                'change_set' => $model->getChanges()
            ]);
            $history->save();
        }
    }

    /**
     * Handle the "updated" event.
     *
     * @param  \App\InTest $model
     * @return void
     */
    public function updated(InTest $model)
    {
        
    }
}
