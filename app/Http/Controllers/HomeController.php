<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use App\Models\CourseRequirement;
use App\Models\Enroll;
use App\Models\Wishlist;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


    public function about_us(){
        return view('frontend.pages.about_us');
    }

    
    public function privacy_policy(){
        return view('frontend.pages.privacy_policy');
    }

    
    public function terms_and_condition(){
        return view('frontend.pages.terms_and_condition');
    }

    public function home(){
        $listenings = Course::where('category','Listening')->get();
       
        $speakings = Course::where('category','Speaking')->get();

        return view('frontend.pages.home',compact('listenings','speakings'));
    }

    public function course($id){
        $course = Course::find($id);
     
        $lessons = Lesson::where('course_id',$id)->get();
        // $wishlist = Wishlist::where('course_id',$id)->where('student_id',Auth::User()->id)->first();
        $requirements = CourseRequirement::where('course_id',$id)->get(); 
        $instructors = User::where('id',$course->instructor)->get();
        $enrolls = Enroll::where('course_id',$id)->get();
        foreach($instructors as $instructor)
        $ins_course = Course::where('instructor',$instructor->id)->get();
        return view('frontend.pages.course',compact('course','lessons','requirements','instructors','ins_course','enrolls'));
    }

    public function all_course(){
        $courses = Course::paginate(6);
        foreach ($courses as $course);
        $lessons = Lesson::where('course_id',$course->id)->get();
        return view('frontend.pages.all_course',compact('courses','lessons'));
    }


    public function search_course(Request $request){
      
    $query = "";
 
    if ($request->has('query')) {
        $query = request('query');
    }
        $lessons = Course::where('title','like', '%'.$query.'%')->get();
        return view('frontend.pages.search_course',compact('lessons'));
    }


    public function my_course(){
       $user = Auth::User()->id;
       if(Auth::User()->role == '2'){
        $courses = Course::where('instructor',$user)->get();
        return view('frontend.pages.my_course',compact('courses'));
       }else{
          
       $enrolls = Enroll::where('student_id',$user)->get();
      //return $enrolls;

        //$courses = Course::where('id',$enrolls->course_id)->get();
        return view('frontend.pages.my_course',compact('enrolls'));
    }
    }

    public function my_wishlist(){
        $user = Auth::User()->id;
        $wishlists = Wishlist::where('student_id',$user)->get();
        
        return view('frontend.pages.wishlist',compact('wishlists'));
    }

    public function remove_course($id){
        $remove = Enroll::where('student_id',Auth::User()->id)->where('course_id',$id);
        $remove->delete();
        return back();
    }

    public function my_message(){
        return view('frontend.pages.message');
    }

    public function my_profile(){
       
        $profile = Auth::User();
        return view('frontend.pages.profile',compact('profile'));
    }

    public function profileinfo_update(Request $request,$id){
        $students = User::find($id);
        $students->name = $request->name;
        $students->lname = $request->lname;
        $students->biography = $request->biography;
        $students->facebook = $request->facebook;
        $students->twitter = $request->twitter;
        $students->linkedin = $request->linkedin;
        $students->role = $request->role;
        $students->save();
        return back();
    }

    public function my_profile_pic(){
       
        $profile = Auth::User();
        return view('frontend.pages.profile_pic',compact('profile'));
    }

    public function profile_update(Request $request, $id){
        $students = User::find($id);
        if ($request->image == null) {
            
        } else {
            $articleImage = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/Login'), $articleImage);
            $students->image = $articleImage;
        }
        $students->save();
        return back();
    }

    public function my_profile_login(){
       
        $profile = Auth::User();
        return view('frontend.pages.profile_login',compact('profile'));
    }

public function wishlist(Request $request){
    $wishlist = new Wishlist();
    $wishlist->student_id = $request->student_id;
    $wishlist->course_id = $request->course_id;
    $wishlist->wishlist = 'active';
    $wishlist->save();
    return redirect('/');
}

public function enroll(Request $request){
    $enroll = new Enroll();
    $enroll->student_id = $request->student_id;
    $enroll->course_id = $request->course_id;
    $enroll->instructor_id = $request->instructor_id;
    $enroll->save();
    return back();
}


public function start_lesson($id){
    $course = Course::find($id);
    $lessons = Lesson::where('course_id',$id)->get();
    return view('frontend.pages.video_page',compact('lessons','course'));
   // return $lesson;
}


public function lesson($id){
    $lessons = Lesson::find($id);
    //$lessons = Lesson::where('course_id',$id)->get();
    return view('frontend.pages.lesson_video',compact('lessons'));
   // return $lesson;
}


public function quizpage($id){
   
    $quiz = Quiz::find($id);
   
    $lesson = Lesson::where('id',$quiz->exercise)->get();
    foreach($lesson as $lessons)
    $course = Course::where('id',$lessons->course_id)->first();
     return view('frontend.pages.quiz_page',compact('lessons','quiz','course'));
    //return $lesson;
}


public function questionpage($id){
    $lessons = Lesson::find($id);
    //$lessons = Lesson::where('course_id',$id)->get();
    return view('frontend.pages.question_page',compact('lessons'));
   // return $lesson;
}

public function instructor_detail($id){
    $instructor = User::find($id);
    return view('frontend.pages.instructor_detail',compact('instructor'));
}


}
