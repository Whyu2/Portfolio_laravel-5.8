<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Profile;

class PagesController extends Controller
{
    public function home()
    {

        $profile = DB::table('profile')->find(1);
        $about = DB::table('about')->find(1);


        return view('portfolio.index', ['profile' => $profile], ['about' => $about]);
    }
}