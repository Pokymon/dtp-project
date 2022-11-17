<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->paginate(5);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3','max:255'],
            'phone_number' => ['required', 'numeric'],
            'address' => ['required', 'string', 'max:255'],
            'class' => ['required', 'string', 'max:255'],
        ]);
        $name = $request->name;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $class = $request->class;
        $photoPath = '';
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos');
        }
        Student::create([
            'name' => $name,
            'phone_number' => $phone_number,
            'address' => $address,
            'class' => $class,
            'photo' => $photoPath,
        ]);
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3','max:255'],
            'phone_number' => ['required', 'numeric'],
            'address' => ['required', 'string', 'max:255'],
            'class' => ['required', 'string', 'max:255'],
        ]);
        $name = $request->name;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $class = $request->class;
        $photoPath = '';
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos');
        }
        Student::find($id)->update([
            'name' => $name,
            'phone_number' => $phone_number,
            'address' => $address,
            'class' => $class,
            'photo' => $photoPath,
        ]);
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::destroy($id);
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
