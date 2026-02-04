@extends('layouts.admin_base')
@section('title')
      {{$title}}
@endsection

@section('content')
      
<div class="p-1 max-w-7xl mx-auto w-full">

<div class="flex items-end justify-between mb-8">
<div>
<h1 class="text-3xl font-bold text-[#111318] dark:text-white">Active Classes</h1>
<p class="text-[#606e8a] dark:text-[#94a3b8] mt-1">Manage and monitor 12 active pedagogical groups</p>
</div>
<div class="flex gap-2">
<button class="flex items-center gap-2 px-3 py-1.5 border border-[#f0f1f5] dark:border-[#2d3748] rounded-lg text-sm bg-white dark:bg-slate-800 hover:bg-background-light transition-colors">
<span class="material-symbols-outlined text-lg">filter_list</span>
                            Filter
                        </button>
<button class="flex items-center gap-2 px-3 py-1.5 border border-[#f0f1f5] dark:border-[#2d3748] rounded-lg text-sm bg-white dark:bg-slate-800 hover:bg-background-light transition-colors">
<span class="material-symbols-outlined text-lg">sort</span>
                            Newest
                        </button>
</div>
</div>
<!-- Grid of Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
<!-- Card 1 -->
@for ($i = 0; $i < count($classes); $i++)
    
<div class="group bg-white dark:bg-[#1a202c] rounded-xl border border-[#f0f1f5] dark:border-[#2d3748] p-5 hover:shadow-xl hover:-translate-y-1 transition-all">
<div class="flex justify-between items-start mb-4">
<div class="size-12 rounded-lg bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-primary">
<div class="material-symbols-outlined text-3xl overflow-hidden">
     <img src="../../assets/images/classess/{{$classes[$i]['photo']}}" class="rounded" alt="">
</div>
</div>
<span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400">Active</span>
</div>
<h3 class="text-lg font-bold mb-1"> {{$classes[$i]['class']}}</h3>
<p class="text-sm text-[#606e8a] dark:text-[#94a3b8] mb-4">Grade 12 - Science Stream</p>
<div class="space-y-3 mb-6">
<div class="flex items-center gap-3 text-sm">
<span class="material-symbols-outlined text-lg text-[#606e8a]">person</span>
<span>Dr. {{$classes[$i]['nom']}} {{$classes[$i]['prenom']}} </span>
</div>
<div class="flex items-center gap-3 text-sm">
<span class="material-symbols-outlined text-lg text-[#606e8a]">group</span>
<span>{{$number_user_class[$i]['count']}} Students enrolled</span>
</div>
</div>
<div class="flex items-center gap-2">
<button class="flex-1 bg-primary text-white py-2 rounded-lg text-sm font-bold hover:bg-primary/90 transition-colors">View Details</button>
<button class="p-2 rounded-lg border border-[#f0f1f5] dark:border-[#2d3748] hover:bg-background-light dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined text-lg">more_horiz</span>
</button>
</div>
</div>
@endfor

<a href="/formAddClass"><div class="group bg-dashed border-2 border-dashed border-[#f0f1f5] dark:border-[#2d3748] rounded-xl p-5 flex flex-col items-center justify-center gap-4 cursor-pointer hover:border-primary/50 hover:bg-primary/5 transition-all min-h-[300px]">
<div class="size-14 rounded-full bg-[#f0f1f5] dark:bg-slate-800 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined text-3xl">add</span>
</div>
<div class="text-center">
<p class="font-bold text-[#111318] dark:text-white">Create New Class</p>
<p class="text-xs text-[#606e8a] dark:text-[#94a3b8] mt-1">Assign teachers and schedule</p>
</div>
</div>
</a>

</div>

<div class="mt-12 flex items-center justify-between border-t border-[#f0f1f5] dark:border-[#2d3748] pt-6">
<p class="text-sm text-[#606e8a] dark:text-[#94a3b8]">Showing 5 of 12 classes</p>
<div class="flex gap-2">
<button class="px-3 py-1 text-sm border border-[#f0f1f5] dark:border-[#2d3748] rounded-lg opacity-50 cursor-not-allowed">Previous</button>
<button class="px-3 py-1 text-sm border border-primary text-primary bg-primary/5 rounded-lg">1</button>
<button class="px-3 py-1 text-sm border border-[#f0f1f5] dark:border-[#2d3748] rounded-lg hover:bg-background-light">2</button>
<button class="px-3 py-1 text-sm border border-[#f0f1f5] dark:border-[#2d3748] rounded-lg hover:bg-background-light">3</button>
<button class="px-3 py-1 text-sm border border-[#f0f1f5] dark:border-[#2d3748] rounded-lg hover:bg-background-light">Next</button>
</div>
</div>
</div>

@endsection