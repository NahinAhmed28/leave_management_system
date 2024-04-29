<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Fetch all leave requests
        $leaveRequests = LeaveRequest::with('user')->latest()->get();
        return view('admin.dashboard', compact('leaveRequests'));
    }
}
