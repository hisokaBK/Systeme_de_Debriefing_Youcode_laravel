<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>New Class Form | PedagoApp</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts: Lexend -->
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0d59f2",
                        "background-light": "#f5f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Lexend', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-[#fafafa] dark:bg-background-dark min-h-screen text-[#111318] dark:text-white">
<!-- Top Navigation Bar -->
<header class="w-full bg-white dark:bg-background-dark border-b border-solid border-[#dbdfe6] dark:border-gray-800 px-6 py-3 sticky top-0 z-50">
<div class="max-w-7xl mx-auto flex items-center justify-between">
<div class="flex w-[100%] items-center justify-between gap-4 text-text-main dark:text-white">
  <div class="flex items-center  gap-4 text-text-main dark:text-white"><a href="/admin_sprints"> <span class="material-symbols-outlined text-gray-400">arrow_back</span></a>
<div class="size-8 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
</svg>
</div>
<h2 class="text-lg font-bold leading-tight tracking-tight"> Management Classes</h2>
</div>
 @if(isset($_SESSION['error']) )
               <p class='text-red-500 border border-red-400 rounded-lg py-2 px-4'>{{$_SESSION['error']}}</p> 
  @endif
</div>
<div class="flex items-center gap-8">

</div>
</div>
</header><!-- Main Content -->
<main class="max-w-[960px] mx-auto px-4 py-8 md:py-12">
<!-- Page Heading -->
<div class="mb-8">
<h1 class="text-[#111318] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Create New Class</h1>
<p class="text-[#606e8a] dark:text-gray-400 text-lg font-normal leading-normal mt-2">Set up a new educational cohort, assign teachers, and enroll students.</p>
</div>

<form action="/admin_classes" method="POST" enctype="multipart/form-data" >
<div class="space-y-6">
<!-- Form Card 1: Basic Information -->
<div class="bg-white dark:bg-gray-900 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.05)] border border-gray-100 dark:border-gray-800 overflow-hidden">
<div class="p-6 md:p-8 border-b border-gray-100 dark:border-gray-800">
<h3 class="text-xl font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">info</span>
                        Class Details
                    </h3>
