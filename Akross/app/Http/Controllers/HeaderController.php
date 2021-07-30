<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Inquiry;
use App\Models\Follow;

class HeaderController extends Controller
{
   //問合せ画面の表示
  public function index()
  {
    $inquiry = DB::table('inquirys')
    ->join('follows', 'inquirys.student_id', '=', 'follows.follows_id')
    ->where('created_at')
    ->select([DB::raw('Max(created_at)'),'follows'])
    ->where('follows.follows_id')
    ->get();
    return view('inquiry_alls',["inquiry"=> $inquiry]);
    
  }
}
/*$inquiry="SELECT * FROM inquirys i " +
	         "INNER JOIN follows f " +
			 "ON i.student_id = f.student_id " +
	         "WHERE  created_at = (" +
			 "SELECT MAX(created_at) FROM follows f WHERE f.student_id = :student_Id;*/
             


