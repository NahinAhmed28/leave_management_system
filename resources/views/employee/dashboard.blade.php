<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
</head>
<body>
<h1>Welcome to the Employee Dashboard</h1>

<!-- Leave application form -->
<h2>Apply for Leave</h2>
<form action="{{ route('leave_requests.store') }}" method="POST">
    @csrf
    <label for="type">Type of Leave:</label>
    <select name="type" id="type">
        <option value="Casual">Casual Leave</option>
        <option value="Sick">Sick Leave</option>
        <option value="Emergency">Emergency Leave</option>
    </select><br><br>
    <label for="start_date">Start Date:</label>
    <input type="date" id="start_date" name="start_date"><br><br>
    <label for="end_date">End Date:</label>
    <input type="date" id="end_date" name="end_date"><br><br>
    <label for="reason">Reason:</label><br>
    <textarea id="reason" name="reason" rows="4" cols="50"></textarea><br><br>
    <button type="submit">Submit</button>
</form>

<!-- Leave history -->
<h2>Leave History</h2>
<ul>
    @foreach($leaveRequests as $leaveRequest)
        <li>Type: {{ $leaveRequest->type }}, Start Date: {{ $leaveRequest->start_date }}, End Date: {{ $leaveRequest->end_date }}, Status: {{ $leaveRequest->status }}</li>
    @endforeach
</ul>
</body>
</html>
