<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Departement;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Project;
use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements = Departement::get();
        $positions = Position::get();
        $admins = User::where('role', 'admin')->get();
        $directors = User::where('role', 'director')->get();
        $managers = User::where('role', 'manager')->get();
        $supervisors = User::where('role', 'supervisor')->get();
        $employees = User::where('role', 'supervisor')->get();
        $allemployees = User::where('role', 'supervisor')->get();
        $statuss = Status::get();
        $projects = Project::get();
        $tasks = Task::get();
        $assignments = Assignment::get();
        $view_data = [
            'departements' => $departements,
            'positions' => $positions,
            'admins' => $admins,
            'directors' => $directors,
            'managers' => $managers,
            'supervisors' => $supervisors,
            'employees' => $employees,
            'allemployees' => $allemployees,
            'statuss' => $statuss,
            'projects' => $projects,
            'tasks' => $tasks,
            'assignments' => $assignments,
        ];
        return view('dashboard.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
