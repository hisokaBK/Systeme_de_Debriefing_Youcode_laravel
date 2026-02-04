<!DOCTYPE html>
<html class="light" lang="en"><head>
   <meta charset="utf-8"/>
   <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
   <title>@yield('title')</title>
   <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
   <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
   <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
   <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
   <script id="tailwind-config">
           tailwind.config = {
               darkMode: "class",
               theme: {
                   extend: {
                       colors: {
                           "primary": "#0d59f2",
                           "background-light": "#fafafa", 
                           "background-dark": "#101622",
                           "secondary-light": "#f2f2f2",
                       },
                       fontFamily: {
                           "display": ["Lexend"]
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
           .active-nav {
               background-color: #0d59f2;
               color: white !important;
           }
           .active-nav span {
               color: white !important;
           }
       </style>
   </head>
   <body class="bg-background-light dark:bg-background-dark text-[#111318] dark:text-white min-h-screen">
   <div class="flex h-screen overflow-hidden">
   <aside class="w-64 bg-secondary-light dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 flex flex-col">
   <div class="p-6 flex items-center gap-3">
   <div class="bg-primary rounded-lg p-2 flex items-center justify-center text-white">
<span class="material-symbols-outlined">admin_panel_settings</span>
   </div>
   <div>
   <h1 class="text-base font-bold leading-tight">Admin Panel</h1>
   <p class="text-xs text-gray-500 dark:text-gray-400">Pedagogical Mgmt</p>
   </div>
   </div>
   <nav class="flex-1 px-4 py-4 space-y-1 overflow-y-auto">
   <a class="flex  items-center gap-3 px-3 py-2 rounded-lg {{$_SERVER['REDIRECT_URL'] == '/dashboard_admin'?'active-nav' : ' hover:bg-gray-200 dark:hover:bg-gray-800'}}  transition-colors" href="/dashboard_admin">
   <span class="material-symbols-outlined">dashboard</span>
   <span class="text-sm font-medium">Dashboard</span>
   </a>
   <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 {{$_SERVER['REDIRECT_URL'] == '/admin_users'?'active-nav' : ' hover:bg-gray-200 dark:hover:bg-gray-800'}}  transition-colors" href="/admin_users">
   <span class="material-symbols-outlined">group</span>
   <span class="text-sm font-medium">Users</span>
   </a>
   <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-400  {{$_SERVER['REDIRECT_URL'] == '/admin_classes'?'active-nav' : ' hover:bg-gray-200 dark:hover:bg-gray-800'}} transition-colors" href="/admin_classes">
   <span class="material-symbols-outlined">class</span>
   <span class="text-sm font-medium">Classes</span>
   </a>
   <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-400  {{$_SERVER['REDIRECT_URL'] == '/admin_sprints'?'active-nav' : ' hover:bg-gray-200 dark:hover:bg-gray-800'}} transition-colors" href="/admin_sprints">
   <span class="material-symbols-outlined">rocket_launch</span>
   <span class="text-sm font-medium">Sprints</span>
   </a>
   <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-400  {{$_SERVER['REDIRECT_URL'] == '/admin_competencies'?'active-nav' : ' hover:bg-gray-200 dark:hover:bg-gray-800'}} transition-colors" href="/admin_competencies">
   <span class="material-symbols-outlined">psychology</span>
   <span class="text-sm font-medium">Competencies</span>
   </a>
   <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-400  {{$_SERVER['REDIRECT_URL'] == '/Statistics'?'active-nav' : ' hover:bg-gray-200 dark:hover:bg-gray-800'}} transition-colors" href="/Statistics">
   <span class="material-symbols-outlined">bar_chart</span>
   <span class="text-sm font-medium">Statistics</span>
   </a>
   </nav>
   <div class="p-4 border-t border-gray-200 dark:border-gray-800">
   <div class="flex items-center gap-3 p-2">
   <div class="w-10 h-10 rounded-full bg-cover bg-center" data-alt="Admin user profile headshot" style="background-image: url('../../assets/images/users/{{$_SESSION['user']['photo']}}');"></div>
   <div class="flex-1 overflow-hidden">
   <p class="text-sm font-semibold truncate">{{$_SESSION['user']['prenom']}} {{$_SESSION['user']['nom']}}</p>
   <p class="text-xs text-gray-500 truncate">System Admin</p>
   </div>
   <a href="/logout" class="text-gray-400 hover:text-gray-600">
   <span class="material-symbols-outlined">logout</span>
   </a>
   </div>
   </div>
   </aside>
   <main class="flex-1 flex flex-col overflow-hidden">
   <header class="h-16 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800 px-8 flex items-center justify-between z-10">
   <div class="flex items-center gap-4">
   <div class="flex items-center text-sm font-medium text-gray-500">
   <span class="hover:text-primary cursor-pointer">Admin</span>
   <span class="material-symbols-outlined mx-1 text-base">chevron_right</span>
   <span class="text-[#111318] dark:text-white font-semibold">
    @switch($_SERVER['REDIRECT_URL'])
        @case('/Statistics')
            Statistics
            @break
        @case('/Classes')
            Classes
            @break
        @case('/admin_competencies')
            Competencies
            @break            
        @case('/admin_sprints')
              Sprints
            @break
        @case('/admin_users')
              Users
            @break
        @case('/admin_classes')
              Classes
            @break
        @default
            Dashboard
    @endswitch
   </span>
   </div>
   </div>
   <div class="flex items-center gap-6">
   <div class="flex items-center gap-3">
   <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-background-light dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-gray-200">
   <span class="material-symbols-outlined">notifications</span>
   </button>
   <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-background-light dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-gray-200">
   <span class="material-symbols-outlined">settings</span>
   </button>
   </div>
   </div>
   </header>
   
   <div class="flex-1 overflow-y-auto p-8 space-y-8">
         @yield('content')
   </div>

   </main>
   </div>
   </body>
</html>

