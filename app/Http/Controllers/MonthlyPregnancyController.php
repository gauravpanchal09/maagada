<?php

/**
 * MonthlyPregnancyController
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Controllers;

use App\Models\MonthlyPregnancy;
use App\Http\Requests\MonthlyPregnancy as MonthlyPregnancyRequest;

class MonthlyPregnancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pregnancies = MonthlyPregnancy::orderBy('id', 'DESC')->get();
        return view('monthly_pregnancies.index', compact('pregnancies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monthly_pregnancies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\MonthlyPregnancy  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MonthlyPregnancyRequest $request)
    {
        $pregnancy = new MonthlyPregnancy();
        $pregnancy->fill($request->validated());
        $pregnancy->save();

        return redirect()->route('monthly-pregnancies.index')->with(['success' => 'Record added succesfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MonthlyPregnancy  $Monthlypregnancy
     * @return \Illuminate\Http\Response
     */
    public function edit(MonthlyPregnancy $monthlyPregnancy)
    {
        return view('monthly_pregnancies.edit', compact('monthlyPregnancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MonthlyPregnancy $request
     * @param  \App\Models\MonthlyPregnancy $monthlyPregnancy
     * @return \Illuminate\Http\Response
     */
    public function update(MonthlyPregnancyRequest $request, MonthlyPregnancy $monthlyPregnancy)
    {
        $monthlyPregnancy->update($request->validated());
        return redirect()->route('monthly-pregnancies.index')->with(['success' => 'Record updated succesfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  MonthlyPregnancy $monthlyPregnancy
     * @return Response
     */
    public function destroy(MonthlyPregnancy $monthlyPregnancy)
    {
        $monthlyPregnancy->delete();
        return redirect()->route('monthly-pregnancies.index')->with(['success' => 'Record deleted succesfully!']);
    }
}
