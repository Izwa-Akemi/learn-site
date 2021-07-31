<?php

namespace App\Http\Controllers;
use App\Models\Counseling;
use App\Models\Counseling_dtail;
use Illuminate\Http\Request;

class CounseringTabController extends Controller
{
    public function index()
    {
      return view('counseling_tabs');
    }
}
