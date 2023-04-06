<?php

/**
 * HospitalPatientController
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Patient;
use App\Http\Requests\HospitalPatient as HospitalPatientRequest;

class HospitalPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::forHospitalPatient()->orderBy('id', 'DESC')->get();
        return view('hospital_patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospitals = Hospital::where('status', Hospital::STATUS_ACTIVE)->orderBy('name', 'ASC')->get();
        return view('hospital_patients.create', compact('hospitals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\HospitalPatient  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HospitalPatientRequest $request)
    {
        $patient = new Patient();
        $patient->fill($request->validated());
        $patient->generateRegistrationNumber();
        $patient->save();

        return redirect()->route('hospital-patients.index')->with(['success' => 'Record added succesfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $hospital_patient
     * @return \Illuminate\Http\Response
     */
    public function edit(int $hospital_patient)
    {
        $patient = Patient::findOrFail($hospital_patient);
        $hospitals = Hospital::where('status', Hospital::STATUS_ACTIVE)->orderBy('name', 'ASC')->get();
        return view('hospital_patients.edit', compact('patient', 'hospitals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\HospitalPatient  $request
     * @param  int  $hospital_patient
     * @return \Illuminate\Http\Response
     */
    public function update(HospitalPatientRequest $request, int $hospital_patient)
    {
        $patient = Patient::findOrFail($hospital_patient);
        $patient->fill($request->validated());
        $patient->save();

        return redirect()->route('hospital-patients.index')->with(['success' => 'Record updated succesfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $hospital_patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $hospital_patient)
    {
        $patient = Patient::findOrFail($hospital_patient);
        $patient->delete();
        return redirect()->route('hospital-patients.index')->with(['success' => 'Record deleted succesfully!']);
    }
}
