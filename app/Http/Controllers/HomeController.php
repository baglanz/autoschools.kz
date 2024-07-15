<?php

namespace App\Http\Controllers;

use App\Models\Instructors;
use App\Models\Schools;

class HomeController extends Controller
{
    public function index()
    {
        $schools = Schools::paginate(6);
        $instructors = Instructors::paginate(6);

        return view('home', compact('schools', 'instructors'));
    }
}
