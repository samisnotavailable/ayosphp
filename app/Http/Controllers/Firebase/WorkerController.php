<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkerController extends Controller
{

    public function workIndex()
    {
        $workers = [];
        $workRef = app('firebase.firestore')->database()->collection('worker')->documents();

        foreach ($workRef as $document) {
            $workerData = $document->data();
            $workerData['id'] = $document->id();
            $workerData['docRef'] = $document->reference();
            $workers[] = $workerData;
        }

        return view('firebase.admin.worker.index', [
            'workers' => $workers,
        ]);
    }



    public function workCreate(){
        return view('firebase.admin.worker.create');
    }
    public function workStore(Request $request)
    {
        // Validate the incoming request data if needed
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required',
            'phone_number' => 'required',
            'landline_number' => 'required',
            'rating' => 'required',
            'verification' => 'required'
        ]);

        // Access form data from the validated request
        $email = $validatedData['email'];
        $password = $validatedData['password'];
        $firstName = $validatedData['first_name'];
        $middleName = $validatedData['middle_name'];
        $lastName = $validatedData['last_name'];
        $birthDate = $validatedData['birth_date'];
        $phoneNumber = $validatedData['phone_number'];
        $landlineNumber = $validatedData['landline_number'];
        $rating = $validatedData['rating'];
        $verification = $validatedData['verification'];

        $firestore = app('firebase.firestore')->database()->collection('worker');
        $newDocument = $firestore->newDocument();
        $newDocument->set([
            'email' => $email,
            'password' => $password,
            'first_name' => $firstName,
            'middle_name' => $middleName,
            'last_name' => $lastName,
            'birth_date' => $birthDate,
            'phone_number' => $phoneNumber,
            'landline_number' => $landlineNumber,
            'rating' => $rating,
            'verification' => $verification
        ]);

        return redirect('/work-index')->with('success', 'Worker created successfully!');
    }

    public function workEdit($workerId)
    {
        $document = app('firebase.firestore')
            ->database()
            ->collection('worker')
            ->document($workerId)
            ->snapshot();

        $workerData = $document->data();

        if ($workerData === null) {
            // Worker not found, handle the error or redirect as needed
            return redirect()->route('work-index')->with('error', 'Worker not found.');
        }

        return view('firebase.admin.worker.edit', [
            'worker' => $workerData,
            'workerId' => $workerId,
        ]);
    }


    public function workUpdate(Request $request, $workerId)
    {
        $firestore = app('firebase.firestore')->database()->collection('worker');
        $firestore->document($workerId)->set($request->all(), ['merge' => true]);

        return redirect('work-show', ['workerId' => $workerId])->with('success', 'Worker created successfully!');
    }

    public function workShow($workerId)
    {
        $document = app('firebase.firestore')->database()->collection('worker')->document($workerId)->snapshot();

        // Retrieve document data
        $workerData = $document->data();

        return view('firebase.admin.worker.show', [
            'worker' => $workerData,
        ]);
    }

    public function workDelete($workerId)
    {
        // Delete the corresponding document in Firestore
        $firestore = app('firebase.firestore')->database()->collection('worker');
        $firestore->document($workerId)->delete();

        // Redirect the user to an appropriate page
        return redirect('work-index')->with('success', 'Worker deleted successfully!');
    }

}
