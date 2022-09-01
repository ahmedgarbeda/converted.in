<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TasksController extends Controller
{

    public function index()
    {
//        $tasks = Task::with('assignedTo','assignedBy')->get();
        return view('tasks');
    }
    public function datatables()
    {

        $tasks = Task::query()->with(['user','admin']);
//        $tasks = Task::query()->sele
        return DataTables::of($tasks)
        ->addColumn('user',function ($row){
            return $row->user->name;
        })
            ->addColumn('admin',function ($row){
                return $row->admin->name;
            })
            ->rawColumns(['user' => 'user','admin'=>'admin'])
            ->toJson();
    }

    public function create()
    {
        $users = User::where('is_admin',0)->get();
        return view('create-task',compact('users'));
    }

    public function store(TaskRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['assigned_by_id'] = auth()->id();
       Task::create($validatedData);
       toast('Task created successfully','success','top-right');
       return redirect()->route('task.index');
    }
}
