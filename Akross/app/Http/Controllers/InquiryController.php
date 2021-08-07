<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Type;
use App\Models\Tell_possible;
use App\Models\Week;
use App\Models\Reason;
use App\Models\Skill;
use App\Models\Current_skill;
use App\Models\Know_trigger;
use App\Models\Reservation_possible;
use App\Models\Teacher;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Sesstion;

class InquiryController extends Controller
{
  //問合せ画面の表示
  public function index(Request $request)
  {
   $type_forms = Type::select('type_form')->get();
   $tell_possibleds = Tell_possible::select('tell_possibled')->get();
   $weeks = Week::select('week')->get();
   $reasons = Reason::select('reason')->get(); 
   $skills = Skill::select('skill')->get();
   $current_skills = Current_skill::select('current_skill')->get();
   $know_triggers = Know_trigger::select('know_trigger')->get();
   $reservation_possibles = Reservation_possible::select('reservation_possible')->get();
   $teachers = Teacher::select('teacher_name')->get();
   $student_id = $request->session()->get('student_id');
    return view('inquirys',['student_id'=>$  $student_id,'type_forms'=>$type_forms,'tell_possibleds'=>$tell_possibleds,'weeks'=>$weeks,'reasons'=>$reasons,'skills'=>$skills,'current_skills'=>$current_skills,'know_triggers'=>$know_triggers,'reservation_possibles'=>$reservation_possibles,'teachers'=>$teachers]);
  }
  //登録
  public function store(Request $request) {
    //Eloquentモデル（登録処理）
    $inquirys = new Inquiry();
    $inquirys->student_id = $request->student_id;
    $inquirys->date = $request->date;
    $inquirys->type_form = $request->type_form;
    $inquirys->student_name = $request->student_name;
    $inquirys->student_tell = $request->student_tell;
    $inquirys->student_address = $request->student_address;
    $inquirys->student_mail = $request->student_mail;
    $inquirys->profession = $request->profession;
    $inquirys->corporation = $request->corporation;
    $inquirys->department = $request->department;
    $inquirys->sales_date = $request->sales_date;
    $inquirys->sales_time = $request->sales_time;
    $inquirys->tell_possibled = $request->tell_possibled;
    $inquirys->week = $request->week;
    $inquirys->reason = $request->reason;
    $inquirys->reason_anoher = $request->reason_anoher;
    $inquirys->skill = $request->skill;
    $inquirys->skill_another = $request->skill_another;
    $inquirys->current_skill = $request->current_skill;
    $inquirys->current_skill_another = $request->current_skill_another;
    $inquirys->know_trigger = $request->know_trigger;
    $inquirys->know_trigger_another = $request->know_trigger_another;
    $inquirys->reservation_day = $request->reservation_day;
    $inquirys->reservation_possible = $request->reservation_possible;
    $inquirys->question = $request->question;
    $inquirys->teacher_id = $request->teacher_id;
    $inquirys->another = $request->another;
    $inquirys->admin_id = $request->admin_id;
    $inquirys->save();
    $request->session()->put('student_id', $request->student_id);

    return redirect('/');
}
}
