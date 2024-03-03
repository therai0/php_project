<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_info;

class StudentController extends Controller
{
    public $timestamps = false;
    // public function index()
    // {
    //     return view('index');
    // }

    // public function table()
    // {
    //     $student = student_info::all();
    //     return view('index', compact('student'));
    // }

    // public function create()
    // {
    //     return view('create');
    // }

    // public function storeData(Request $request)
    // {
    //     try {
    //         student_info::create($request->all());
    //         return redirect()->back()->with("message", "Data has been inserted");
    //     } catch (\Throwable $er) {
    //         // dd('Error');
    //         dd($er);
    //         return redirect()->back()->with("message", "Something went worng");
    //     }
    // }
}
