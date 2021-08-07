<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Counseling;
use App\Models\Counseling_dtail;
use Illuminate\Http\Request;

class CounselingController extends Controller
{
 //カウンセリング画面の表示
    public function index()
  {
    
        return view('counselings');
    
   }
      public function store(Request $request) {
        //Eloquentモデル（登録処理）
        $counselings = new Counseling();
        $counselings->student_id = $request->student_id;
        $counselings->literacy= $request->literacy;
        $counselings->counseling_result = $request->counseling_result;
        $counselings->decision_day = $request->decision_day;   
        $counselings->admin_id = $request->admin_id;
        $counselings->save();
        return view('counselings');
    }
}
