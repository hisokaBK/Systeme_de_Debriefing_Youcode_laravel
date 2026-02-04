<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>new sprints</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
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
   <a href="/admin_competencies"> <span class="material-symbols-outlined text-gray-400">arrow_back</span></a>
<div class="size-8 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
</svg>
</div>

<h2 class="text-lg font-bold leading-tight tracking-tight">Competencies Management</h2>
</div>
<div class="flex items-center gap-8">

</div>
</div>
</header>
<main class="flex-1 flex items-center justify-center p-6 md:p-12">
<div class="w-full max-w-[800px] flex flex-col gap-6">
<!-- Page Heading -->
<div class="flex flex-col gap-1">
<h1 class="text-[32px] font-bold tracking-tight text-[#111318] dark:text-white">Ajouter une nouvelle compétence</h1>
<p class="text-[#606e8a] dark:text-gray-400 text-base">Définissez les standards pédagogiques pour les évaluations.</p>
</div>
<div class="bg-white dark:bg-gray-900 rounded-xl shadow-sm border border-gray-200 dark:border-gray-800 overflow-hidden">
<form class="p-8 flex flex-col gap-8" method="POST" action="/addCompetencies">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="md:col-span-2 flex flex-col gap-2">
<label class="text-[#111318] dark:text-white text-sm font-semibold">Nom de la Compétence</label>
<input class="w-full h-12 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111318] dark:text-white px-4 focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder:text-gray-400" placeholder="ex: Maîtrise de la syntaxe" type="text" name="nom"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-[#111318] dark:text-white text-sm font-semibold">Code</label>
<input class="w-full h-12 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111318] dark:text-white px-4 focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder:text-gray-400" placeholder="ex: C1" type="text" name="code"/>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-[#111318] dark:text-white text-sm font-semibold">Description</label>
<textarea class="w-full min-h-[160px] rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111318] dark:text-white p-4 focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder:text-gray-400 resize-none" placeholder="Décrivez les critères de réussite et le contexte pédagogique de cette compétence..." name="description"></textarea>
</div>
<!-- Action Buttons -->
<div class="flex items-center justify-end gap-3 pt-4 border-t border-gray-100 dark:border-gray-800">
<a href="/admin_competencies" class="px-6 pt-3 h-12 rounded-lg border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors items-center" type="button" >
                                    Annuler
                                </a>
<button class="px-8 h-12 rounded-lg bg-primary text-white font-bold hover:bg-blue-700 transition-colors shadow-lg shadow-primary/20" type="submit">
                                    Enregistrer la Compétence
                                </button>
</div>
</form>
</div>
<!-- Information Tip -->
<div class="flex items-center gap-3 p-4 bg-primary/5 rounded-lg border border-primary/10">
<span class="material-symbols-outlined text-primary">info</span>
<p class="text-sm text-primary/80 font-medium">Les compétences ajoutées seront immédiatement disponibles pour les professeurs dans le module de création d'évaluations.</p>
</div>
</div>
</main>
<footer class="py-6 text-center text-gray-400 text-xs">
        © 2026 bilal bakessou
    </footer>
</body>
</html>