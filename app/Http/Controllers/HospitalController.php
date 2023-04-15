<?php

/**
 * HospitalController
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Http\Requests\Hospital as HospitalRequest;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::orderBy('id', 'DESC')->get();
        return view('hospitals.index', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = [Hospital::STATUS_ACTIVE, Hospital::STATUS_INACTIVE];
        return view('hospitals.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Hospital  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HospitalRequest $request)
    {
        $hospital = new Hospital();
        $hospital->fill($request->validated());
        $hospital->save();

        return redirect()->route('hospitals.index')->with(['success' => 'Record added succesfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        $statuses = [Hospital::STATUS_ACTIVE, Hospital::STATUS_INACTIVE];
        return view('hospitals.edit', compact('hospital', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Hospital  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(HospitalRequest $request, Hospital $hospital)
    {
        $hospital->fill($request->validated());
        $hospital->save();

        return redirect()->route('hospitals.index')->with(['success' => 'Record updated succesfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->route('hospitals.index')->with(['success' => 'Record deleted succesfully!']);
    }
}
