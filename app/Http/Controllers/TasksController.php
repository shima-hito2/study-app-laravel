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
        $tasks->save();
        return redirect('/');
    }
}
