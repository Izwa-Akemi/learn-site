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
 
   //問合せ一覧画面の表示
  public function inqueryAll()
  {
  
    
     $inquirys = DB::table('inquirys')
    ->join('follows', 'inquirys.student_id', '=', 'follows.student_id')
    ->select('inquirys.student_name', 'inquirys.created_at','inquirys.reservation_day','inquirys.teacher_id',DB::raw('max(follows.updated_at)'),'follows.follow_date','follows.follow_type','follows.follow_contents')
    ->groupBy('inquirys.student_id')
    ->get();
   
     //$inquirys = DB::select("SELECT a.student_name ,a.created_at,a.reservation_day,a.teacher_id ,b.follow_id,b.follow_type,b.follow_contents,b.follow_date WHERE b.follow_date =(SELECT MAX(b.follow_date)From inquirys a INNER JOIN follows b ON a.student_id =b.student_id GROUP BY a.student_id;");
   
    
    return view('inquiry_alls',["inquirys"=> $inquirys]);
    
  }

}             


