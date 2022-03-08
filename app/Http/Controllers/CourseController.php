<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\CourseRequirement;
use App\Models\CourseOutcome;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\CorrectAnswer;
use App\Models\QuestionOptions;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('pages.Course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::where('category_parent','0')->get();
      
      return view('pages.Course.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courses = new Course();
        $courses->title = $request->title;
        $courses->short_desc = $request->short_desc;
        $courses->instructor = Auth::User()->id;
        $courses->desc = $request->desc;
        $courses->category = $request->category;
        $courses->level = $request->level;
        $courses->language = $request->language;
        $courses->top_course = $request->top_course;
        $courses->overview = $request->overview;
        $courses->url = $request->url;
        
        if(request()->thumbnail)
        {
        $articleImage = time().'.'.request()->thumbnail->getClientOriginalExtension();
        request()->thumbnail->move(public_path('images/Course'), $articleImage);
        $courses->thumbnail = $articleImage;
        }
        if($request->audio_file == null){

        }else{
         $audioFile = time().'.'.request()->audio_file->getClientOriginalExtension();
         request()->audio_file->move(public_path('Audio/Course'), $audioFile);
         $courses->audio_file = $audioFile;
       }
       if($request->video_file == null){

    }else{
     $videoFile = time().'.'.request()->video_file->getClientOriginalExtension();
     request()->video_file->move(public_path('Video/Course'), $videoFile);
     $courses->video_file = $videoFile;
   }
        $courses->meta_keyword = $request->meta_keyword;
        $courses->meta_desc = $request->meta_desc;
        $courses->save();

       
        foreach($request->requirments as $requirment)
        {
           $Req = new CourseRequirement();
           $Req->course_id = $courses->id;
           $Req->requirments = $requirment;
           $Req->save();
        }

        return redirect('/Course');
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
        $courses = Course::find($id);
        $categories = Category::all();
        return view('pages.Course.edit',compact('courses','categories'));
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
        $courses = Course::find($id);
        $courses->title = $request->title;
        $courses->short_desc = $request->short_desc;
        $courses->instructor = Auth::User()->id;
        $courses->desc = $request->desc;
        $courses->category = $request->category;
        $courses->level = $request->level;
        $courses->language = $request->language;
        $courses->top_course = $request->top_course;

        $courses->overview = $request->overview;
        $courses->url = $request->url;
        if($request->thumbnail == null){

        }else{
        $articleImage = time().'.'.request()->thumbnail->getClientOriginalExtension();
        request()->thumbnail->move(public_path('images/Course'), $articleImage);
        $courses->thumbnail = $articleImage;
       }

      
       if($request->audio_file == null){

       }else{
        $audioFile = time().'.'.request()->audio_file->getClientOriginalExtension();
        request()->audio_file->move(public_path('Audio/Course'), $audioFile);
        $courses->audio_file = $audioFile;
      }
      if($request->video_file == null){

    }else{
     $videoFile = time().'.'.request()->video_file->getClientOriginalExtension();
     request()->video_file->move(public_path('Video/Course'), $videoFile);
     $courses->video_file = $videoFile;
   }
        $courses->meta_keyword = $request->meta_keyword;
        $courses->meta_desc = $request->meta_desc;
        $courses->save();
        return redirect('/Course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Course::find($id);
    //     $lesson = Lesson::where('course_id',$id)->get(); 
    //     $quiz = Quiz::where('course_id',$id)->get();
    //    foreach($quiz as $ques)
    //     $question = QuizQuestion::where('quiz_id',$ques)->get();
    //   foreach($question as $que)
    //  $Corrrect = CorrectAnswer::where('quiz_id',$que->id)->get();
    //  foreach($question as $quel)
    // $option = QuestionOptions::where('quiz_id',$quel->id)->get();
        $courses->delete();
         return redirect('/Course');
       // return $question;
    }
    
    
    
    public function dashboard(){
        if (Auth::User()->role == '2') {
            return view('dashboard2');
        }else if(Auth::User()->role == '3'){
            $user = Auth::User()->id;
            return redirect('/');
        }
        
        else {
            return view('dashboard');
        }
        
    }
    
    
    
    public function message(){
        $messages = Message::all();
        return view('pages.Course.message',compact('messages'));
    }

    public function messagedel($id){
        $messages = Message::find($id)->delete();
        return back();
    }
}
