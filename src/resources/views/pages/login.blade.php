<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{$title}}</title>
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
        .login-card {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-[#fafafa] dark:bg-background-dark min-h-screen flex flex-col">
<header class="w-full px-6 py-4 flex items-center justify-between bg-white/50 dark:bg-background-dark/50 backdrop-blur-sm border-b border-gray-100 dark:border-gray-800">
<div class="flex items-center gap-2">
<div class="bg-primary p-1.5 rounded-lg text-white">
<span class="material-symbols-outlined text-xl block">school</span>
</div>
<span class="font-bold text-gray-900 dark:text-white tracking-tight">SDP</span>
</div>
      @if(isset($_SESSION['error']))
          <p class="text-red-500 border border-red-400 rounded-lg py-2 px-4">
              {{ $_SESSION['error'] }}
          </p>
      @endif
</header>
<main class="flex-1 flex items-center justify-center p-6">
<div class="w-full max-w-[440px] animate-in fade-in slide-in-from-bottom-4 duration-700">
<div class="bg-white dark:bg-[#1a2130] rounded-xl p-8 login-card border border-gray-100 dark:border-gray-800">
<div class="text-center mb-10">
<div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-4">
<span class="material-symbols-outlined text-3xl">account_circle</span>
</div>
<h1 class="text-2xl font-bold text-gray-900 dark:text-white tracking-tight mb-2">
                        Système de Débriefing Pédagogique
                    </h1>
<p class="text-gray-500 dark:text-gray-400 text-sm">
                        Espace sécurisé pour administrateurs, enseignants et étudiants
                    </p>
</div>

<form action="/login_check" class="space-y-5" method="POST">


<div class="flex flex-col gap-2">
<label class="text-sm font-medium text-gray-700 dark:text-gray-300 px-1" for="email">
                            Adresse e-mail
                        </label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined text-xl">mail</span>
</div>
<input class="block w-full pl-11 pr-4 h-12 bg-gray-50 dark:bg-gray-800/50 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all placeholder:text-gray-400 dark:text-white" id="email" name="email" placeholder="nom@etablissement.fr" required="" type="email"/>
</div>
</div>


<div class="flex flex-col gap-2">
<div class="flex items-center justify-between px-1">
<label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="password">
                                Mot de passe
                            </label>
<a class="text-xs text-primary hover:underline font-medium" href="#">
                                Oublié ?
                            </a>
</div>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined text-xl">lock</span>
</div>
<input class="block w-full pl-11 pr-12 h-12 bg-gray-50 dark:bg-gray-800/50 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all placeholder:text-gray-400 dark:text-white" id="password" name="password" placeholder="••••••••" required="" type="password"/>
<button class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 dark:hover:text-gray-200" type="button">
</button>
</div>
</div>

<div class="flex items-center px-1">
<label class="flex items-center cursor-pointer group">
<input class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary cursor-pointer" type="checkbox"/>
<span class="ml-2 text-sm text-gray-600 dark:text-gray-400 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors">Rester connecté</span>
</label>
</div>

<button class="w-full bg-primary hover:bg-primary/90 text-white font-semibold h-12 rounded-lg transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2 mt-4" type="submit">
                        Se connecter
    <span class="material-symbols-outlined text-lg">arrow_forward</span>
</button>

</form>


<div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-800">
<div class="flex items-center justify-center gap-4 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all">
<span class="material-symbols-outlined text-2xl text-gray-400">verified_user</span>
<span class="material-symbols-outlined text-2xl text-gray-400">workspace_premium</span>
<span class="material-symbols-outlined text-2xl text-gray-400">shield</span>
</div>
</div>
</div>
<div class="mt-8 flex items-center justify-center gap-6 text-xs text-gray-400 font-medium">
<a class="hover:text-primary transition-colors" href="#">Conditions d'utilisation</a>
<span class="w-1 h-1 bg-gray-300 rounded-full"></span>
<a class="hover:text-primary transition-colors" href="#">Protection des données</a>
<span class="w-1 h-1 bg-gray-300 rounded-full"></span>
<a class="hover:text-primary transition-colors" href="#">Support technique</a>
</div>
</div>
</main>
<div class="fixed top-0 left-0 w-full h-full -z-10 overflow-hidden pointer-events-none">
<div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/5 rounded-full blur-[120px]"></div>
<div class="absolute bottom-[-5%] right-[-5%] w-[30%] h-[30%] bg-primary/5 rounded-full blur-[100px]"></div>
</div>
</body>
</html>