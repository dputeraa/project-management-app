<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Status;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::get();
        $view_data = [
            'projects' => $projects,
        ];
        return view('project.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        $statuss = Status::all();
        return view('project.create', compact('projects', 'statuss'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_project' => 'required',
            'description_project' => 'required',
            'start_date' => 'required',
            'date_of_completion' => 'required',
            'status_id' => 'required',
        ]);

        $name_project = $request->input('name_project');
        $description_project = $request->input('description_project');
        $start_date = $request->input('start_date');
        $date_of_completion = $request->input('date_of_completion');
        $status_id = $request->input('status_id');

        // jika menggunakan created tidak perlu memasukan created dan updated at dan harus menambahkan variable baru pada method post $fillable
        Project::create([
            'name_project' => $name_project,
            'description_project' => $description_project,
            'start_date' => $start_date,
            'date_of_completion' => $date_of_completion,
            'status_id' => $status_id,
        ]);
        Session::flash('success_add', 'Data berhasil ditambahkan.');
        return redirect('project');
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
    public function edit(string $id_project)
    {
        $project = Project::where('id_project', $id_project) // ->where('id', '=', $id) tanpa menuliskan "=" laravel menganggapnya menggunakan operator sama dengan "="
            ->first();
        $status = Status::all();
        $view_data = [
            'project' => $project,
            'status' => $status,
        ];
        return view('project.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_project)
    {
        $request->validate([
            'name_project' => 'required',
            'description_project' => 'required',
            'start_date' => 'required',
            'date_of_completion' => 'required',
            'status_id' => 'required',
        ]);

        $name_project = $request->input('name_project');
        $description_project = $request->input('description_project');
        $start_date = $request->input('start_date');
        $date_of_completion = $request->input('date_of_completion');
        $status_id = $request->input('status_id');

        Project::where('id_project', $id_project)
            ->update([
                'name_project' => $name_project,
                'description_project' => $description_project,
                'start_date' => $start_date,
                'date_of_completion' => $date_of_completion,
                'status_id' => $status_id,
            ]); // sama seperti update ... where id = $id
        Session::flash('success_update', 'Data berhasil diubah.');

        return redirect("project");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_project)
    {
        Project::where('id_project', $id_project)->delete();
        Session::flash('success_destroy', 'Data berhasil dihapus.');

        return redirect("project");
    }
}
