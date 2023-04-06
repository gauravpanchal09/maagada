<?php

/**
 * PlTestController
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Controllers;

use App\Models\PlTest;
use App\Models\Patient;
use App\Http\Requests\PlTest as PlTestRequest;

class PlTestController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::forNonHospitalPatient()->orderBy('id', 'DESC')->get();
        return view('tests.pl.create', compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PlTest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlTestRequest $request)
    {
        $oldTest = PlTest::forPatient($request->patient_id)->first();
        if (!empty($oldTest)) {
            return redirect()->back()->with(['error' => 'Report already exists for this patient!']);
        }

        $test = new PlTest();
        $test->fill($request->validated());
        $test->save();

        return redirect()->route('pl.create')->with(['success' => 'Record added succesfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $test = PlTest::findOrFail($id);
        $patients = [$test->patient];
        $history = $test->history()->where('title', PlTest::class)->orderBy('id', 'DESC')->get();
        return view('tests.pl.edit', compact('patients', 'test', 'history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PlTest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlTestRequest $request, int $id)
    {
        $test = PlTest::findOrFail($id);
        $test->computedChanges();
        $test->fill($request->validated());
        $test->save();

        return redirect()->back()->with(['success' => 'Record updated succesfully!']);
    }
}
