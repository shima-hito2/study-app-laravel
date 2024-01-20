<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubjectMaster;
use Illuminate\Http\Request;

class SubjectMasterController extends Controller
{
    //
    public function create(Request $request)
    {
        $tasks = new SubjectMaster();
        $tasks->name = $request->name;
        $tasks->save();
        return;
    }

    public function getAll()
    {
        $subjectMaster = new SubjectMaster();
        $items = $subjectMaster->get();

        return $items;
    }

    public function getById(Request $request)
    {
        $subjectMaster = new SubjectMaster();
        $item = $subjectMaster::find((int)$request->id);

        return $item;
    }

    public function delete(Request $request)
    {
        $subjectMaster = new SubjectMaster();
        $member = $subjectMaster::find((int)$request->id);

        $member->delete();
        // echo ((int)$request->id);
        // dd($member);
        // return $member;
        return;
    }
}
