@extends('layouts.admin_base')
@section('title')
      {{$title}}
@endsection


@section('content')
<div class="p-1 max-w-7xl mx-auto w-full">
<div class="flex items-end justify-between mb-8">
<div>
<h1 class="text-3xl font-bold text-[#111318] dark:text-white">Gestion des Compétences</h1>
<p class="text-[#606e8a] dark:text-[#94a3b8] mt-1">Définissez et organisez les objectifs pédagogiques du programme</p>
</div>
<div class="flex gap-2">
<a href="/formAddCompetencies" class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-xl text-sm font-bold transition-all shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-lg">add</span>
<span>Ajouter une Compétence</span>
</a>
</div>
</div>

<div class="bg-white dark:bg-[#1a202c] border border-[#f0f1f5] dark:border-[#2d3748] rounded-xl overflow-hidden shadow-sm mt-10">

<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-[#f9fafb] dark:bg-slate-800/50 border-b border-[#f0f1f5] dark:border-[#2d3748]">
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#606e8a] dark:text-[#94a3b8]">Nom de la Compétence</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#606e8a] dark:text-[#94a3b8]">Code </th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#606e8a] dark:text-[#94a3b8]">Description</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#606e8a] dark:text-[#94a3b8] text-right">Actions</th>
</tr>
</thead>

<tbody class="divide-y divide-[#f0f1f5] dark:divide-[#2d3748]">

@foreach ($competences as $competence)
     <tr class="hover:bg-gray-50/50 dark:hover:bg-slate-800/50 transition-colors">
     <td class="px-6 py-4">
     <div class="flex items-center gap-3">
     <div class="size-8 rounded bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-primary">
     <span class="material-symbols-outlined text-xl">code</span>
     </div>
     <span class="font-semibold text-sm">{{$competence->nom}}</span>
     </div>
     </td>
     <td class="px-6 py-4">
     <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-400">{{$competence->code}}</span>
     </td>
     <td class="px-6 py-4">
     <p class="text-sm text-[#606e8a] dark:text-[#94a3b8] max-w-xs truncate">{{$competence->description}}</p>
     </td>
     <td class="px-6 py-4 text-right">
     <div class="flex items-center justify-end gap-2">
     <button class="flex items-center gap-1.5 px-3 py-1.5 bg-primary text-white text-xs font-bold rounded-lg hover:bg-primary/90 transition-all">
     <span class="material-symbols-outlined text-base">edit</span>
                                             Modifier
                                         </button>
     <button class="flex items-center gap-1.5 px-3 py-1.5 bg-red-500 text-white text-xs font-bold rounded-lg hover:bg-red-600 transition-all">
     <span class="material-symbols-outlined text-base">delete</span>
                                             Supprimer
                                         </button>
     </div>
     </td>
  </tr>
@endforeach
</tbody>
</table>
</div>
<div class="mt-8 flex items-center justify-between">
<p class="text-sm text-[#606e8a] dark:text-[#94a3b8]">Number compétences  {{$num_competences}}</p>
</div>
</div>
@endsection