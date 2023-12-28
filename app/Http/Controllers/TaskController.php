<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Project;
use App\Models\Status;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::get();
        $view_data = [
            'tasks' => $tasks,
        ];
        return view('task.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        $statuss = Status::all();
        $tasks = Task::all();
        return view('task.create', compact('projects', 'statuss', 'tasks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_id' => 'required',
            'name_task' => 'required',
            'description_task' => 'required',
            'deadline_date' => 'required',
            'status_id' => 'required',
        ]);

        $project_id = $request->input('project_id');
        $name_task = $request->input('name_task');
        $description_task = $request->input('description_task');
        $deadline_date = $request->input('deadline_date');
        $status_id = $request->input('status_id');

        // jika menggunakan created tidak perlu memasukan created dan updated at dan harus menambahkan variable baru pada method post $fillable
        Task::create([
            'project_id' => $project_id,
            'name_task' => $name_task,
            'description_task' => $description_task,
            'deadline_date' => $deadline_date,
            'status_id' => $status_id,
        ]);
        Session::flash('success_add', 'Data berhasil ditambahkan.');
        return redirect('task');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_task)
    {
        $task = Task::where('id_task', $id_task) // ->where('id', '=', $id) tanpa menuliskan "=" laravel menganggapnya menggunakan operator sama dengan "="
            ->first();
        $project = Project::all();
        $status = Status::all();
        $view_data = [
            'task' => $task,
            'project' => $project,
            'status' => $status,
        ];
        return view('task.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_task)
    {
        $request->validate([
            'project_id' => 'required',
            'name_task' => 'required',
            'description_task' => 'required',
            'deadline_date' => 'required',
            'status_id' => 'required',
        ]);

        $project_id = $request->input('project_id');
        $name_task = $request->input('name_task');
        $description_task = $request->input('description_task');
        $deadline_date = $request->input('deadline_date');
        $status_id = $request->input('status_id');

        Task::where('id_task', $id_task)
            ->update([
                'project_id' => $project_id,
                'name_task' => $name_task,
                'description_task' => $description_task,
                'deadline_date' => $deadline_date,
                'status_id' => $status_id,
            ]); // sama seperti update ... where id = $id
        Session::flash('success_update', 'Data berhasil diubah.');

        return redirect("task");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_task)
    {
        Task::where('id_task', $id_task)->delete();
        Session::flash('success_destroy', 'Data berhasil dihapus.');

        return redirect("task");
    }
}
