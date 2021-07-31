<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Inquiry;
use App\Models\Follow;

class HeaderController extends Controller
{
   //問合せ画面の表示
   public function inquirys()
   {

     return view('inquirys');
     
   }
 
 /*$inquiry="SELECT * FROM inquirys i " +
            "INNER JOIN follows f " +
        "ON i.student_id = f.student_id " +
            "WHERE  created_at = (" +
        "SELECT MAX(created_at) FROM follows f WHERE f.student_id = :student_Id;*/
   //問合せ一覧画面の表示
  public function inqueryAll()
  {
    $inquirys = DB::table('inquirys')
    ->join('follows', 'inquirys.student_id', '=', 'follows.student_id')
    ->select('inquirys.student_name', 'inquirys.created_at','inquirys.reservation_day','inquirys.teacher_id',DB::raw('max(follows.updated_at)'),'follows.follow_date','follows.follow_type','follows.follow_contents')
    ->groupBy('inquirys.student_id')
    ->get();
   
    return view('inquiry_alls',["inquirys"=> $inquirys]);
    
  }
 
  /*SELECT a.student_name as studentName,a.type_form as typeForm,a.inquery_date as inqueryDate,a.teacher_id as teacherId," +
					"b.follow_type as followType,b.follow_contents as followContents,b.follow_date as followDate," +
					"max(b.last_updated) " +
					"FROM inquiry a " +
					"INNER JOIN follow b " +
					"ON a.student_id=b.student_id " +
					"GROUP BY a.student_id" */
 
 
}             


