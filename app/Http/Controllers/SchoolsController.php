<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = Schools::paginate(9);
        return view('schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Schools $school, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'image' => 'required',
            'opening' => 'required',
            'price' => 'required',
            'rating' => 'required|numeric',
            'reviews' => 'required|numeric',
            'phone' => 'required',
            'whatsapp' => 'required',
            'website' => 'required',
            'instagram' => 'required',
            '2gis' => 'required',
        ]);

        $school->create($data);

        return redirect('/schools');

    }

    /**
     * Display the specified resource.
     */
    public function show(Schools $school)
    {
        return view('schools.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schools $school)
    {
        return view('schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schools $school)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        $school->update($data);

        return redirect('/schools/' . $school->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schools $school)
    {
        $school->delete();

        return redirect('/schools');
    }
}
