<?php

namespace IntelGUA\MedicalAssistant\Http\Controllers;

use IntelGUA\MedicalAssistant\Models\Patient;
use IntelGUA\MedicalAssistant\Http\Requests\PatientRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use IntelGUA\MedicalAssistant\Models\Record;
use IntelGUA\MedicalAssistant\Models\TypeBlood;
use IntelGUA\MedicalAssistant\Models\Medicine;
use IntelGUA\MedicalAssistant\Models\MedicineRecord;
use IntelGUA\MedicalAssistant\Models\Disease;
use IntelGUA\MedicalAssistant\Models\DiseaseRecord;
use IntelGUA\MedicalAssistant\Models\Allergy;
use IntelGUA\MedicalAssistant\Models\AllergyRecord;

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
        $patient = Patient::find($patient->id);
        return view('layouts.patients.details', compact('patient'));

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

    /** función para visualizar el formulario para crear el antecedente
     * del paciente.
     */
    public function record(Patient $patient)
    {
        $typebloods = TypeBlood::pluck('description', 'id');
        $medicines = Medicine::pluck('description', 'id');
        $diseases = Disease::pluck('description', 'id');
        $allergies = Allergy::pluck('description', 'id');

        $patient = Patient::find($patient->id);

        $record = Record::wherePatientId($patient->id)->first();

        if ($record) {
            return view('layouts.patients.record_details', compact('patient', 'record', 'medicines', 'diseases', 'allergies'));
        } else {
            return view('layouts.patients.record', compact('patient', 'typebloods'));
        }
    }

    /**
     * Función para visualizar los detalles del antecedente del paciente.
     */
    public function record_details(Record $record)
    {
        $patient = Patient::find($record->patient_id);
        return view('layouts.patients.record_details', compact('record', 'patient'));
    }

    /**
     * Método POST para guardar el antecedente del paciente.
     */
    public function saverecord(Request $request)
    {
        $record = new Record();

        $record->patient_id = $request->input('patient_id');
        $record->typeblood_id = $request->input('typeblood_id');
        $record->weight = $request->input('weight');
        $record->observation = $request->input('observation');

        $record->save();

        return redirect()->route('patients.record_details', [$record]);
    }

    /**
     * Método POST para agregar un nuevo medicamento.
     */
    public function add_medicine(Request $request)
    {
        if ($request->ajax()) {
            $medicine = Medicine::create($request->all());
            return response()->json($medicine);
        }
    }

    /**
     * Método POST para asignar el medicamento al antecedente
     * del paciente.
     */
    public function add_medicine_record(Request $request)
    {
        if ($request->ajax()) {
            MedicineRecord::create($request->all());
            return response()->json([$request->all()]);
        }

    }

    /**
     * Método POST para agregar una nueva enfermedad.
     */
    public function add_disease(Request $request)
    {
        if ($request->ajax()) {
            Disease::create($request->all());
            return response()->json([$request->all()]);
        }
    }

    /**
     * Método POST para asignar la enfermedad al antecedente
     * del paciente.
     */
    public function add_disease_record(Request $request)
    {
        if ($request->ajax()) {
            DiseaseRecord::create($request->all());
            return response()->json([$request->all()]);
        }

    }


    /**
     * Método POST para agregar una nueva alergia.
     */
    public function add_allergy(Request $request)
    {
        if ($request->ajax()) {
            Allergy::create($request->all());
            return response()->json([$request->all()]);
        }
    }

    /**
     * Método POST para asignar la enfermedad al antecedente
     * del paciente.
     */
    public function add_allergy_record(Request $request)
    {
        if ($request->ajax()) {
            AllergyRecord::create($request->all());
            return response()->json([$request->all()]);
        }

    }

    /**
     * Método GET para obtener la lista de medicamentos
     */
    public function get_medicine_records($id)
    {

        $medicine_records = MedicineRecord::whereRecordId($id)->with('medicine')->with('record')->get();

        return response()->json($medicine_records);

    }
}
