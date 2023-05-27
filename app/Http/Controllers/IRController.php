<?php

namespace App\Http\Controllers;

use App\Models\IR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IRController extends Controller
{
    public function index() {
//        $ir = IR::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        $ir = IR::select('id', 'total_amount', 'create_at', 'status')->where('user_id', 1)->orderBy('created_at', 'desc')->get();
        return view('ir.index', compact('ir'));
    }
}
