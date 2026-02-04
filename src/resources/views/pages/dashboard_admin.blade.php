@extends('layouts.admin_base')
@section('title')
      {{$title}}
@endsection
    
@section('content')
<div>
<h2 class="text-2xl font-bold tracking-tight">System Overview</h2>
<p class="text-gray-500 dark:text-gray-400">Monitoring real-time pedagogical performance across all cohorts.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<p class="text-gray-500 text-sm font-medium">Total Students</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">groups</span>
</div>
<p class="text-3xl font-bold">1,284</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-green-500 text-sm">trending_up</span>
<span class="text-green-500 text-xs font-semibold">+12% this month</span>
</div>
</div>
<div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<p class="text-gray-500 text-sm font-medium">Active Classes</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">school</span>
</div>
<p class="text-3xl font-bold">42</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-green-500 text-sm">trending_up</span>
<span class="text-green-500 text-xs font-semibold">+2 new cohorts</span>
</div>
</div>
<div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<p class="text-gray-500 text-sm font-medium">Pending Briefs</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">assignment_late</span>
</div>
<p class="text-3xl font-bold">18</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-orange-500 text-sm">priority_high</span>
<span class="text-orange-500 text-xs font-semibold">Requires attention</span>
</div>
</div>
<div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm flex flex-col gap-2">
<div class="flex justify-between items-start">
<p class="text-gray-500 text-sm font-medium">Competencies Tracked</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">task_alt</span>
</div>
<p class="text-3xl font-bold">256</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-primary text-sm">verified</span>
<span class="text-primary text-xs font-semibold">Across 12 sectors</span>
</div>
</div>
</div>
<div class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-800 shadow-sm overflow-hidden">
<div class="px-6 py-5 border-b border-gray-200 dark:border-gray-800 flex justify-between items-center">
<h3 class="text-lg font-bold">Recent Activity</h3>
<button class="text-sm text-primary font-medium hover:underline">View all reports</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-background-light dark:bg-gray-800/50">
<th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Date</th>
<th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">User</th>
<th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Action</th>
<th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
<th class="px-6 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-200 dark:divide-gray-800">
<tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
<td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Oct 24, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-xs font-bold text-blue-600">JD</div>
<span class="text-sm font-medium">Jane Doe</span>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">Submitted Sprint 4 Evaluation</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Review Pending</span>
</td>
<td class="px-6 py-4">
<button class="text-primary hover:text-blue-700 text-sm font-semibold">View Details</button>
</td>
</tr>
<tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
<td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Oct 23, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center text-xs font-bold text-purple-600">ML</div>
<span class="text-sm font-medium">Marc Lucas</span>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">Competency Validated: React JS</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Completed</span>
</td>
<td class="px-6 py-4">
<button class="text-primary hover:text-blue-700 text-sm font-semibold">View Details</button>
</td>
</tr>
<tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
<td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Oct 23, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center text-xs font-bold text-orange-600">SM</div>
<span class="text-sm font-medium">Sarah Miller</span>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">New Class Registered: UI/UX 2024</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Active</span>
</td>
<td class="px-6 py-4">
<button class="text-primary hover:text-blue-700 text-sm font-semibold">View Details</button>
</td>
</tr>
<tr class="hover:bg-gray-50 dark:hover:bg-gray-800/30 transition-colors">
<td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Oct 22, 2023</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-xs font-bold text-red-600">RK</div>
<span class="text-sm font-medium">Robert King</span>
</div>
</td>
<td class="px-6 py-4 text-sm font-medium">Brief Deadline Missed</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Overdue</span>
</td>
<td class="px-6 py-4">
<button class="text-primary hover:text-blue-700 text-sm font-semibold">Notify User</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Secondary Content Grid (Placeholder for extra dashboard data) -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pb-8">
<div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800">
<h4 class="font-bold mb-4">Class Distribution</h4>
<div class="flex flex-col gap-4">
<div class="space-y-1">
<div class="flex justify-between text-xs font-medium">
<span>Fullstack Development</span>
<span>78%</span>
</div>
<div class="w-full bg-gray-100 rounded-full h-2">
<div class="bg-primary h-2 rounded-full" style="width: 78%"></div>
</div>
</div>
<div class="space-y-1">
<div class="flex justify-between text-xs font-medium">
<span>Data Science</span>
<span>62%</span>
</div>
<div class="w-full bg-gray-100 rounded-full h-2">
<div class="bg-primary h-2 rounded-full" style="width: 62%"></div>
</div>
</div>
<div class="space-y-1">
<div class="flex justify-between text-xs font-medium">
<span>Digital Marketing</span>
<span>45%</span>
</div>
<div class="w-full bg-gray-100 rounded-full h-2">
<div class="bg-primary h-2 rounded-full" style="width: 45%"></div>
</div>
</div>
</div>
</div>
<div class="bg-primary/5 dark:bg-primary/10 p-6 rounded-xl border border-primary/20 flex flex-col items-center justify-center text-center">
<div class="w-16 h-16 bg-primary/20 rounded-full flex items-center justify-center text-primary mb-4">
<span class="material-symbols-outlined text-4xl">add_chart</span>
</div>
<h4 class="font-bold text-[#111318] dark:text-white">Create New Report</h4>
<p class="text-sm text-gray-600 dark:text-gray-400 mt-2 mb-4">Generate custom pedagogical statistics for stakeholders.</p>
<button class="bg-primary text-white px-6 py-2 rounded-lg text-sm font-bold shadow-lg shadow-primary/30 hover:bg-blue-700 transition-all">
                            Open Builder
                        </button>
</div>
</div>
@endsection