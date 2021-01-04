<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:admin");
    }
    public function index(Request $request) {
        $employees = Employee::when($request->search, function($q) use ($request) {

            return $q->where('name', 'like', '%' . $request->search . '%');


        })->latest()->paginate(5);
       return view("dashboard.employees.index", compact("employees"));
    }
    public function show(Employee $employee){
        return view("dashboard.employees.show", compact("employee"));
    }
}
