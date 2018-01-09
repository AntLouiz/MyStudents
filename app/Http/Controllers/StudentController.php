<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Image;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();


        return view('students/index', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;

        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'age' => 'required',
            'email' => 'required|email',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $image = $request->file('image');
        $dest_path =  public_path('images/students');

        $image_name = str_slug(strtolower($image->getClientOriginalName()));
        $image_name = $image_name.'.'.$image->getClientOriginalExtension();

        $image_object = Image::make(
            $image->getRealPath(), array(
                'width' => 100,
                'height' => 100,
                'grayscale' => false
        ));

        $image_object->save($dest_path.'/'.$image_name);

        $image->move($dest_path, $image);

        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->email = $request->input('email');
        $student->address = $request->input('address');

        $student->save();

        return \Redirect::route(
            'students.index'
        )->with('message', "Student ".$student->name." has been created!");
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
