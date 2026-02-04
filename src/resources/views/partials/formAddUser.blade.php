<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Inscription Utilisateur</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts: Lexend and Noto Sans -->
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
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
                        "text-main": "#121212",
                    },
                    fontFamily: {
                        "display": ["Lexend", "Noto Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Lexend', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col">
<header class="w-full bg-white dark:bg-background-dark border-b border-solid border-[#dbdfe6] dark:border-gray-800 px-6 py-3 sticky top-0 z-50">
<div class="max-w-7xl mx-auto flex items-center justify-between">
<div class="flex items-center gap-4 text-text-main dark:text-white">
       <a href="/admin_users"> <span class="material-symbols-outlined text-gray-400">arrow_back</span></a>
<div class="size-8 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
</svg>
</div>
<h2 class="text-lg font-bold leading-tight tracking-tight">User Management</h2>
</div>
<div class="flex items-center gap-8">

</div>
</div>
</header>
<main class="flex-1 flex items-center justify-center p-6 md:p-12">
<div class="w-full max-w-[640px] bg-white dark:bg-gray-900 shadow-xl rounded-xl overflow-hidden border border-[#dbdfe6] dark:border-gray-800">
<div class="pt-10 pb-4 px-8 text-center">
<h1 class="text-text-main dark:text-white text-[32px] font-bold leading-tight tracking-tight pb-2">Inscription Utilisateur</h1>
<p class="text-gray-500 dark:text-gray-400 text-base">Créez votre compte pour accéder à la plateforme pédagogique.</p>
</div>
<form class="p-8 space-y-6" action="/addUser" method="POST" enctype="multipart/form-data">
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<label class="flex flex-col gap-2">
<span class="text-text-main dark:text-gray-300 text-base font-medium">Prénom</span>
<input class="form-input w-full rounded-lg border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 dark:text-white h-12 px-4 focus:ring-primary focus:border-primary placeholder:text-gray-400" placeholder="Jean" name="prenom" type="text"/>
</label>
<label class="flex flex-col gap-2">
<span class="text-text-main dark:text-gray-300 text-base font-medium">Nom</span>
<input class="form-input w-full rounded-lg border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 dark:text-white h-12 px-4 focus:ring-primary focus:border-primary placeholder:text-gray-400" placeholder="Dupont" name="nom" type="text"/>
</label>
</div>
<label class="flex flex-col gap-2">
<span class="text-text-main dark:text-gray-300 text-base font-medium">Email</span>
<div class="relative flex items-center">
<div class="absolute left-4 text-gray-400">
<span class="material-symbols-outlined text-xl">mail</span>
</div>
<input class="form-input w-full rounded-lg border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 dark:text-white h-12 pl-12 pr-4 focus:ring-primary focus:border-primary placeholder:text-gray-400" placeholder="jean.dupont@email.com" name="email" type="email"/>
</div>
</label>
<label class="flex flex-col gap-2">
<span class="text-text-main dark:text-gray-300 text-base font-medium">Mot de passe</span>
<div class="relative flex items-center">
<div class="absolute left-4 text-gray-400">
<span class="material-symbols-outlined text-xl">lock</span>
</div>
<input class="form-input w-full rounded-lg border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 dark:text-white h-12 pl-12 pr-12 focus:ring-primary focus:border-primary placeholder:text-gray-400" placeholder="••••••••" name="mot_de_passe" type="password"/>
<button class="absolute right-4 text-gray-400 hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
</div>
</label>
<label class="flex flex-col gap-2">
<span class="text-text-main dark:text-gray-300 text-base font-medium">Rôle</span>
<div class="relative">
<select class="form-select w-full rounded-lg border-[#dbdfe6] dark:border-gray-700 bg-white dark:bg-gray-800 dark:text-white h-12 px-4 focus:ring-primary focus:border-primary appearance-none" name="role">
<option disabled="" selected="" value="">Sélectionnez votre rôle</option>
<option value="ADMIN">Administrateur</option>
<option value="TEACHER">Formateur</option>
<option value="APPRENANT">Apprenant</option>
</select>
</div>
</label>
<div class="flex flex-col gap-2">
<span class="text-text-main dark:text-gray-300 text-base font-medium">Photo de profil</span>
<div class="flex flex-col items-center gap-4 rounded-lg border-2 border-dashed border-[#dbdfe6] dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/30 px-6 py-8 transition-colors hover:border-primary">
<div class="size-16 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
<span class="material-symbols-outlined text-3xl text-gray-400 dark:text-gray-500">account_circle</span>
</div>
<div class="flex flex-col items-center gap-1">
<p class="text-text-main dark:text-white text-sm font-bold leading-tight">Glissez votre photo ici</p>
<p class="text-gray-500 dark:text-gray-400 text-xs text-center">PNG ou JPG jusqu'à 5MB</p>
</div>
<input class="flex min-w-[120px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 py-2 bg-[#f0f1f5] dark:bg-gray-700 text-text-main dark:text-white text-sm font-bold hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors border-0" type="file" name="photo" id="">

</div>
</div>
<div class="pt-4">
<button class="w-full bg-primary hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-lg shadow-lg shadow-primary/20 transition-all transform hover:scale-[1.01] active:scale-[0.99]" type="submit">
                        Créer mon compte
                    </button>
</div>
<p class="text-center text-sm text-gray-600 dark:text-gray-400">
                    Déjà inscrit ? 
                    <a class="text-primary font-bold hover:underline" href="#">Connectez-vous ici</a>
</p>
</form>
</div>
</main>
<footer class="py-6 text-center text-gray-400 text-xs">
        © 2026 bilal bakessou
    </footer>
</body></html>