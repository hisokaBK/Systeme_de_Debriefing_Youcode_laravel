@extends('layouts.admin_base')
@section('title')
        {{$title}}
@endsection

@section('content')
      
<div class="p-1 max-w-7xl mx-auto w-full">
<div class="flex items-end justify-between mb-8">
<div>
<h1 class="text-3xl font-bold text-[#111318] dark:text-white">All Sprints</h1>
<p class="text-[#606e8a] dark:text-[#94a3b8] mt-1">Organize curriculum into manageable pedagogical blocks</p>
</div>
<div class="flex gap-2">
<button class="flex items-center gap-2 px-3 py-1.5 border border-[#f0f1f5] dark:border-[#2d3748] rounded-lg text-sm bg-white dark:bg-slate-800 hover:bg-background-light transition-colors">
<span class="material-symbols-outlined text-lg">calendar_today</span>
                        This Year
</button>
<button class="flex items-center gap-2 px-3 py-1.5 border border-[#f0f1f5] dark:border-[#2d3748] rounded-lg text-sm bg-white dark:bg-slate-800 hover:bg-background-light transition-colors">
<span class="material-symbols-outlined text-lg">filter_list</span>
                        Status
                    </button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        
@foreach ($sprints as $print)
<div--- class="group bg-white dark:bg-[#1a202c] rounded-xl border border-[#f0f1f5] dark:border-[#2d3748] p-5 hover:shadow-xl hover:-translate-y-1 transition-all">
<div class="flex justify-between items-start mb-4">
<div class="size-14 rounded-lg bg-emerald-100 dark:bg-emerald-900/30  overflow-hidden">
<img class="h-[100%]" src="../../assets/images/sprints/{{$print->photo}}" alt="">
</div>
<span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#f0f1f5] text-[#606e8a] dark:bg-slate-800 dark:text-[#94a3b8]">Upcoming</span>
</div>

<h3 class="text-lg font-bold mb-1 leading-tight min-h-[63px]">{{$print->nom}}</h3>

<div class="space-y-3 mb-6">
<div class="flex items-center gap-3 text-sm">
<span class="material-symbols-outlined text-lg text-[#606e8a]">calendar_month</span>
<span class="font-medium">{{$print->date_debut}} <br> {{$print->date_fin}}</span>
</div>
</div>

<div class="flex items-center gap-2 pt-2">
<button class="flex-1 bg-primary text-white py-2 rounded-lg text-sm font-bold hover:bg-primary/90 transition-colors flex items-center justify-center gap-1">
<span class="material-symbols-outlined text-base">edit</span>
                            Modifier
</button>
<button class="p-2 rounded-lg border border-[#f0f1f5] dark:border-[#2d3748] hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</div--->

 @endforeach

<a href="/formAddSprint">
<div class="group bg-dashed border-2 border-dashed border-[#f0f1f5] dark:border-[#2d3748] rounded-xl p-5 flex flex-col items-center justify-center gap-4 cursor-pointer hover:border-primary/50 hover:bg-primary/5 transition-all min-h-[300px]">
<div class="size-14 rounded-full bg-[#f0f1f5] dark:bg-slate-800 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all">
<span class="material-symbols-outlined text-3xl">add</span>
</div>
<div class="text-center">
<p class="font-bold text-[#111318] dark:text-white">Create New Sprint</p>
<p class="text-xs text-[#606e8a] dark:text-[#94a3b8] mt-1">Define new dates and learning goals</p>
</div>
</div>
</a>
</div>
<div class="mt-12 flex items-center justify-between border-t border-[#f0f1f5] dark:border-[#2d3748] pt-6">
<p class="text-sm text-[#606e8a] dark:text-[#94a3b8]">{{$number_sprints}} sprints</p>
<div class="flex gap-2">
<button class="px-3 py-1 text-sm border border-[#f0f1f5] dark:border-[#2d3748] rounded-lg opacity-50 cursor-not-allowed">Previous</button>
<button class="px-3 py-1 text-sm border border-primary text-primary bg-primary/5 rounded-lg">1</button>
<button class="px-3 py-1 text-sm border border-[#f0f1f5] dark:border-[#2d3748] rounded-lg hover:bg-background-light dark:hover:bg-slate-800">2</button>
<button class="px-3 py-1 text-sm border border-[#f0f1f5] dark:border-[#2d3748] rounded-lg hover:bg-background-light dark:hover:bg-slate-800">Next</button>
</div>
</div>
</div>
@endsection