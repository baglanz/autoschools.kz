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
            'opening' => 'nullable',
            'price' => 'required',
            'rating' => 'required|numeric',
            'reviews' => 'required|numeric',
            'phone' => 'required',
            'whatsapp' => 'required',
            'website' => 'required',
            'instagram' => 'required',
            '2gis' => 'required',
        ]);

        if (isset($data['opening'])) {
            $data['opening'] = json_encode($data['opening']);
        } else {
            $data['opening'] = json_encode([
                'Monday' => '09:00 - 18:00',
                'Tuesday' => '09:00 - 18:00',
                'Wednesday' => '09:00 - 18:00',
                'Thursday' => '09:00 - 18:00',
                'Friday' => '09:00 - 18:00',
                'Saturday' => '09:00 - 18:00',
                'Sunday' => '09:00 - 18:00',
            ]);
        }

        $data['phone'] = json_decode($data['phone'], true);
        $data['whatsapp'] = json_decode($data['whatsapp'], true);

        $school->create($data);

        return redirect('/schools');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schools $school)
    {
        $rating = $school->rating;
        $opening = json_decode($school->opening, true);
        $phones = json_decode($school->phone, true);
        $whatsapps = json_decode($school->whatsapp, true);

        if (!is_array($phones)) {
            $phones = [];
        }

        if (!is_array($whatsapps)) {
            $whatsapps = [];
        }

        if (!is_array($opening)) {
            $opening = [
                'Monday' => '09:00 - 18:00',
                'Tuesday' => '09:00 - 18:00',
                'Wednesday' => '09:00 - 18:00',
                'Thursday' => '09:00 - 18:00',
                'Friday' => '09:00 - 18:00',
                'Saturday' => '09:00 - 18:00',
                'Sunday' => '09:00 - 18:00',
            ];
        }

        return view('schools.show', compact('school', 'opening', 'phones', 'whatsapps', 'rating'));
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
