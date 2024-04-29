<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
<h1>Welcome to the Admin Dashboard</h1>

<!-- Leave applications list -->
<h2>Leave Applications</h2>
<ul>
    @foreach($leaveRequests as $leaveRequest)
        <li>User: {{ $leaveRequest->user->name }}, Type: {{ $leaveRequest->type }}, Start Date: {{ $leaveRequest->start_date }}, End Date: {{ $leaveRequest->end_date }}, Status: {{ $leaveRequest->status }}</li>
    @endforeach
</ul>
</body>
</html>
