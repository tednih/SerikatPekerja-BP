<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('member.index', compact('user'));
    }
    public function laporanKeuangan()
    {
        $user = Auth::user();

        return view('member.laporanKeuangan', compact('user'));
    }
}
