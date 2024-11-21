<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class logController extends Controller
{
    public function index(){
        $logs = Log::all();
        return view('log.index', compact('logs'));
    }
}
