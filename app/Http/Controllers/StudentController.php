<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\InstructorForm;
use Illuminate\Support\Facades\Hash;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::where('role','3')->get();
        return view('pages.Student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = new User();
        $students->name = $request->name;
        $students->lname = $request->lname;
        $students->email  = $request->email ;
        $students->password = Hash::make($request->password);
        $students->biography = $request->biography;
        $articleImage = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/Login'), $articleImage);
        $students->image = $articleImage;
        $students->facebook = $request->facebook;
        $students->twitter = $request->twitter;
        $students->linkedin = $request->linkedin;
        $students->role = '3';
        $students->save();
        return redirect('/Student');
       
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
        $students = User::find($id);
        return view('pages.Student.edit',compact('students'));
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
        $students = User::find($id);
        $students->name = $request->name;
        $students->lname = $request->lname;
        $students->email  = $request->email ;
        $students->password = Hash::make($request->password);
        $students->biography = $request->biography;
        if ($request->image == null) {
            
        } else {
            $articleImage = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/Login'), $articleImage);
            $students->image = $articleImage;
        }
        $students->facebook = $request->facebook;
        $students->twitter = $request->twitter;
        $students->linkedin = $request->linkedin;
        $students->role = '3';
        $students->save();
        return redirect('/Student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = User::find($id);
        $students->delete();
        return redirect('/Student');
    }

    public function profile($id){
        $profile = User::find($id);
        return view('pages.Profile.profile',compact('profile'));
    }

    public function profileupdate(Request $request,$id){
        $students = User::find($id);
        $students->name = $request->name;
        $students->lname = $request->lname;
        $students->email  = $request->email ;
        $students->biography = $request->biography;
        if ($request->image == null) {
            
        } else {
               
        $articleImage = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/Login'), $articleImage);
        $students->image = $articleImage;
        }
     
        $students->facebook = $request->facebook;
        $students->twitter = $request->twitter;
        $students->linkedin = $request->linkedin;
        $students->role = $request->role;
        $students->save();
        return back();
    }

    public function passwordupdate(Request $request,$id){
        $students = User::find($id);
        $students->password = Hash::make($request->password);
        return back();
    }

    public function instructor($id){
        $instructor = User::find($id);
        return view('pages.Student.instructor_form',compact('instructor'));
    }

    public function storeinstructor(Request $request){
        $instructor = new InstructorForm();
        $instructor->student_id = $request->student_id;
        $instructor->name = $request->name;
        $instructor->email = $request->email;
        $instructor->phone = $request->phone;
        $instructor->message = $request->message;
        $instructor->address = $request->address;
        $articleImage = time().'.'.request()->document->getClientOriginalExtension();
        request()->document->move(public_path('document/Student'), $articleImage);
        $instructor->document = $articleImage;
        $instructor->save();
        return back();
    }


    public function storestudent(Request $request)
    {
        $students = new User();
        $students->name = $request->name;
        $students->lname = $request->lname;
        $students->email  = $request->email ;
        $students->password = Hash::make($request->password);
        $students->biography = $request->biography;
        $articleImage = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/Login'), $articleImage);
        $students->image = $articleImage;
        $students->facebook = $request->facebook;
        $students->twitter = $request->twitter;
        $students->linkedin = $request->linkedin;
        $students->role = '3';
        $students->save();
        return redirect('/login');
       
    }
    
}
