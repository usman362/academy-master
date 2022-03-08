<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curriculum;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\QuestionOptions;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\CorrectAnswer;
use GuzzleHttp\Psr7;
class CurriculumController extends Controller
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
        $curriculam = new Curriculum();
        $curriculam->section = $request->section;
        $curriculam->lesson = $request->lesson;
        $curriculam->quiz = $request->quiz;
        $curriculam->course_id = $request->course_id;
        $curriculam->save();
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
        $curriculam = Curriculum::find($id);
        return view('pages.Course.editsection',compact('curriculam'));
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
        $curriculam = Curriculum::find($id);
        $curriculam->section = $request->section;
        $curriculam->lesson = $request->lesson;
        $curriculam->quiz = $request->quiz;
        $curriculam->course_id = $request->course_id;
        $curriculam->save();
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
        $curriculam = Curriculum::find($id);
        $curriculam->delete();
        return redirect('/Course');
    }

    public function section($id){
        $course = Course::find($id);
        return view('pages.Course.section',compact('course'));
    }

    public function lesson($id){
        $course = Course::find($id);
        $curricula = Curriculum::where('course_id',$course->id)->get();
        return view('pages.Course.lesson',compact('course','curricula'));
    }

    public function quiz($id){
        $course = Course::find($id);
        $curricula = Curriculum::where('course_id',$course->id)->get();
        return view('pages.Course.quiz',compact('course','curricula'));
    }


    public function lessonstore(Request $request){
        $lessons = new Lesson();
        $lessons->course_id = $request->course_id;
        $lessons->title = $request->title;
        $lessons->section = $request->section;
        $lessons->web_url = $request->web_url;
       
        $lessons->lesson_provider = $request->lesson_provider;
       
        $lessons->mob_duration = $request->mob_duration;
        $lessons->summary = $request->summary;
        if($request->audio_file == null){

        }else{
         $audioFile = time().'.'.request()->audio_file->getClientOriginalExtension();
         request()->audio_file->move(public_path('Audio/Lesson'), $audioFile);
         $lessons->audio_file = $audioFile;
        
       }
       if($request->video_file == null){

    }else{
     $videoFile = time().'.'.request()->video_file->getClientOriginalExtension();
     request()->video_file->move(public_path('Video/Lesson'), $videoFile);
     $lessons->video_file = $videoFile;
   }

        $lessons->save();

        return redirect('/Course');

    }

    
    public function quizstore(Request $request){
        $quiz = new Quiz();
        $quiz->course_id = $request->course_id;
        $quiz->exercise = $request->exercise;
        $quiz->title = $request->title;
        $quiz->instruction = $request->instruction;
        $quiz->save();
        return back();
    }


    public function lessonupdate(Request $request, $id){
        $lessons =  Lesson::find($id);
        $lessons->course_id = $request->course_id;
        $lessons->title = $request->title;
        $lessons->section = $request->section;
        $lessons->web_url = $request->web_url;
       
        $lessons->lesson_provider = $request->lesson_provider;
       
        $lessons->mob_duration = $request->mob_duration;
        $lessons->summary = $request->summary;
        if($request->audio_file == null){

                    }else{
                     $audioFile = time().'.'.request()->audio_file->getClientOriginalExtension();
                     request()->audio_file->move(public_path('Audio/Lesson'), $audioFile);
                     $lessons->audio_file = $audioFile;
                   }
                   if($request->video_file == null){
            
                }else{
                 $videoFile = time().'.'.request()->video_file->getClientOriginalExtension();
                 request()->video_file->move(public_path('Video/Lesson'), $videoFile);
                 $lessons->video_file = $videoFile;
               }
        $lessons->save();
        return redirect('/Course');
    }

    
    public function quizupdate(Request $request, $id){
        $quiz = Quiz::find($id);
        $quiz->course_id = $request->course_id;
        $quiz->exercise = $request->exercise;
        $quiz->title = $request->title;
        $quiz->instruction = $request->instruction;
        $quiz->save();
        return redirect('/Course');
    }



    public function editlesson($id){
        $lessons = Lesson::find($id);
        $curricula = Curriculum::all();
        return view('pages.Course.editlesson',compact('lessons','curricula'));
    }

    public function deletelesson($id){
        $lessons = Lesson::find($id);
        $lessons->delete();
        return back();
    }


    public function editquiz($id){
        $quiz = Quiz::find($id);
        $curricula = Curriculum::all();
        return view('pages.Course.editquiz',compact('quiz','curricula'));
    }

    public function deletequiz($id){
        $quiz = Quiz::find($id);
        // $question2 = QuizQuestion::where('quiz_id',$id);
        // $question = QuizQuestion::where('quiz_id',$id)->get();
        //  foreach($question as $que)
        // $Corrrect = CorrectAnswer::where('quiz_id',$que->id);
        // $Corrrect->delete();
        // $option = QuestionOptions::where('quiz_id',$que->id);
        // //return $option;
        // $option->delete();
        // $question2->delete();
        $quiz->delete();
        return back();
    }


