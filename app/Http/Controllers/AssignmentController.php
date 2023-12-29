<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Employee;
use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assignments = Assignment::get();
        $view_data = [
            'assignments' => $assignments,
        ];
        return view('assignment.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $assignments = Assignment::all();
        $tasks = Task::all();
        $employees = Employee::all();
        $users = User::all();
        $statuss = Status::all();
        return view('assignment.create', compact('assignments', 'tasks', 'employees', 'users', 'statuss'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_id' => 'required',
            'employee_id' => 'required',
            'assignment_date' => 'required',
            'status_id' => 'required',
        ]);

        $task_id = $request->input('task_id');
        $employee_id = $request->input('employee_id');
        $assignment_date = $request->input('assignment_date');
        $status_id = $request->input('status_id');

        // jika menggunakan created tidak perlu memasukan created dan updated at dan harus menambahkan variable baru pada method post $fillable
        Assignment::create([
            'task_id' => $task_id,
            'employee_id' => $employee_id,
            'assignment_date' => $assignment_date,
            'status_id' => $status_id,
        ]);
        Session::flash('success_add', 'Data berhasil ditambahkan.');
        return redirect('assignment');
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
    public function edit(string $id_assignment)
    {
        $assignment = Assignment::where('id_assignment', $id_assignment)->first();
        $task = Task::all();
        $employee = Employee::all();
        $user = User::all();
        $status = Status::all();
        $view_data = [
            'assignment' => $assignment,
            'task' => $task,
            'employee' => $employee,
            'user' => $user,
            'status' => $status,
        ];
        return view('assignment.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_assignment)
    {
        $request->validate([
            'task_id' => 'required',
            'employee_id' => 'required',
            'assignment_date' => 'required',
            'status_id' => 'required',
        ]);

        $task_id = $request->input('task_id');
        $employee_id = $request->input('employee_id');
        $assignment_date = $request->input('assignment_date');
        $status_id = $request->input('status_id');

        Assignment::where('id_assignment', $id_assignment)
            ->update([
                'task_id' => $task_id,
                'employee_id' => $employee_id,
                'assignment_date' => $assignment_date,
                'status_id' => $status_id,
            ]); // sama seperti update ... where id = $id
        Session::flash('success_update', 'Data berhasil diubah.');

        return redirect("assignment");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_assignment)
    {
        Assignment::where('id_assignment', $id_assignment)->delete();
        Session::flash('success_destroy', 'Data berhasil dihapus.');

        return redirect("assignment");
    }
}
