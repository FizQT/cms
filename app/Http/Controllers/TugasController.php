<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TugasController extends Controller
{
    public function index(){
        $data = Post::all();
        return view('index', ['data'=>$data]);
    }
}
