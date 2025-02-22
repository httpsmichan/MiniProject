@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Welcome to IT Services Dashboard</h1>
    
    <!-- Service Status Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
        <div class="p-4 border rounded-lg bg-blue-50">
            <h3 class="text-xl font-semibold">Service 1</h3>
            <p>Status: <span class="text-green-500">Active</span></p>
        </div>
        <div class="p-4 border rounded-lg bg-yellow-50">
            <h3 class="text-xl font-semibold">Service 2</h3>
            <p>Status: <span class="text-orange-500">Maintenance</span></p>
        </div>
        <div class="p-4 border rounded-lg bg-red-50">
            <h3 class="text-xl font-semibold">Service 3</h3>
            <p>Status: <span class="text-red-500">Down</span></p>
        </div>
    </div>

    <!-- Analytics Section -->
    <div class="bg-white p-4 rounded-lg shadow-lg mb-6">
        <h3 class="text-xl font-semibold mb-2">System Usage Analytics</h3>
        <p>CPU Usage: 75%</p>
        <p>Memory Usage: 65%</p>
        <p>Disk Usage: 80%</p>
    </div>

    <!-- Recent Activities Section -->
    <div class="bg-white p-4 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold mb-2">Recent Activities</h3>
        <ul class="list-disc pl-5">
            <li>Service 1 restarted by admin at 12:30 PM</li>
            <li>Service 2 scheduled for maintenance at 1:00 PM</li>
            <li>Service 3 down due to network issue at 2:15 PM</li>
        </ul>
    </div>
@endsection
