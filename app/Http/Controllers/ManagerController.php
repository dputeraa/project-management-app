<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::whereHas('user', function ($query) {
            $query->where('role', 'manager');
        })->get();
        $view_data = [
            'employees' => $employees,
        ];
        return view('manager.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        $positions = Position::all();
        $users = User::all();
        return view('manager.create', compact('employees', 'positions', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'position_id' => 'required'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $position_id = $request->input('position_id');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role' => 'manager'
        ]);

        Employee::create([
            'user_id' => $user->id,
            'position_id' => $position_id,
        ]);

        Session::flash('success_add', 'Data berhasil ditambahkan.');
        return redirect('manager');
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
    public function edit(string $id_employee)
    {
        $employee = Employee::where('id_employee', $id_employee) // ->where('id', '=', $id) tanpa menuliskan "=" laravel menganggapnya menggunakan operator sama dengan "="
            ->first();
        $position = Position::all();
        $user = User::all();
        $view_data = [
            'employee' => $employee,
            'position' => $position,
            'user' => $user,
        ];
        return view('manager.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_employee)
    {
        $employee = Employee::where('id_employee', $id_employee)->first();
        // $employee = Employee::find($id_employee);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'position_id' => 'required'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $position_id = $request->input('position_id');

        $user = User::find($employee->user_id);
        if ($user) {
            $user->fill([
                'email' => $email,
                'password' => $password,
                'name' => $name
            ]);
            $user->save();
        }

        Employee::where('id_employee', $id_employee)
            ->update([
                'position_id' => $position_id,
            ]); // sama seperti update ... where id = $id
        Session::flash('success_update', 'Data berhasil diubah.');

        return redirect("manager");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_employee)
    {
        $employee = Employee::where('id_employee', $id_employee);
        $employee->delete();
        // User::find($employee->user_id)->delete();

        Session::flash('success_destroy', 'Data berhasil dihapus.');

        return redirect("manager");
    }
}
