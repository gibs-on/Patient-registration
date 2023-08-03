<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Mail;

class PatientController extends Controller
{
    public function showForm()
    {
        return view('patient-registration-form');
    }

    public function store(Request $request)
    {
    

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'id_number' => 'required|string|max:50',
            'address' => 'required|string|max:255',
            'county' => 'required|string|max:100',
            'sub_county' => 'required|string|max:100',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'gender' => 'required|in:male,female,other',
            'marital_status' => 'required|in:single,married,divorced,widowed',
            'next_of_kin_name' => 'required|string|max:255',
            'next_of_kin_dob' => 'required|date',
            'next_of_kin_id_number' => 'required|string|max:50',
            'next_of_kin_gender' => 'required|in:male,female,other',
            'next_of_kin_relationship' => 'required|string|max:100',
            'next_of_kin_telephone' => 'required|string|max:20',
        ]);


        $patient = Patient::create($validatedData);

        // Send confirmation email
        $data = ['patient' => $patient];
        Mail::send('emails.confirmation', $data, function ($message) use ($patient) {
            $message->to($patient->email, $patient->name)
                ->subject('Patient Registration Confirmation');
        });

        return redirect()->back()->with('success', 'Patient registered successfully.');
    }
}

