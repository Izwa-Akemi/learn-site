<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowController extends Controller
{
//問合せ画面の表示
public function index()
{
  return view('follows');
}
}
