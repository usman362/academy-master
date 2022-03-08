<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = User::where('role','2')->get();
        return view('pages.Teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teachers = new User();
        $teachers->name = $request->name;
        $teachers->lname = $request->lname;
        $teachers->email  = $request->email ;
        $teachers->password = Hash::make($request->password);
        $teachers->biography = $request->biography;
        $teachers->image = $request->image;
        $articleImage = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/Login'), $articleImage);
        $teachers->image = $articleImage;
        $teachers->facebook = $request->facebook;
        $teachers->twitter = $request->twitter;
        $teachers->linkedin = $request->linkedin;
        $teachers->role = '2';
        $teachers->save();
        return redirect('/Teacher');
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
        $teachers = User::find($id);
        return view('pages.Teacher.edit',compact('teachers'));
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
        $teachers = User::find($id);
        $teachers->name = $request->name;
        $teachers->lname = $request->lname;
        $teachers->email  = $request->email ;
        $teachers->password = Hash::make($request->password);
        $teachers->biography = $request->biography;
        $teachers->image = $request->image;
        $articleImage = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/Login'), $articleImage);
        $teachers->image = $articleImage;
        $teachers->facebook = $request->facebook;
        $teachers->twitter = $request->twitter;
        $teachers->linkedin = $request->linkedin;
        $teachers->role = '2';
        $teachers->save();
        return redirect('/Teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachers = User::find($id);
        $teachers->delete();
        return redirect('/Teacher');
    }
}
