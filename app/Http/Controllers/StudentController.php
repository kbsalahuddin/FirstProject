<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
      return view ('home');
    }
    public function about(){
      return 'Hello About!';
    }
}
