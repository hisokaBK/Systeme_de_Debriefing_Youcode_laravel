@extends('layouts.admin_base')
@section('title')
      {{$title}}
@endsection
@section('content')
<div class="max-w-6xl mx-auto flex flex-col gap-6">
<div class="flex flex-wrap justify-between items-end gap-3 px-4">
<div class="flex min-w-72 flex-col gap-2">
<p class="text-[#111318] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">User Management</p>
<p class="text-[#606e8a] text-base font-normal leading-normal">Manage access for admins, teachers, and students.</p>
</div>
<div class="flex gap-3">
<a href="/formAddUser"><button class="flex items-center gap-2 cursor-pointer items-center justify-center rounded-xl h-11 px-5 bg-primary text-white text-sm font-bold hover:bg-blue-600 transition-colors shadow-lg shadow-primary/20">
<span class="material-symbols-outlined">person_add</span>
<span>Create User</span>
</button></a>
</div>
</div>
<!-- User Table -->
<div class="px-4 py-3">
<div class="overflow-hidden rounded-xl border border-[#dbdfe6] dark:border-gray-800 bg-white dark:bg-background-dark shadow-sm">
<div class="overflow-x-auto">
<table class="w-full border-collapse">
<thead>
<tr class="bg-gray-50 dark:bg-gray-900/50 border-b border-[#dbdfe6] dark:border-gray-800">
<th class="px-6 py-4 text-left text-[#111318] dark:text-white text-sm font-bold">Name</th>
<th class="px-6 py-4 text-left text-[#111318] dark:text-white text-sm font-bold">Email</th>
<th class="px-6 py-4 text-left text-[#111318] dark:text-white text-sm font-bold">Role</th>
<th class="px-6 py-4 text-center text-[#606e8a] text-sm font-bold">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-[#dbdfe6] dark:divide-gray-800">
<!-- Row 1 -->
@foreach ($users as $user)
<tr class="hover:bg-gray-50/80 dark:hover:bg-gray-800/40 transition-colors">
<td class="px-6 py-4 whitespace-nowrap">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-blue-100 flex items-center justify-center text-primary font-bold text-sm overflow-hidden"><img src="../../assets/images/users/{{$user->photo}}" alt=""></div>
<span class="text-[#111318] dark:text-white text-sm font-medium">{{$user->prenom}} {{$user->nom}}</span>
</div>
</td>
<td class="px-6 py-4 text-[#606e8a] text-sm">{{$user->email}}</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-3 py-1 rounded-full @if($user->role=='ADMIN')bg-blue-100 text-primary @elseif($user->role=='TEACHER') bg-emerald-100 text-emerald-600 @else bg-amber-100 text-amber-600 @endif  text-xs font-bold">{{$user->role}}</span>
</td>
<td class="px-6 py-4 text-center">
<div class="flex justify-center gap-2">
<button class="p-2 text-[#606e8a] hover:text-primary transition-colors"><span class="material-symbols-outlined text-[20px]">edit</span></button>
<button class="p-2 text-[#606e8a] hover:text-red-500 transition-colors"><span class="material-symbols-outlined text-[20px]">delete</span></button>
</div>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
<div class="px-6 py-4 border-t border-[#dbdfe6] dark:border-gray-800 flex items-center justify-between">
<p class="text-xs text-[#606e8a]"> {{$number_users}} users</p>
<div class="flex gap-2">
<button class="px-3 py-1 text-xs font-bold text-[#111318] dark:text-white border border-[#dbdfe6] dark:border-gray-800 rounded-lg bg-white dark:bg-gray-900">Previous</button>
<button class="px-3 py-1 text-xs font-bold text-white border border-primary rounded-lg bg-primary">Next</button>
</div>
</div>
</div>
</div>
</div>
@endsection
