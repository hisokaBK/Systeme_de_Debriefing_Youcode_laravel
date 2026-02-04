<header class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-border-dark bg-white/95 dark:bg-surface-dark/95 backdrop-blur supports-[backdrop-filter]:bg-white/60 dark:supports-[backdrop-filter]:bg-surface-dark/60">
<div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
<h2 class="text-slate-900  first-letter:text-purple-300 first-letter:text-3xl first-letter:font-thin dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]"><a href="/" class="">Blog</a></h2>
<div class="flex items-center gap-6">
<nav class="hidden md:flex items-center gap-6">
<a class="text-sm font-medium text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-white transition-colors" href="/">Home</a>
<a class="text-sm font-medium text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-white transition-colors" href="/about">About</a>
<a class="text-sm font-medium text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-white transition-colors" href="/blogs">Blogs</a>
<?php echo isset($_SESSION['user'])&&$_SESSION['user']->role=="AUTHOR"?'<a class="text-sm font-medium text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-white transition-colors" href="/bord_author">My Articles</a>':'' ?>
<?=  isset($_SESSION['user'])?'':'<a class="text-sm font-medium text-slate-600 hover:text-primary dark:text-slate-300 dark:hover:text-white transition-colors" href="/login"><button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary hover:bg-primary/80 text-white text-sm font-bold leading-normal tracking-[0.015em] transition-all">
<span class="truncate">Sign In</span></button></a>'?>
</nav>
<div class="flex items-center gap-4">
<?php if(isset($_SESSION['user'])) : ?>
<a href="/profil"><button class="relative h-9 w-9 overflow-hidden rounded-full ring-2 ring-transparent hover:ring-primary transition-all">
<img alt="User Profile Avatar" class="h-full w-full object-cover" data-alt="User profile avatar close-up" src="../<?= $_SESSION['user']->photo ?>"/>
</button>
</a>
<?php else : ''; endif ;?>

</div>
</div>
</div>
</header>
