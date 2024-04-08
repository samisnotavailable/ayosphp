<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CustomerController extends Controller
{

    public function custIndex()
    {
        $customers = [];
        $custRef = app('firebase.firestore')->database()->collection('customers')->documents();

        foreach ($custRef as $document) {
            $customerData = $document->data();
            $customerData['id'] = $document->id();
            $customerData['docRef'] = $document->reference();
            $customers[] = $customerData;
        }

        return view('firebase.admin.customers.index', [
            'customers' => $customers,
        ]);
    }


    public function custCreate(){
        return view('firebase.admin.customers.create');
    }
    public function custStore(Request $request)
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
            'create_time' => 'required',
            'update_time' => 'required'
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
        $create_time = $validatedData['create_time'];
        $update_time = $validatedData['update_time'];

        $firestore = app('firebase.firestore')->database()->collection('customers');
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
            'create_time' => $create_time,
            'update_time' => $update_time
        ]);

        return redirect('/cust-index')->with('success', 'Customer created successfully!');
    }

    public function custEdit($customerId)
    {
        $document = app('firebase.firestore')
                        ->database()
                        ->collection('customers')
                        ->document($customerId)
                        ->snapshot();

        $customerData = $document->data();

        return view('firebase.admin.customers.edit', [
            'customer' => $customerData,
            'customerId' => $customerId,
        ]);
    }

    public function custUpdate(Request $request, $customerId)
    {
        $firestore = app('firebase.firestore')->database()->collection('customers');
        $firestore->document($customerId)->set($request->all(), ['merge' => true]);

        return redirect('cust-show', ['customerId' => $customerId])->with('success', 'Customer created successfully!');
    }

    public function custShow($customerId)
    {
        $document = app('firebase.firestore')->database()->collection('customers')->document($customerId)->snapshot();

        // Retrieve document data
        $customerData = $document->data();

        return view('firebase.admin.customers.show', [
            'customer' => $customerData,
        ]);
    }

    public function custDelete($customerId)
    {
        // Delete the corresponding document in Firestore
        $firestore = app('firebase.firestore')->database()->collection('customers');
        $firestore->document($customerId)->delete();

        // Redirect the user to an appropriate page
        return redirect('cust-index')->with('success', 'Customer deleted successfully!');
    }

}
