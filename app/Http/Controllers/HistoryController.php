<?php

/**
 * HistoryController
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Controllers;

use App\Models\InTest;
use App\Models\TestHistory;

class HistoryController extends Controller
{
    /**
     * Creating the history of In form.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inSnapshot(int $id)
    {
        $model = InTest::findOrFail($id);
        $history = new TestHistory();
        $history->fill([
            'test_id' => $model->id,
            'title' => InTest::class,
            'change_set' => $model->toArray()
        ]);
        $history->save();

        return redirect()->back()->with(['success' => 'Snapshot created succesfully!']);
    }

    /**
     * Getting the history of In form.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inHistory(int $id)
    {
        $report = InTest::findOrFail($id);
        $inHistories = $report->history()->where('title', InTest::class)->orderBy('id', 'DESC')->get();

        $histories = [];
        foreach ($inHistories as $history) {
            $histories[$history->created_at->format('Y-m-d')][] = [
                'created_at' => $history->created_at,
                'type' => 'in',
                'report' => json_decode(json_encode($history->change_set), FALSE)
            ];
        }

        return view('history.index', compact('histories', 'report'));
    }
}
