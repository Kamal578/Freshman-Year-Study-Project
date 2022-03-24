<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DB;


class EvaluationController extends Controller
{
    public function evaluation(Request $request)
    {
        $subjects = DB::table('main')
        ->join('groups', 'main.group_id', '=', 'groups.id')
        ->join('subjects', 'main.subject_id', '=', 'subjects.id')
        ->select('groups.*', 'subjects.*')
        ->where('groups.id', '=', $request->input('group_id'))
        ->get();

        foreach ($subjects as $subject)
        {
            $subject->sum = $subject->first_exam_coef + $subject->second_exam_coef + $subject->third_exam_coef;
        }

        return view('evaluation', compact('subjects'));
    }
} 