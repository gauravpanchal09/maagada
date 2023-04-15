<?php

/**
 * HomeController
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Patient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $patients = Patient::forNonHospitalPatient()->orderBy('id', 'DESC')->count();
        $hospitalPatients = Patient::forHospitalPatient()->orderBy('id', 'DESC')->count();
        $hospitals = Hospital::orderBy('id', 'DESC')->count();
        return view('home', compact('patients', 'hospitalPatients', 'hospitals'));
    }
}
