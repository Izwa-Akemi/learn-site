<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Counseling;
use App\Models\Counseling_dtail;
use Illuminate\Http\Request;

class CounseringTabController extends Controller
{
    public function index()
    {
        return view('counseling_tabs');
       /* $counseling_dtail = Counseling_dtail::select('councelling_detail_id')
            ->where("student_id")
            ->get();
        return view('counseling_tabs', [
            'counseling_dtail' => $counseling_dtail
        ]);*/
    }
    /*public function tabs()
    {
        $counseling_dtail = Counseling_dtail::select('councelling_detail_id')
            ->where("student_id")
            ->get();
        return view('counseling_tabs', [
            'counseling_dtail' => $counseling_dtail
        ]);
    }*/
    //登録
  
}
/*
 $inquirys = DB::table('inquirys')
    ->join('follows', 'inquirys.student_id', '=', 'follows.student_id')
    ->select('inquirys.student_name', 'inquirys.created_at','inquirys.reservation_day','inquirys.teacher_id',DB::raw('max(follows.updated_at)'),'follows.follow_date','follows.follow_type','follows.follow_contents')
    ->groupBy('inquirys.student_id')
    ->get();*/