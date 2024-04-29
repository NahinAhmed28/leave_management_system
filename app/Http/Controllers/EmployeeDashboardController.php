<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeDashboardController extends Controller
{
    public function index()
    {
        // Fetch leave history for the logged-in user
        $leaveRequests = auth()->user()->leaveRequests()->latest()->get();
        return view('employee.dashboard', compact('leaveRequests'));
    }
}
