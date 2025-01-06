<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use Illuminate\Http\Request;

class mainController extends Controller
{
    //
    public function index(){
        $alumni = alumni::all();
        return view('pages.main', compact('alumni'));
    }
    
    public function jurusan(){
        return view('pages.jurusan');
    }
    
    public function tentang_kami(){
        return view('pages.tentang-kami');
    }
    
    public function contact(){
        return view('pages.contact');
    }
    }