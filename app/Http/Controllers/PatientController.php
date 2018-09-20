<?php

namespace IntelGUA\MedicalAssistant\Http\Controllers;

use IntelGUA\MedicalAssistant\Models\Patient;
use IntelGUA\MedicalAssistant\Http\Requests\PatientRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::paginate(2);
        return view('layouts.patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        $patient = new Patient;
        $patient->first_name = $request->input('first_name');
        $patient->last_name = $request->input('last_name');
        $patient->phone = $request->input('phone');
        $patient->address = $request->input('address');
        $patient->email = $request->input('email');
        $patient->birth_date = $request->input('birth_date');
        $patient->gender = $request->input('gender');
        $patient->photo = $request->input('photo');

        $patient->save();

        return redirect()->route('patients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \IntelGUA\MedicalAssistant\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \IntelGUA\MedicalAssistant\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view("layouts.patients.edit", compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PatientRequest  $request
     * @param  \IntelGUA\MedicalAssistant\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, Patient $patient)
    {
        $patient->first_name = $request->input('first_name');
        $patient->last_name = $request->input('last_name');
        $patient->phone = $request->input('phone');
        $patient->address = $request->input('address');
        $patient->email = $request->input('email');
        $patient->birth_date = $request->input('birth_date');
        $patient->gender = $request->input('gender');
        $patient->photo = $request->input('photo');

        $patient->save();

        return redirect()->route('patients.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \IntelGUA\MedicalAssistant\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        Alert::warning('Eliminar', 'Registro Eliminado');
        $patient->delete();
        return redirect()->route('patients.index');

    }
}
