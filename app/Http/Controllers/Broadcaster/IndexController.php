<?php

namespace App\Http\Controllers\Broadcaster;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('broadcaster.index',[
            'navigation' => 'status'
        ]);
    }
    public function devices(){
        return view('broadcaster.devices',[
            'navigation' => 'devices'
        ]);
    }
    public function analyze(){
        return view('broadcaster.analyze',[
            'navigation' => 'analyze'
        ]);
    }
}
