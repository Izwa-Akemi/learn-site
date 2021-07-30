<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
  //問合せ画面の表示
  public function index()
  {
    return view('inquirys');
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
    $inquirys->master_skill = $request->master_skill;
    $inquirys->master_skill_another = $request->master_skill_another;
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
    return redirect('/');
}
}
