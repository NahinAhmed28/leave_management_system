<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('leave_request_form');

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
        // Validate the request data
        $request->validate([
            'type' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'required',
        ]);

        // Create new leave request
        LeaveRequest::create([
            'user_id' => Auth::id(),
            'type' => $request->type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reason' => $request->reason,
        ]);

        return redirect()->route('employee.dashboard')->with('success', 'Leave request submitted successfully!');
    }
    // Display leave history for the logged-in user
    public function history()
    {
        $leaveRequests = LeaveRequest::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('leave_history', compact('leaveRequests'));
    }

    // Admin: List all leave requests
    public function adminIndex()
    {
        $leaveRequests = LeaveRequest::orderBy('created_at', 'desc')->get();
        return view('admin.leave_requests.index', compact('leaveRequests'));
    }

    // Admin: Update leave request status
    public function adminUpdateStatus(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        // Find the leave request
        $leaveRequest = LeaveRequest::findOrFail($id);

        // Update status and admin_id
        $leaveRequest->status = $request->status;
        $leaveRequest->admin_id = Auth::id();
        $leaveRequest->save();

        return redirect()->route('admin.leave_requests.index')->with('success', 'Leave request status updated successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(LeaveRequest $leaveRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LeaveRequest $leaveRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LeaveRequest $leaveRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LeaveRequest $leaveRequest)
    {
        //
    }
}
