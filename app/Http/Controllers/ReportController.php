<?php

/**
 * ReportController
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Controllers;

use App\Models\AncTest;
use App\Models\InTest;
use App\Models\PlTest;
use App\Models\Patient;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::forNonHospitalPatient()->orderBy('id', 'DESC')->get();
        return view('reports.index', compact('patients'));
    }

    /**
     * Generate the report for patient.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function generate(int $id)
    {
        $patient = Patient::findOrFail($id);
        $ancReports = AncTest::forPatient($patient)->get();
        $inReports = InTest::forPatient($patient)->get();
        $plReports = PlTest::forPatient($patient)->get();;
        return view('reports.generate', compact('patient', 'ancReports', 'inReports', 'plReports'));
    }

    /**
     * Generate the report for patient.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function print(int $id)
    {
        $patient = Patient::findOrFail($id);
        $ancReports = AncTest::forPatient($patient)->get();
        $inReports = InTest::forPatient($patient)->get();
        $plReports = PlTest::forPatient($patient)->get();;
        return view('reports.print', compact('patient', 'ancReports', 'inReports', 'plReports'));
    }
}
