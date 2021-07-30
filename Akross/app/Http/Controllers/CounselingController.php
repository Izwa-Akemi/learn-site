<?php

namespace App\Http\Controllers;

use App\Models\Counseling;
use Illuminate\Http\Request;

class CounselingController extends Controller
{
 //カウンセリング画面の表示
    public function index()
  {
    return view('counselings');
  }
}
