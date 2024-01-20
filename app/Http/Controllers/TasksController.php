<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public function add()
    {
        return view('article.add');
    }

    public function create(Request $request)
    {
        $tasks = new Tasks();
        $tasks->title = $request->title;
        $tasks->detail = $request->detail;
        $tasks->code = $request->code;
        $tasks->style = $request->style;
        $tasks->subject_id = $request->subject_id;
        $tasks->save();
        return;
        // dd($request);
        // return redirect('http://localhost:3000/admin/regist');
    }
}