public function question($id){
    $quiz = Quiz::find($id);
    $questions = QuizQuestion::where('quiz_id',$quiz->id)->get();
    return view ('pages.Course.question',compact('questions','quiz'));
}

    public function addquestion($id){
        $quiz = Quiz::find($id);
        return view('pages.Course.addquestion',compact('quiz'));
    }

    public function storequestion(Request $request){
      
        $quiz = new QuizQuestion();
        $quiz->quiz_id = $request->quiz_id;
        $quiz->title = $request->title;
         $quiz->save();
      
   
      
       
        foreach($request->options as $option)
        {
            foreach($request->correctanswer as $correctanswer){
        $QuestionOptions = new  QuestionOptions();
        $QuestionOptions->quiz_id = $quiz->id;
        $QuestionOptions->options = $option;
        $QuestionOptions->correctanswer = $correctanswer;
        //return $QuestionOptions;
        $QuestionOptions->save();
    }
    }

    foreach($request->correctanswer as $correctanswer)
    {
    $QuestionCorrect = new  CorrectAnswer();
    $QuestionCorrect->quiz_id = $quiz->id;
    $QuestionCorrect->options = $QuestionOptions->options;
    $QuestionCorrect->correct_answer = $correctanswer;
    $QuestionCorrect->save();
    
}
    
       return back();
    
    }


    public function editquestion($id){
        $question = QuizQuestion::find($id);
        $option = QuestionOptions::where('quiz_id',$id)->get();
        

        return view('pages.Course.editquestion',compact('question','option'));
    }

    public function updatequestion(Request $request, $id){
        $quiz =  QuizQuestion::find($id);
        $quiz->quiz_id = $request->quiz_id;
        $quiz->title = $request->title;
         $quiz->save();
      
         $QuestionOptions = QuestionOptions::where('quiz_id',$id);
         $QuestionOptions->delete();

        foreach($request->options as $option)
        {
        $QuestionOptions = new  QuestionOptions();
        $QuestionOptions->quiz_id = $quiz->id;
        $QuestionOptions->options = $option;
        //$QuestionOptions->correctanswer = $request->correctanswer;
        $QuestionOptions->save();
        $QuestionCorrect = CorrectAnswer::where('quiz_id',$id);
         $QuestionCorrect->delete();
    }
    foreach($request->correctanswer as $correctanswer)
    {
    $QuestionCorrect = new  CorrectAnswer();
    $QuestionCorrect->quiz_id = $quiz->id;
    $QuestionCorrect->options = $QuestionOptions->options;
    $QuestionCorrect->correct_answer = $correctanswer;
    $QuestionCorrect->save();
    
}

    return back();

    //    return redirect('/addquestion/{id}');
    
    }

    public function deletequestion($id){
        $question = QuizQuestion::find($id);
       
        $correct = CorrectAnswer::where('quiz_id',$id);
        $correct->delete();
        $option = QuestionOptions::where('quiz_id',$id);
      
       $option->delete();
        $question->delete();
         return back();
    }



}
