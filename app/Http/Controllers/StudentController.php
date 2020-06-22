<?php
namespace App\Http\Controllers;
use App\Student;
use Auth;
use App\User;
use Image;

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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.addstudent');
        // return "Hello";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user =  User::find(Auth::id());
        $student = new Student();
        $student->firstname = $request->get('firstname');
        $student->lastname = $request->get('lastname');
        $student->class = $request->get('class');
        $student->tutor = $request->get('tutor');

        $student->description = $request->get('description');
        
        $img = $request->file('picture');
        $filename = time() . '.' . $img->getClientOriginalExtension();
        $location = public_path('image/'.$filename);
        Image::make($img)->resize(100,100)->save($location);
        $student->picture = $filename;
        $student->user_id = $user->id;  
        $student->save();
        return redirect('admin/dashboard'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $student = Student::find($id);
        // return view('students.viewdetail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.editStudent', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $user =  User::find(Auth::user()->id);
        $student = Student::find($id);
        $student->firstname = $request->get('firstname');
        $student->lastname = $request->get('lastname');
        $student->class = $request->get('class');
        $student->tutor = $request->get('tutor');
        $student->description = $request->get('description');
        if ($request->hasfile('picture')){
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). ".".$extension;
            $file->move('image/', $filename);
            $student->picture = $filename;
        }
        $student->user_id = $user->id;  
        $student->save();
        return redirect('admin/dashboard'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
