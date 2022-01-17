<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patient() {


        // $data = Patient::all();
        return view('patient'
        //  , compact('data')
        );
    }
    public function addpatient() {

        return view('addpatient');
    }


    public function patients(Request $request){

        $patient = new Patient;

        $patient->patient= $request->patient;
        $patient->gender = $request->gender;
        $patient->service = $request->service;
      



    $patient->save;
    return redirect()->back();


    }
}
