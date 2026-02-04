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
<div class="flex w-[100%] items-center justify-between gap-4 text-text-main dark:text-white">
  <div class="flex items-center  gap-4 text-text-main dark:text-white"><a href="/admin_sprints"> <span class="material-symbols-outlined text-gray-400">arrow_back</span></a>
<div class="size-8 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
</svg>
</div>
<h2 class="text-lg font-bold leading-tight tracking-tight">User Management</h2>
</div>
 @if(isset($_SESSION['error']) )
               <p class='text-red-500 border border-red-400 rounded-lg py-2 px-4'>{{$_SESSION['error']}}</p> 
  @endif
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

<form class="p-8 space-y-6" action="/addSprint" method="POST" enctype="multipart/form-data">

  <label class="flex flex-col gap-2">
    <span class="text-text-main dark:text-gray-300 text-base font-medium">
      Nom du Sprint
    </span>
    <input
      class="form-input w-full rounded-lg border-[#dbdfe6] dark:border-gray-700
             bg-white dark:bg-gray-800 dark:text-white h-12 px-4
             focus:ring-primary focus:border-primary placeholder:text-gray-400"
      placeholder="Sprint 1"
      name="nom"
      type="text"
      required
    />
  </label>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <label class="flex flex-col gap-2">
      <span class="text-text-main dark:text-gray-300 text-base font-medium">
        Date de début
      </span>
      <input
        class="form-input w-full rounded-lg border-[#dbdfe6] dark:border-gray-700
               bg-white dark:bg-gray-800 dark:text-white h-12 px-4
               focus:ring-primary focus:border-primary"
        name="date_debut"
        type="date"
        required
      />
    </label>

    <label class="flex flex-col gap-2">
      <span class="text-text-main dark:text-gray-300 text-base font-medium">
        Date de fin
      </span>
      <input
        class="form-input w-full rounded-lg border-[#dbdfe6] dark:border-gray-700
               bg-white dark:bg-gray-800 dark:text-white h-12 px-4
               focus:ring-primary focus:border-primary"
        name="date_fin"
        type="date"
        required
      />
    </label>
  </div>

  <div class="flex flex-col gap-2">
    <span class="text-text-main dark:text-gray-300 text-base font-medium">
      Image du Sprint
    </span>

    <div class="flex flex-col items-center gap-4 rounded-lg border-2 border-dashed
                border-[#dbdfe6] dark:border-gray-700
                bg-gray-50/50 dark:bg-gray-800/30
                px-6 py-8 transition-colors hover:border-primary">

      <div class="size-16 rounded-full bg-gray-200 dark:bg-gray-700
                  flex items-center justify-center">
        <span class="material-symbols-outlined text-3xl text-gray-400">
          image
        </span>
      </div>

      <div class="flex flex-col items-center gap-1">
        <p class="text-text-main dark:text-white text-sm font-bold">
          Glissez une image ici
        </p>
        <p class="text-gray-500 dark:text-gray-400 text-xs">
          PNG ou JPG – max 5MB
        </p>
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

  <div class="pt-4">
    <button
      type="submit"
      class="w-full bg-primary hover:bg-blue-700 text-white
             font-bold py-4 px-6 rounded-lg shadow-lg
             shadow-primary/20 transition-all
             transform hover:scale-[1.01] active:scale-[0.99]">
      Ajouter le Sprint
    </button>
  </div>

</form>
</div>
</main>
<footer class="py-6 text-center text-gray-400 text-xs">
        © 2026 bilal bakessou
    </footer>
</body>
</html>