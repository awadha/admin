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
    public function index() {
        $employees = Employee::all();
       return view("dashboard.employees.index", compact("employees"));
    }
    public function show(Employee $employee){
        return view("dashboard.employees.show", compact("employee"));
    }
}
