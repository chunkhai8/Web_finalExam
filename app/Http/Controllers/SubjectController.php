<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function mainpage()
    {
        if (Auth::check()) {
            return view('mainpage', ['subjectItems' => Subject::all()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }

    public function saveSubject(Request $request)
    {
        echo json_encode($request->all());
        $newSubjectList = new Subject();
        $newSubjectList->subject_title = $request->sub_title;
        $newSubjectList->subject_description = $request->sub_descrip;
        $newSubjectList->subject_price = $request->sub_price;
        $newSubjectList->subject_learning_hours = $request->sub_learn_hours;
        $newSubjectList->save();

        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
    }
}
