<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChooseTryController extends Controller
{
    public function choosetry()
    {
        $groups = DB::table('groups')->get();
        // dd($groups);
        return view('choosetry', compact('groups'));
    }
}
