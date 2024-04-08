<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function bookIndex()
    {
        $booking = [];
        $bookRef = app('firebase.firestore')->database()->collection('booking')->documents();

        foreach ($bookRef as $document) {
            $bookData = $document->data();
            $bookData['id'] = $document->id();
            $bookData['docRef'] = $document->reference();
            $booking[] = $bookData;
        }

        return view('firebase.admin.booking.index', [
            'bookings' => $booking,
        ]);
    }

    public function bookCreate(){
        return view('firebase.admin.booking.create');
    }
    public function bookStore(Request $request)
    {
        // Validate the incoming request data if needed
        $validatedData = $request->validate([
            'UID' => 'required',
            'addressID' => 'required',
            'service' => 'required',
            'details' => 'required',
            'initialPrice' => 'required',
            'serviceFee' => 'required',
            'additionalFee' => 'required',
            'workerAssigned' => 'required',
            'status' => 'required',
            'timeBooked' => 'required',
            'timeScheduled' => 'required',
            'timeUpdated' => 'required'
        ]);

        // Access form data from the validated request
        $UID = $validatedData['UID'];
        $addressID = $validatedData['addressID'];
        $service = $validatedData['service'];
        $details = $validatedData['details'];
        $initialPrice = $validatedData['initialPrice'];
        $serviceFee = $validatedData['serviceFee'];
        $additionalFee = $validatedData['additionalFee'];
        $workerAssigned = $validatedData['workerAssigned'];
        $status = $validatedData['status'];
        $timeBooked = $validatedData['timeBooked'];
        $timeScheduled = $validatedData['timeScheduled'];
        $timeUpdated = $validatedData['timeUpdated'];

        $firestore = app('firebase.firestore')->database()->collection('booking');
        $newDocument = $firestore->newDocument();
        $newDocument->set([
            'UID' => $UID,
            'addressID' => $addressID,
            'service' => $service,
            'details' => $details,
            'initialPrice' => $initialPrice,
            'serviceFee' => $serviceFee,
            'additionalFee' => $additionalFee,
            'workerAssigned' => $workerAssigned,
            'status' => $status,
            'timeBooked' => $timeBooked,
            'timeScheduled' => $timeScheduled,
            'timeUpdated' => $timeUpdated
        ]);

        return redirect('/book-index')->with('success', 'Booking created successfully!');
    }

    public function bookEdit($bookId)
    {
        $document = app('firebase.firestore')
            ->database()
            ->collection('booking')
            ->document($bookId)
            ->snapshot();

        $bookData = $document->data();

        if ($bookData === null) {
            // Booking not found, handle the error or redirect as needed
            return redirect()->route('book-index')->with('error', 'Booking not found.');
        }

        return view('firebase.admin.booking.edit', [
            'book' => $bookData,
            'bookID' => $bookId, // Pass the bookId variable to the view
        ]);
    }

    public function bookUpdate(Request $request, $bookId)
    {
        $firestore = app('firebase.firestore')->database()->collection('booking');
        $firestore->document($bookId)->set($request->all(), ['merge' => true]);

        return redirect()->route('book-show', ['bookId' => $bookId])->with('success', 'Booking updated successfully!');
    }

    public function bookShow($bookId)
    {
        $document = app('firebase.firestore')->database()->collection('booking')->document($bookId)->snapshot();

        // Retrieve document data
        $bookData = $document->data();

        return view('firebase.admin.booking.show', [
            'booking' => $bookData,
        ]);
    }

    public function bookDelete($bookId)
    {
        // Delete the corresponding document in Firestore
        $firestore = app('firebase.firestore')->database()->collection('booking');
        $firestore->document($bookId)->delete();

        // Redirect the user to an appropriate page
        return redirect('book-index')->with('success', 'Booking deleted successfully!');
    }

}
