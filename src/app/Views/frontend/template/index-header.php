
<body class="bg-surface-container-lowest text-on-surface font-body-md relative min-h-screen selection:bg-primary-container selection:text-on-primary">
<div class="fixed inset-0 scanlines z-40 pointer-events-none opacity-40"></div>
<header class="fixed top-0 left-0 w-full z-50 bg-surface-container-low/95 backdrop-blur-md">
    <div class="h-20 w-full px-margin-lg flex items-center justify-between gap-space-md">
        <div class="flex items-center gap-space-lg shrink-0">
            <a class="flex items-center gap-space-sm" data-path="inicio" href="#">
                <img alt="Retroflix Logo" class="h-8 w-auto object-contain" src="app/Views/frontend/img/logo.png">
                <span class="font-headline-sm text-headline-sm uppercase text-primary tracking-widest hidden sm:inline-block"></span>
            </a>
            <div class="hidden xl:flex items-center gap-space-xs bg-surface-container px-space-sm py-space-xs"><span
                    class="font-label-sm text-label-sm text-tertiary-container uppercase tracking-wider">CREDITS: 99</span><span
                    class="text-outline-variant font-label-sm text-label-sm">|</span><span
                    class="font-label-sm text-label-sm text-primary-container uppercase tracking-wider">HI-SCORE: 999,990</span>
            </div>
        </div>
        <nav class="hidden lg:flex items-center gap-space-lg"
             data-active-classes="text-primary-container font-headline-sm"><a aria-current="page"
                                                                              class="uppercase transition-colors text-primary-container font-headline-sm"
                                                                              data-path="inicio" href="#">INICIO</a><a
                class="font-headline-sm text-headline-sm uppercase text-on-surface-variant hover:text-on-surface transition-colors"
                data-path="cartuchos-top" href="#">CARTUCHOS</a><a
                class="font-headline-sm text-headline-sm uppercase text-on-surface-variant hover:text-on-surface transition-colors"
                data-path="arcade-originales" href="#">ARCADE-ORIGINALES</a><a
                class="font-headline-sm text-headline-sm uppercase text-on-surface-variant hover:text-on-surface transition-colors"
                data-path="generos-16-bit" href="#">16-BIT</a><a
                class="font-headline-sm text-headline-sm uppercase text-on-surface-variant hover:text-on-surface transition-colors"
                data-path="mi-coleccion" href="#">COLECCIÓN</a></nav>
        <div class="flex items-center gap-space-md shrink-0">
            <div class="hidden md:flex items-center bg-surface-container-lowest px-space-md py-space-xs"><span
                    class="font-label-md text-label-md text-primary mr-space-xs">[SEARCH:</span><span
                    class="w-2 h-4 bg-primary inline-block animate-cursor"></span><span
                    class="font-label-md text-label-md text-primary ml-space-xs">]</span></div>
            <button class="relative p-space-xs text-on-surface-variant hover:text-on-surface flex items-center justify-center">
                <span class="material-symbols-outlined text-headline-sm">notifications</span><span
                    class="absolute top-1 right-1 w-2 h-2 bg-secondary-container"></span></button>
            <div class="flex items-center gap-space-sm bg-surface-container px-space-sm py-space-xs">
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shrink-0"><span
                        class="material-symbols-outlined text-on-primary text-[18px]">person</span></div>
                <div class="hidden 2xl:flex flex-col text-left"><span
                        class="font-label-sm text-label-sm text-primary uppercase">P1: CYBER_BOY</span><span
                        class="font-label-sm text-label-sm text-secondary-container uppercase">LVL 42 ARCHIVIST</span>
                </div>
            </div>
        </div>
    </div>
</header>