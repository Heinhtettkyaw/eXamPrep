<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function loadIndex()
    {
        return view('Student.index');
    }
    public function loadScore()
    {
        return view('Student.examscores');
    }
    public function loadExam()
    {
        return view('Student.exam_detail');
    }
    public function loadPractice()
    {
        return view('Student.practice');
    }
}
