<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MiscController extends Controller
{
    public function miscAbout()
    {
        return view('firebase.misc.about');
    }

    public function miscFaqs()
    {
        return view('firebase.misc.faqs');
    }

}
