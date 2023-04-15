<?php

/**
 * AncTestController
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Controllers;

use App\Models\AncTest;
use App\Models\Patient;
use App\Http\Requests\AncTest as AncTestRequest;
use Illuminate\Http\Response;

class AncTestController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $patients = Patient::forNonHospitalPatient()->orderBy('id', 'DESC')->get();
        $infertilityStatuses = [AncTest::INFERTILITY_STATUS_ACTIVE, AncTest::INFERTILITY_STATUS_INACTIVE];
        $vaccinations = AncTest::VACCINATIONS;
        $bloodGroups = AncTest::BLOOD_GROUPS;
        return view('tests.anc.create', compact('patients', 'infertilityStatuses', 'vaccinations', 'bloodGroups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AncTestRequest $request
     * @return Response
     */
    public function store(AncTestRequest $request)
    {
        $oldTest = AncTest::forPatient($request->patient_id)->first();
        if (!empty($oldTest)) {
            return redirect()->back()->with(['error' => 'Report already exists for this patient!']);
        }

        $test = new AncTest();
        $test->fill($request->validated());
        $test->save();

        return redirect()->route('anc.create')->with(['success' => 'Record added succesfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(int $id)
    {
        $test = AncTest::findOrFail($id);
        $patients = [$test->patient];
        $infertilityStatuses = [AncTest::INFERTILITY_STATUS_ACTIVE, AncTest::INFERTILITY_STATUS_INACTIVE];
        $vaccinations = AncTest::VACCINATIONS;
        $bloodGroups = AncTest::BLOOD_GROUPS;
        $history = $test->history()->where('title', AncTest::class)->orderBy('id', 'DESC')->get();
        return view('tests.anc.edit', compact('patients', 'infertilityStatuses', 'vaccinations', 'test', 'bloodGroups', 'history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AncTestRequest $request
     * @param  int  $id
     * @return Response
     */
    public function update(AncTestRequest $request, int $id)
    {
        $test = AncTest::findOrFail($id);
        $test->computedChanges();
        $test->fill($request->validated());
        $test->save();

        return redirect()->back()->with(['success' => 'Record updated succesfully!']);
    }
}
