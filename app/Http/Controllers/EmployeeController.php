<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::latest()->paginate(5);
        return view('employees.index', compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Employee::create($input);
        return redirect('employees')->with('flash_message', 'Employee Added!');  
    }

    public function show($id)
    {
        $employees = Employee::find($id);
        return view('employees.show')->with('employees', $employees);
    }
}
