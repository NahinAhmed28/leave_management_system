<?php

namespace Database\Seeders;

use App\Models\LeaveRequest;
use Illuminate\Database\Seeder;

class LeaveRequestSeeder extends Seeder
{
    public function run()
    {
        // Example leave requests
        LeaveRequest::create([
            'user_id' => 1,
            'type' => 'Casual',
            'start_date' => now()->subDays(2),
            'end_date' => now()->subDays(1),
            'reason' => 'Vacation',
            'status' => 'approved',
        ]);

        // Add more leave requests as needed
    }
}