</div>
<div class="p-6 md:p-8 space-y-8">
<!-- Class Name -->
<div class="max-w-xl">
<label class="block mb-2 text-sm font-semibold text-[#111318] dark:text-gray-200">Class Name</label>
<input class="w-full rounded-lg border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 h-14 px-4 text-base focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" placeholder="e.g. Advanced Mathematics 101" type="text" name="classe_name"/>
</div>
<!-- Class Photo Upload -->
<div>
<label class="block mb-2 text-sm font-semibold text-[#111318] dark:text-gray-200">Class Photo</label>
<div class="flex flex-col items-center gap-6 rounded-xl border-2 border-dashed border-[#dbdfe6] dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/30 px-6 py-12 transition-colors hover:border-primary group">
<div class="flex flex-col items-center gap-3 text-center">
<div class="size-16 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-4xl">cloud_upload</span>
</div>
<div>
<p class="text-[#111318] dark:text-white text-lg font-bold">Upload a cover image</p>
<p class="text-[#606e8a] dark:text-gray-400 text-sm">PNG, JPG or GIF up to 10MB</p>
</div>
</div>
<input
        type="file"
        name="photo"
        accept="image/png, image/jpeg"
        class="cursor-pointer rounded-lg h-10 px-4 py-2
               bg-[#f0f1f5] dark:bg-gray-700
               text-text-main dark:text-white text-sm font-bold
               hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors border-0"
      />
</div>
</div>
</div>
</div>
<!-- Form Card 2: Trainer Selection -->
<div class="bg-white dark:bg-gray-900 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.05)] border border-gray-100 dark:border-gray-800 overflow-hidden">
<div class="p-6 md:p-8 border-b border-gray-100 dark:border-gray-800">
<h3 class="text-xl font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">person_check</span>
                        Lead Trainer
                    </h3>
</div>
<div class="p-6 md:p-8">
<div class="max-w-xl">
<label class="block mb-2 text-sm font-semibold text-[#111318] dark:text-gray-200">Select Trainer</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">person_search</span>
<select name="teacher_id" class="w-full appearance-none rounded-lg border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 h-14 pl-12 pr-4 text-base focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" name='teacher_id'>
<option disabled="" selected="" value="">Search for a teacher...</option>
@foreach ($teachers as $teacher)
<option value="{{$teacher->id}}">{{$teacher->prenom}} {{$teacher->nom}}</option>
@endforeach
</select>
</div>
<p class="mt-2 text-xs text-[#606e8a] dark:text-gray-500 italic">This trainer will have full administrative access to this class's grades and curriculum.</p>
</div>
</div>
</div>
<!-- Form Card 3: Student Enrollment (Dual List) -->
<div class="bg-white dark:bg-gray-900 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.05)] border border-gray-100 dark:border-gray-800 overflow-hidden">
<div class="p-6 md:p-8 border-b border-gray-100 dark:border-gray-800 flex flex-wrap items-center justify-between gap-4">
<h3 class="text-xl font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">group_add</span>
                        Student Enrollment
                    </h3>
<div class="flex items-center gap-2 bg-primary/10 px-3 py-1 rounded-full">
<span class="text-primary font-bold text-sm">12 Students Selected</span>
</div>
</div>
<div class="p-6 md:p-8">
<div class="grid grid-cols-1 gap-8">
<!-- Left side: Available -->
<div class="flex flex-col gap-4">
<div class="flex items-center justify-between">
<h4 class="font-bold text-[#111318] dark:text-white">Available Students</h4>
<span class="text-xs text-[#606e8a]">156 Total</span>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400">search</span>
<input class="w-full h-10 pl-9 rounded-lg border-gray-200 dark:border-gray-700 text-sm focus:ring-primary/20 focus:border-primary" placeholder="Filter by name..." type="text"/>
</div>

<div class="h-64 overflow-y-auto border border-gray-100 dark:border-gray-800 rounded-lg p-2 space-y-1 bg-gray-50/50 dark:bg-gray-800/50">

@foreach($apprenants as $apprenant)
<div class="flex items-center justify-between p-2 rounded-lg hover:bg-white dark:hover:bg-gray-700 group cursor-pointer transition-colors border border-transparent hover:border-gray-200 dark:hover:border-gray-600">
<div class="flex items-center gap-3">
    <div class="size-8 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 text-xs font-bold overflow-hidden"><img src="../../assets/images/users/{{$apprenant->photo}}" alt="">
    </div>
    <span class="text-sm font-medium">{{$apprenant->prenom}} {{$apprenant->nom}}</span>
</div>
<input  class="hidden" value="{{$apprenant->id}}" type="checkbox" 
    name="apprenant_id[]" onchange="toggleIcon(this)" id="{{$apprenant->id}}">
<label for="{{$apprenant->id}}" class="cursor-pointer">
    <span
      class="material-symbols-outlined text-primary"
      id=""
    >
      add_circle
    </span>
  </label>
</div>
@endforeach
</div>
</div>


</div>
</div>
</div>
<!-- Action Bar -->
<div class="flex items-center justify-end gap-4 pt-6">
<button class="px-8 py-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-[#111318] dark:text-white font-bold rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700 transition-all shadow-sm">
                    Cancel
                </button>
<button class="px-10 py-4 bg-primary text-white font-bold rounded-xl hover:bg-blue-700 transition-all shadow-[0_4px_14px_rgba(13,89,242,0.39)] flex items-center gap-2">
<span class="material-symbols-outlined">check_circle</span>
                    Create Class
                </button>
</div>
</div>
</form>
</main>
<footer class="py-12 text-center text-[#606e8a] text-sm">
<p>       
     © 2026 bilal bakessou
</p>
</footer>
<script>

function toggleIcon(checkbox) {
      const icon = checkbox.nextElementSibling.firstElementChild;
    
      if (checkbox.checked) {
        icon.textContent = 'check_circle';
      } else {
        icon.textContent = 'add_circle';
      }
}

</script>
</body></html>