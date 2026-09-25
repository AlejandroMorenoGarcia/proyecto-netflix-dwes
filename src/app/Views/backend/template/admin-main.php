
<main class="w-full pt-20 bg-surface-container-lowest relative z-10">
    <div class="flex flex-col w-full px-margin md:px-margin-lg py-margin-md gap-space-lg selection:bg-secondary-container selection:text-surface-container-lowest">
        <!-- ==================== 1. TOP HARDWARE DIAGNOSTICS & SYS_OP BANNER ==================== -->
        <section class="w-full bg-surface-container-low p-space-md md:p-space-lg shadow-xl relative overflow-hidden">
            <!-- Ambient phosphor indicator bar -->
            <div class="flex flex-col xl:flex-row xl:items-center justify-between gap-space-md mb-space-md">
                <div class="flex flex-col gap-space-xs">
                    <div class="flex flex-wrap items-center gap-space-xs text-secondary-container font-label-sm text-label-sm uppercase tracking-widest">
                        <span class="inline-block w-2.5 h-2.5 bg-secondary-container animate-pulse shadow-[0_0_8px_#ff4a8d]"></span>
                        <span>SYS_OP ARCHITECTURE: ROOT LEVEL ACCESS</span>
                        <span class="text-outline-variant">///</span>
                        <span class="text-primary-container">NODE: TOKYO-MVS-CLOUD-01</span>
                        <span class="text-outline-variant">///</span>
                        <span class="text-tertiary-container">SYS_CLOCK: 14:28:59 JST</span>
                    </div>
                    <h1 class="font-headline-lg text-headline-lg text-primary tracking-tight uppercase flex items-center gap-space-sm">
                        <span>ARCADE MASTER CONSOLE</span>
                        <span class="bg-surface-variant text-on-surface-variant font-label-sm text-label-sm px-space-xs py-0.5 tracking-wider hidden sm:inline-block">BIOS REV 4.2-94</span>
                    </h1>
                </div>
                <!-- Quick Action Arcade Pushbuttons -->
                <div class="flex flex-wrap items-center gap-space-sm">
                    <button class="bg-primary-container text-surface-container-lowest font-headline-sm text-headline-sm px-space-md py-space-sm flex items-center gap-space-xs shadow-[4px_4px_0px_#000000] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-[2px_2px_0px_#000000] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none transition-all cursor-pointer"
                            id="btn-insert-rom">
                        <span class="material-symbols-outlined text-[20px]">file_upload</span>
                        <span class="font-bold">+ INSERTAR ROM</span>
                    </button>
                    <button class="bg-surface-container-high text-secondary font-label-lg text-label-lg px-space-md py-space-sm flex items-center gap-space-xs shadow-[4px_4px_0px_#000000] hover:text-primary hover:bg-surface-bright transition-all cursor-pointer"
                            id="btn-reboot-bios">
                        <span class="material-symbols-outlined text-[18px]">restart_alt</span>
                        <span>REBOOT BIOS</span>
                    </button>
                    <button class="bg-surface-container-high text-on-surface-variant font-label-lg text-label-lg px-space-md py-space-sm flex items-center gap-space-xs shadow-[4px_4px_0px_#000000] hover:text-tertiary-container hover:bg-surface-bright transition-all cursor-pointer"
                            id="btn-dump-logs">
                        <span class="material-symbols-outlined text-[18px]">terminal</span>
                        <span>DUMP LOGS</span>
                    </button>
                </div>
            </div>
            <!-- Live Telemetry Meters -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-space-sm pt-space-sm">
                <div class="bg-surface-container-lowest p-space-sm flex flex-col gap-1 shadow-sm">
                    <div class="flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm">
                        <span>CPU Z80 CORE</span>
                        <span class="text-primary-container font-bold">42% LOAD</span>
                    </div>
                    <div class="w-full bg-surface-variant h-2 overflow-hidden flex">
                        <div class="bg-primary-container h-full w-[42%] transition-all duration-500"></div>
                    </div>
                    <span class="text-outline font-label-sm text-[9px] uppercase tracking-wide">3.58 MHz OSCILLATOR NORMAL</span>
                </div>
                <div class="bg-surface-container-lowest p-space-sm flex flex-col gap-1 shadow-sm">
                    <div class="flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm">
                        <span>68000 CO-PROC</span>
                        <span class="text-tertiary-container font-bold">60.0 FPS</span>
                    </div>
                    <div class="w-full bg-surface-variant h-2 overflow-hidden flex">
                        <div class="bg-tertiary-container h-full w-[98%] transition-all duration-500"></div>
                    </div>
                    <span class="text-outline font-label-sm text-[9px] uppercase tracking-wide">V-BLANK SYNC LOCKED</span>
                </div>
                <div class="bg-surface-container-lowest p-space-sm flex flex-col gap-1 shadow-sm">
                    <div class="flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm">
                        <span>SRAM BATTERY</span>
                        <span class="text-secondary font-bold">16.4 / 32 GB</span>
                    </div>
                    <div class="w-full bg-surface-variant h-2 overflow-hidden flex">
                        <div class="bg-secondary-container h-full w-[51%] transition-all duration-500"></div>
                    </div>
                    <span class="text-outline font-label-sm text-[9px] uppercase tracking-wide">NVRAM RETENTION: 99.8%</span>
                </div>
                <div class="bg-surface-container-lowest p-space-sm flex flex-col gap-1 shadow-sm">
                    <div class="flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm">
                        <span>COIN MECHANISM</span>
                        <span class="text-primary font-bold">ONLINE (8ms)</span>
                    </div>
                    <div class="w-full bg-surface-variant h-2 overflow-hidden flex">
                        <div class="bg-primary h-full w-full"></div>
                    </div>
                    <span class="text-outline font-label-sm text-[9px] uppercase tracking-wide">SLOT-A / SLOT-B ARMED</span>
                </div>
            </div>
        </section>
        <!-- ==================== 2. HUD STATS / GLOBAL ARCADE METRICS ==================== -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
            <!-- Stat 1: Active Players -->
            <div class="bg-surface-container p-space-md shadow-[4px_4px_0px_#000000] flex flex-col justify-between relative overflow-hidden group">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">JUGADORES EN LÍNEA</span>
                    <span class="bg-primary-container/20 text-primary-container font-label-sm text-label-sm px-1.5 py-0.5 uppercase tracking-widest font-bold">PEAK</span>
                </div>
                <div class="my-space-sm flex items-baseline gap-space-xs">
                    <span class="font-headline-xl text-headline-xl text-primary tracking-tight">4,892</span>
                    <span class="font-label-md text-label-md text-tertiary-container font-bold">+12.4%</span>
                </div>
                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                    <span>64 SALAS ACTIVAS</span>
                    <span class="flex items-center text-primary-container gap-1"><span
                            class="w-2 h-2 rounded-full bg-primary-container animate-ping"></span> 0 DOWNTIME</span>
                </div>
            </div>
            <!-- Stat 2: Virtual Coins Consumed -->
            <div class="bg-surface-container p-space-md shadow-[4px_4px_0px_#000000] flex flex-col justify-between relative overflow-hidden">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">FICHAS / COINS HOY</span>
                    <span class="bg-tertiary-container/20 text-tertiary-container font-label-sm text-label-sm px-1.5 py-0.5 uppercase tracking-widest font-bold">COIN-OP</span>
                </div>
                <div class="my-space-sm flex items-baseline gap-space-xs">
                    <span class="font-headline-xl text-headline-xl text-tertiary-container tracking-tight">128,450</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">CREDITS</span>
                </div>
                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                    <span>PROMEDIO: 26.2 / USER</span>
                    <span class="text-tertiary font-bold">+18.2K PEAK HORA</span>
                </div>
            </div>
            <!-- Stat 3: Cartridges & ROMs -->
            <div class="bg-surface-container p-space-md shadow-[4px_4px_0px_#000000] flex flex-col justify-between relative overflow-hidden">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">CARTUCHOS ACTIVOS</span>
                    <span class="bg-secondary-container/20 text-secondary-container font-label-sm text-label-sm px-1.5 py-0.5 uppercase tracking-widest font-bold">ROM VAULT</span>
                </div>
                <div class="my-space-sm flex items-baseline gap-space-xs">
                    <span class="font-headline-xl text-headline-xl text-secondary tracking-tight">1,248</span>
                    <span class="font-label-sm text-label-sm text-secondary-container font-bold">+14 EN COLA</span>
                </div>
                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                    <span>NEO-GEO: 38% / CPS: 42%</span>
                    <span class="text-on-surface">100% CHECKSUM</span>
                </div>
            </div>
            <!-- Stat 4: Glitch & Bug Reports -->
            <div class="bg-surface-container p-space-md shadow-[4px_4px_0px_#000000] flex flex-col justify-between relative overflow-hidden">
                <div class="flex items-center justify-between">
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">REPORTES DE GLITCH</span>
                    <span class="bg-surface-variant text-on-surface font-label-sm text-label-sm px-1.5 py-0.5 uppercase tracking-widest font-bold">AUDIT</span>
                </div>
                <div class="my-space-sm flex items-baseline gap-space-xs">
                    <span class="font-headline-xl text-headline-xl text-on-surface tracking-tight">06</span>
                    <span class="font-label-sm text-label-sm text-primary-container font-bold">0 CRÍTICOS</span>
                </div>
                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
                    <span>SRAM OVERFLOW: 2</span>
                    <span class="text-on-surface-variant">SPRITE TEAR: 4</span>
                </div>
            </div>
        </section>
        <!-- ==================== 3. CENTRAL ROM & CARTRIDGE MANAGEMENT SYSTEM ==================== -->
        <section class="w-full bg-surface-container-low p-space-md md:p-space-lg shadow-xl flex flex-col gap-space-md">
            <!-- Header with Filters & Search -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
                <div class="flex items-center gap-space-sm">
                    <div class="w-3 h-6 bg-primary-container"></div>
                    <div>
                        <h2 class="font-headline-md text-headline-md text-primary tracking-tight uppercase">CATÁLOGO DE
                            CARTUCHOS // ROM MANAGER</h2>
                        <p class="font-label-sm text-label-sm text-on-surface-variant uppercase">BANCO DE MEMORIA ACTIVO
                            • ARQUITECTURA MVS &amp; CPS-II</p>
                    </div>
                </div>
                <!-- Action Search & Tab Bar -->
                <div class="flex flex-wrap items-center gap-space-sm">
                    <div class="flex bg-surface-container-lowest p-1 shadow-inner">
                        <button class="bg-primary-container text-surface-container-lowest font-label-sm text-label-sm px-space-sm py-1 font-bold">
                            TODOS (1,248)
                        </button>
                        <button class="text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm px-space-sm py-1">
                            RECIENTES (42)
                        </button>
                        <button class="text-secondary-container hover:text-secondary font-label-sm text-label-sm px-space-sm py-1">
                            EN REVISIÓN (14)
                        </button>
                        <button class="text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm px-space-sm py-1">
                            DESHABILITADOS (3)
                        </button>
                    </div>
                    <div class="flex items-center bg-surface-container-lowest px-space-sm py-1.5 shadow-inner">
                        <span class="material-symbols-outlined text-[16px] text-primary mr-1">search</span>
                        <input class="bg-transparent text-primary placeholder:text-outline font-label-sm text-label-sm focus:outline-none w-48 sm:w-64"
                               placeholder="BUSCAR POR TITULO O ID_ROM..." type="text"/>
                    </div>
                </div>
            </div>
            <!-- Retro Table Wrapper -->
            <div class="w-full overflow-x-auto">
                <table class="w-full text-left font-body-sm text-body-sm">
                    <thead>
                    <tr class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
                        <th class="py-space-sm px-space-md">ID / CARTUCHO</th>
                        <th class="py-space-sm px-space-md">HARDWARE PLATFORM</th>
                        <th class="py-space-sm px-space-md text-center">JUGADORES VIVOS</th>
                        <th class="py-space-sm px-space-md">BATERÍA / SRAM</th>
                        <th class="py-space-sm px-space-md">CHECKSUM CRC32</th>
                        <th class="py-space-sm px-space-md text-right">OPERACIONES DIP</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y-0">
                    <!-- Row 1 -->
                    <tr class="bg-surface-container-lowest hover:bg-surface-container transition-colors group">
                        <td class="py-space-md px-space-md">
                            <div class="flex items-center gap-space-sm">
                                <div class="w-10 h-10 bg-surface-container-high shrink-0 overflow-hidden shadow-sm flex items-center justify-center">
                                    <img class="w-full h-full object-cover"
                                         data-alt="Chrono Cyberpunk 2088 pixel art cartridge label 16-bit futuristic samurai cyberpunk neon cyan and magenta colors arcade classic aesthetics"
                                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuAMbZegy0TSikenb7YJ3aptLC_MvHLEBCsxAWDwQz64xuD6eyx05M0N4a0KuxAmXMref8_HRFkTnvt6rmqjK1nGj52WfiIa3bsEX3913jr29TutTV8MBiNvo8-Nbw0LlFpmvuEzrH1iIMZ12QyBNgJmWvTHh6d9Oy2lHe2CnQIHCnlpfcwBkgrNMQXwNu6sfRhdgqhQBu67JPk35A-_dGO18Z0Xo8AjmQpSnVtNeBdI31sMZGa7xXaJ"/>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-label-sm text-label-sm text-primary-container font-bold">ROM-0104</span>
                                        <span class="bg-surface-variant text-primary-container font-label-sm text-[10px] px-1 font-bold">CERTIFICADO</span>
                                    </div>
                                    <span class="font-headline-sm text-[15px] text-on-surface block tracking-wide">Chrono Cyberpunk 2088</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-space-md px-space-md">
                            <span class="bg-surface-container-high text-primary font-label-sm text-label-sm px-2 py-0.5">CAPCOM CPS-2</span>
                        </td>
                        <td class="py-space-md px-space-md text-center">
                            <div class="flex items-center justify-center gap-1 font-label-md text-label-md text-tertiary-container font-bold">
                                <span class="inline-block w-1.5 h-1.5 bg-primary-container rounded-full animate-ping"></span>
                                <span>1,420 CABINAS</span>
                            </div>
                        </td>
                        <td class="py-space-md px-space-md">
<span class="text-primary font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-primary-container">battery_charging_full</span>
                OPTIMAL (3.24V)
              </span>
                        </td>
                        <td class="py-space-md px-space-md font-label-sm text-label-sm text-on-surface-variant">
                            0x99FF2A-OK
                        </td>
                        <td class="py-space-md px-space-md text-right">
                            <div class="flex items-center justify-end gap-space-xs">
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-primary hover:bg-primary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    EDITAR
                                </button>
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-tertiary-container hover:bg-tertiary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    DIP-SW
                                </button>
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-secondary-container hover:bg-secondary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    PAUSAR
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="bg-surface-container-low hover:bg-surface-container transition-colors group">
                        <td class="py-space-md px-space-md">
                            <div class="flex items-center gap-space-sm">
                                <div class="w-10 h-10 bg-surface-container-high shrink-0 overflow-hidden shadow-sm flex items-center justify-center">
                                    <img class="w-full h-full object-cover"
                                         data-alt="Street Brawler II Turbo arcade sticker 16 bit martial arts fighting tournament neon dark lighting gritty retro pixel art style"
                                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsfbLW60yjC4YoBKnlXaBcjkw_GAJ7QRcvrHfnWdg_PLeAEBzrfe70P8XBSwkg3Sj-S01wIrBsYrqp8P-lSYI_kiYboOuUsI3vmEYzfZmSL0D9l1SqdK6iQuGUpcnWvlcej5EFAYiG3bu08PIk8oP6Oy2lY6BGCnTkWalbPmPwAV1OGdcR_4h0YktY8cmOKNgpbIWCPUTVVjibl2SD3aV6ivZ6GXq0BoHd9-KMb5xaKaW25kw8hGco"/>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-label-sm text-label-sm text-tertiary-container font-bold">ROM-0089</span>
                                        <span class="bg-tertiary-container/20 text-tertiary-container font-label-sm text-[10px] px-1 font-bold">GOLD MASTER</span>
                                    </div>
                                    <span class="font-headline-sm text-[15px] text-on-surface block tracking-wide">Street Brawler II Turbo</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-space-md px-space-md">
                            <span class="bg-surface-container-high text-tertiary-fixed-dim font-label-sm text-label-sm px-2 py-0.5">SNK NEO-GEO MVS</span>
                        </td>
                        <td class="py-space-md px-space-md text-center">
                            <span class="font-label-md text-label-md text-on-surface font-bold">980 CABINAS</span>
                        </td>
                        <td class="py-space-md px-space-md">
<span class="text-primary font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-tertiary-container">battery_full</span>
                STABLE (3.18V)
              </span>
                        </td>
                        <td class="py-space-md px-space-md font-label-sm text-label-sm text-on-surface-variant">
                            0x4F12BC-OK
                        </td>
                        <td class="py-space-md px-space-md text-right">
                            <div class="flex items-center justify-end gap-space-xs">
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-primary hover:bg-primary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    EDITAR
                                </button>
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-tertiary-container hover:bg-tertiary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    DIP-SW
                                </button>
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-secondary-container hover:bg-secondary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    PAUSAR
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="bg-surface-container-lowest hover:bg-surface-container transition-colors group">
                        <td class="py-space-md px-space-md">
                            <div class="flex items-center gap-space-sm">
                                <div class="w-10 h-10 bg-surface-container-high shrink-0 overflow-hidden shadow-sm flex items-center justify-center">
                                    <img class="w-full h-full object-cover"
                                         data-alt="Mecha Invaders Final Wave arcade shoot em up vertical spacecraft bullet hell retro arcade art 16-bit pixelated aesthetic"
                                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxsauylRw1ogH43poQBJYnyDeu4q-0nOdHHZH3z6F3jT89xqjFoE4GzYNmmFAaqXqKk93ZahoPAOebuqiwt0GXlRqXrZfE_Ehz6F43AgZOUFHMH1tSgV8C2w8DrFTJY5Pj76T-IkaIj8DxPm6n2i320vTnbcccNA_eRjK0L4nd-uKEgElRM_vjy1yzacM0Ic4h1PoH548JQmfZqJLSp0Pf-pVnPCVbJz1MJzqQu4jaRhyPqPdMDTvP"/>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-label-sm text-label-sm text-primary-container font-bold">ROM-0215</span>
                                        <span class="bg-primary/20 text-primary font-label-sm text-[10px] px-1 font-bold">CO-OP CERT</span>
                                    </div>
                                    <span class="font-headline-sm text-[15px] text-on-surface block tracking-wide">Mecha Invaders: Final Wave</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-space-md px-space-md">
                            <span class="bg-surface-container-high text-primary font-label-sm text-label-sm px-2 py-0.5">IREM M-92</span>
                        </td>
                        <td class="py-space-md px-space-md text-center">
                            <span class="font-label-md text-label-md text-on-surface font-bold">640 CABINAS</span>
                        </td>
                        <td class="py-space-md px-space-md">
<span class="text-primary font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-primary-container">battery_full</span>
                OPTIMAL (3.30V)
              </span>
                        </td>
                        <td class="py-space-md px-space-md font-label-sm text-label-sm text-on-surface-variant">
                            0x7E33A1-OK
                        </td>
                        <td class="py-space-md px-space-md text-right">
                            <div class="flex items-center justify-end gap-space-xs">
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-primary hover:bg-primary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    EDITAR
                                </button>
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-tertiary-container hover:bg-tertiary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    DIP-SW
                                </button>
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-secondary-container hover:bg-secondary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    PAUSAR
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 4: Pending / Testing -->
                    <tr class="bg-surface-container-low hover:bg-surface-container transition-colors group">
                        <td class="py-space-md px-space-md">
                            <div class="flex items-center gap-space-sm">
                                <div class="w-10 h-10 bg-surface-container-high shrink-0 overflow-hidden shadow-sm flex items-center justify-center">
                                    <div class="w-full h-full bg-secondary-container/20 flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[20px]">science</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-label-sm text-label-sm text-secondary-container font-bold">ROM-0342</span>
                                        <span class="bg-secondary-container text-surface-container-lowest font-label-sm text-[10px] px-1 font-bold">INSPECCIÓN VIRAL</span>
                                    </div>
                                    <span class="font-headline-sm text-[15px] text-secondary block tracking-wide">Vampire Slayer 2099 (Beta VHS)</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-space-md px-space-md">
                            <span class="bg-surface-container-high text-secondary font-label-sm text-label-sm px-2 py-0.5">CUSTOM 16-BIT FPGA</span>
                        </td>
                        <td class="py-space-md px-space-md text-center">
                            <span class="font-label-md text-label-md text-outline font-bold">0 EN RED</span>
                        </td>
                        <td class="py-space-md px-space-md">
<span class="text-secondary-container font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">warning</span>
                SIN TESTEAR
              </span>
                        </td>
                        <td class="py-space-md px-space-md font-label-sm text-label-sm text-secondary-container font-bold">
                            0xCALC_PENDING
                        </td>
                        <td class="py-space-md px-space-md text-right">
                            <div class="flex items-center justify-end gap-space-xs">
                                <button class="bg-primary-container text-surface-container-lowest px-2 py-1 font-label-sm text-label-sm font-bold hover:bg-primary shadow-sm">
                                    APROBAR
                                </button>
                                <button class="bg-surface-container-highest px-2 py-1 font-label-sm text-label-sm text-primary hover:bg-primary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    SANDBOX
                                </button>
                                <button class="bg-error-container text-on-error-container px-2 py-1 font-label-sm text-label-sm hover:bg-error transition-colors shadow-sm">
                                    RECHAZAR
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 5: Age Restricted -->
                    <tr class="bg-surface-container-lowest hover:bg-surface-container transition-colors group">
                        <td class="py-space-md px-space-md">
                            <div class="flex items-center gap-space-sm">
                                <div class="w-10 h-10 bg-surface-container-high shrink-0 overflow-hidden shadow-sm flex items-center justify-center">
                                    <div class="w-full h-full bg-surface-bright flex items-center justify-center text-tertiary">
                                        <span class="material-symbols-outlined text-[20px]">videogame_asset</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant font-bold">ROM-0112</span>
                                        <span class="bg-error-container/40 text-error font-label-sm text-[10px] px-1 font-bold">RESTRINGIDO +18</span>
                                    </div>
                                    <span class="font-headline-sm text-[15px] text-on-surface block tracking-wide">Alien Labyrinth (Uncensored)</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-space-md px-space-md">
                            <span class="bg-surface-container-high text-primary font-label-sm text-label-sm px-2 py-0.5">SEGA SYSTEM 32</span>
                        </td>
                        <td class="py-space-md px-space-md text-center">
                            <span class="font-label-md text-label-md text-on-surface font-bold">310 CABINAS</span>
                        </td>
                        <td class="py-space-md px-space-md">
<span class="text-primary font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-primary-container">battery_full</span>
                OPTIMAL (3.20V)
              </span>
                        </td>
                        <td class="py-space-md px-space-md font-label-sm text-label-sm text-on-surface-variant">
                            0x88CC41-OK
                        </td>
                        <td class="py-space-md px-space-md text-right">
                            <div class="flex items-center justify-end gap-space-xs">
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-primary hover:bg-primary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    EDITAR
                                </button>
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-tertiary-container hover:bg-tertiary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    DIP-SW
                                </button>
                                <button class="bg-surface-container px-2 py-1 font-label-sm text-label-sm text-secondary-container hover:bg-secondary-container hover:text-surface-container-lowest transition-colors shadow-sm">
                                    PAUSAR
                                </button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- Table Pagination / Status Footer -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-space-sm pt-space-xs text-on-surface-variant font-label-sm text-label-sm">
                <div class="flex items-center gap-space-sm">
                    <span>MOSTRANDO REGISTROS 1 - 5 DE 1,248</span>
                    <span class="text-outline-variant">|</span>
                    <span class="text-primary">SECTOR ASIGNADO: MVS-BANCO-08</span>
                </div>
                <div class="flex items-center gap-1">
                    <button class="bg-surface-container px-2 py-1 text-on-surface-variant hover:text-on-surface shadow-sm font-bold">
                        &lt;&lt; FIRST
                    </button>
                    <button class="bg-primary-container text-surface-container-lowest px-2 py-1 font-bold">01</button>
                    <button class="bg-surface-container px-2 py-1 text-on-surface-variant hover:text-on-surface shadow-sm">
                        02
                    </button>
                    <button class="bg-surface-container px-2 py-1 text-on-surface-variant hover:text-on-surface shadow-sm">
                        03
                    </button>
                    <button class="bg-surface-container px-2 py-1 text-on-surface-variant hover:text-on-surface shadow-sm font-bold">
                        NEXT &gt;&gt;
                    </button>
                </div>
            </div>
        </section>
        <!-- ==================== 4. SPLIT PANELS: ANTI-CHEAT & DIP-SWITCHES ==================== -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
            <!-- PANEL A: BANHAMMER & OPERATOR MONITOR (7 cols) -->
            <section
                class="lg:col-span-7 bg-surface-container-low p-space-md md:p-space-lg shadow-xl flex flex-col gap-space-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-space-sm">
                        <div class="w-3 h-6 bg-secondary-container"></div>
                        <div>
                            <h2 class="font-headline-md text-headline-md text-secondary tracking-tight uppercase">
                                OPERATOR ANTI-CHEAT &amp; SANCIONES</h2>
                            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase">HEURÍSTICA DE
                                SPEEDRUN &amp; COIN-SLOT INTEGRITY</p>
                        </div>
                    </div>
                    <span class="bg-secondary-container/20 text-secondary-container font-label-sm text-label-sm px-2 py-0.5 uppercase font-bold tracking-wider">BANHAMMER ARMED</span>
                </div>
                <!-- Critical Incident Tickets -->
                <div class="flex flex-col gap-space-sm">
                    <!-- Incident 1 -->
                    <div class="bg-surface-container-lowest p-space-md shadow-[2px_2px_0px_#000000] flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
                        <div class="flex items-start gap-space-sm">
                            <div class="w-8 h-8 bg-error-container text-error flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[18px]">gavel</span>
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="font-label-sm text-label-sm text-secondary-container font-bold">@GLITCH_RUNNER_99</span>
                                    <span class="bg-error-container text-on-error-container font-label-sm text-[10px] px-1 font-bold">TURBOFIRE DETECTADO</span>
                                </div>
                                <p class="text-body-sm text-body-sm text-on-surface-variant mt-1">
                                    Entradas de botón I/O a 84 clicks/segundo en <span class="text-primary">Mecha Invaders</span>.
                                    Excede límite de hardware humano.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-space-xs shrink-0 self-end sm:self-center">
                            <button class="bg-secondary-container text-surface-container-lowest font-label-sm text-label-sm px-2 py-1 font-bold hover:bg-secondary transition-colors shadow-sm">
                                WARP 24H
                            </button>
                            <button class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2 py-1 hover:text-on-surface shadow-sm">
                                DISMISS
                            </button>
                        </div>
                    </div>
                    <!-- Incident 2 -->
                    <div class="bg-surface-container-lowest p-space-md shadow-[2px_2px_0px_#000000] flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
                        <div class="flex items-start gap-space-sm">
                            <div class="w-8 h-8 bg-error-container text-error flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[18px]">lock_reset</span>
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="font-label-sm text-label-sm text-secondary-container font-bold">@RETRO_HACKER_X</span>
                                    <span class="bg-error-container text-on-error-container font-label-sm text-[10px] px-1 font-bold">EXPLOIT DE CRÉDITOS</span>
                                </div>
                                <p class="text-body-sm text-body-sm text-on-surface-variant mt-1">
                                    Inyección de paquetes ficticios en Micro-Switch Coin-Chute #01 (+999 credits
                                    packet).
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-space-xs shrink-0 self-end sm:self-center">
                            <button class="bg-error-container text-on-error-container font-label-sm text-label-sm px-2 py-1 font-bold hover:bg-error transition-colors shadow-sm">
                                PERMA-BAN
                            </button>
                            <button class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2 py-1 hover:text-on-surface shadow-sm">
                                AUDITAR
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Live Player Operator Registry -->
                <div class="pt-space-xs flex flex-col gap-space-xs">
                    <span class="font-label-sm text-label-sm text-primary uppercase tracking-wider">ÚLTIMOS USUARIOS VERIFICADOS EN CABINA</span>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                        <div class="bg-surface-container-lowest p-space-sm flex items-center justify-between shadow-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 bg-surface-bright flex items-center justify-center text-primary-container font-headline-sm text-xs">
                                    P1
                                </div>
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface block font-bold">CYBER_BOY</span>
                                    <span class="font-label-sm text-[10px] text-tertiary-container">LVL 42 • ARCHIVIST</span>
                                </div>
                            </div>
                            <span class="font-label-sm text-label-sm text-primary-container font-bold">450 CR</span>
                        </div>
                        <div class="bg-surface-container-lowest p-space-sm flex items-center justify-between shadow-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 bg-surface-bright flex items-center justify-center text-secondary-container font-headline-sm text-xs">
                                    P2
                                </div>
                                <div>
                                    <span class="font-label-sm text-label-sm text-on-surface block font-bold">VALKYRIE_8BIT</span>
                                    <span class="font-label-sm text-[10px] text-secondary">LVL 38 • SPEEDRUNNER</span>
                                </div>
                            </div>
                            <span class="font-label-sm text-label-sm text-primary-container font-bold">120 CR</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PANEL B: GLOBAL DIP-SWITCHES CABINET CONTROLS (5 cols) -->
            <section
                class="lg:col-span-5 bg-surface-container-low p-space-md md:p-space-lg shadow-xl flex flex-col gap-space-md">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-space-sm">
                        <div class="w-3 h-6 bg-tertiary-container"></div>
                        <div>
                            <h2 class="font-headline-md text-headline-md text-tertiary-container tracking-tight uppercase">
                                DIP-SWITCHES MAESTROS</h2>
                            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase">INTERRUPTORES
                                FÍSICOS DE PLACA BASE</p>
                        </div>
                    </div>
                    <span class="bg-surface-container px-2 py-0.5 text-primary font-label-sm text-label-sm uppercase font-bold">SW-BANK A/B</span>
                </div>
                <!-- Mechanical DIP Switches List -->
                <div class="flex flex-col gap-space-sm">
                    <!-- DIP 1: Free Play -->
                    <div class="bg-surface-container-lowest p-space-sm flex items-center justify-between shadow-sm">
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="font-label-sm text-label-sm text-on-surface font-bold">MODO FREE PLAY GLOBAL</span>
                                <span class="font-label-sm text-[10px] text-outline font-bold">[DIP-01]</span>
                            </div>
                            <p class="text-body-sm text-body-sm text-on-surface-variant">Desactivado: Cobro 1 Crédito
                                normal por sesión.</p>
                        </div>
                        <button class="dip-toggle w-12 h-6 bg-surface-variant p-0.5 flex items-center cursor-pointer transition-colors shadow-inner"
                                data-active="false" id="toggle-dip-1">
                            <span class="w-5 h-5 bg-outline shadow-sm transition-transform duration-200"></span>
                        </button>
                    </div>
                    <!-- DIP 2: Global CRT Scanlines -->
                    <div class="bg-surface-container-lowest p-space-sm flex items-center justify-between shadow-sm">
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="font-label-sm text-label-sm text-on-surface font-bold">GENERADOR CRT SCANLINES</span>
                                <span class="font-label-sm text-[10px] text-tertiary-container font-bold">[DIP-02]</span>
                            </div>
                            <p class="text-body-sm text-body-sm text-on-surface-variant">Activo: Filtro de fósforo y
                                raster hardware forzado.</p>
                        </div>
                        <button class="dip-toggle w-12 h-6 bg-primary-container p-0.5 flex items-center justify-end cursor-pointer transition-colors shadow-inner"
                                data-active="true" id="toggle-dip-2">
                            <span class="w-5 h-5 bg-surface-container-lowest shadow-sm transition-transform duration-200"></span>
                        </button>
                    </div>
                    <!-- DIP 3: Active Speedrun Tournament -->
                    <div class="bg-surface-container-lowest p-space-sm flex items-center justify-between shadow-sm">
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="font-label-sm text-label-sm text-on-surface font-bold">TORNEO SPEEDRUN GLOBAL</span>
                                <span class="font-label-sm text-[10px] text-primary-container font-bold">[DIP-03]</span>
                            </div>
                            <p class="text-body-sm text-body-sm text-on-surface-variant">Temporada 4 en curso con
                                ranking NVRAM sincronizado.</p>
                        </div>
                        <button class="dip-toggle w-12 h-6 bg-primary-container p-0.5 flex items-center justify-end cursor-pointer transition-colors shadow-inner"
                                data-active="true" id="toggle-dip-3">
                            <span class="w-5 h-5 bg-surface-container-lowest shadow-sm transition-transform duration-200"></span>
                        </button>
                    </div>
                    <!-- DIP 4: Hardware Frame Limiter -->
                    <div class="bg-surface-container-lowest p-space-sm flex items-center justify-between shadow-sm">
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="font-label-sm text-label-sm text-on-surface font-bold">LIMITADOR HARDWARE 60 FPS</span>
                                <span class="font-label-sm text-[10px] text-primary font-bold">[DIP-04]</span>
                            </div>
                            <p class="text-body-sm text-body-sm text-on-surface-variant">Evita desincronización de audio
                                estéreo FM YM2612.</p>
                        </div>
                        <button class="dip-toggle w-12 h-6 bg-primary-container p-0.5 flex items-center justify-end cursor-pointer transition-colors shadow-inner"
                                data-active="true" id="toggle-dip-4">
                            <span class="w-5 h-5 bg-surface-container-lowest shadow-sm transition-transform duration-200"></span>
                        </button>
                    </div>
                    <!-- DIP 5: Sound Chip Service Mode -->
                    <div class="bg-surface-container-lowest p-space-sm flex items-center justify-between shadow-sm">
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="font-label-sm text-label-sm text-on-surface font-bold">MANTENIMIENTO FM YM2612</span>
                                <span class="font-label-sm text-[10px] text-outline font-bold">[DIP-05]</span>
                            </div>
                            <p class="text-body-sm text-body-sm text-on-surface-variant">Canales 1-6 limpios de jitter.
                                Modo seguro inactivo.</p>
                        </div>
                        <button class="dip-toggle w-12 h-6 bg-surface-variant p-0.5 flex items-center cursor-pointer transition-colors shadow-inner"
                                data-active="false" id="toggle-dip-5">
                            <span class="w-5 h-5 bg-outline shadow-sm transition-transform duration-200"></span>
                        </button>
                    </div>
                </div>
            </section>
        </div>
        <!-- ==================== 5. REAL-TIME SYSTEM KERNEL & CONSOLE LOGS ==================== -->
        <section class="w-full bg-surface-container-lowest p-space-md shadow-2xl relative">
            <div class="flex items-center justify-between pb-space-sm mb-space-sm">
                <div class="flex items-center gap-space-sm">
                    <span class="w-2.5 h-2.5 bg-primary-container animate-ping"></span>
                    <span class="font-headline-sm text-headline-sm text-primary uppercase tracking-widest">SYSTEM KERNEL // TTY_01 VIRTUAL LOG</span>
                </div>
                <div class="flex items-center gap-space-sm text-on-surface-variant font-label-sm text-label-sm">
                    <span>AUTO-SCROLL: [ON]</span>
                    <span class="text-outline-variant">|</span>
                    <span class="text-tertiary-container">BUFFER: 512KB</span>
                </div>
            </div>
            <!-- Retro Terminal Box -->
            <div class="h-44 overflow-y-auto font-label-sm text-label-sm flex flex-col gap-1 text-primary-fixed-dim bg-surface-container-lowest/80 p-space-sm select-text"
                 id="kernel-log-box">
                <div class="text-outline font-label-sm">[14:20:00] KERNEL: Initializing Retroflix 16-Bit Hypervisor
                    v4.2.94-RELEASE...
                </div>
                <div class="text-primary-container font-label-sm">[14:22:01] SYS_INIT: Neo-Geo MVS 4-Slot BIOS hook
                    loaded successfully at memory 0x000000 - 0x7FFFFF.
                </div>
                <div class="text-on-surface font-label-sm">[14:23:45] AUTH: Player #RF-1994-042 (CYBER_BOY) logged in
                    via Cabinet Slot #01 [IP: 192.168.1.104].
                </div>
                <div class="text-tertiary-container font-label-sm">[14:24:12] COIN_DROP: 50 Virtual Credits added to
                    user @Valkyrie_8bit (Coin Chute Pulse Detected).
                </div>
                <div class="text-primary-fixed-dim font-label-sm">[14:25:30] SYNC: Daily leaderboard dump written to
                    NVRAM sector 0x4000 (CRC32: 0xA4F2190).
                </div>
                <div class="text-secondary-container font-label-sm">[14:26:14] WARN: Anti-Cheat triggered on Node-04.
                    Unsanctioned autofire rate (84 cps) logged.
                </div>
                <div class="text-primary font-label-sm">[14:27:02] CPS2_Q_SOUND: DSP audio pipeline initialized. Latency
                    buffer locked at 2.4ms.
                </div>
                <div class="text-tertiary font-label-sm">[14:28:59] HEARTBEAT: All 1,248 Cartridge Rom banks verified.
                    Zero corrupted sectors detected.
                </div>
                <div class="text-primary-container font-label-sm flex items-center">
                    <span>[SYS_OP@RETROFLIX-MAINFRAME-99 ~]#</span>
                    <span class="w-2 h-3.5 bg-primary-container inline-block ml-1 animate-pulse"></span>
                </div>
            </div>
        </section>
    </div>
    <script>
        // Interactive DIP Switch Toggles with retro mechanical feel
        document.querySelectorAll('.dip-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const isActive = button.getAttribute('data-active') === 'true';
                const knob = button.querySelector('span');

                if (isActive) {
                    button.setAttribute('data-active', 'false');
                    button.classList.remove('bg-primary-container', 'justify-end');
                    button.classList.add('bg-surface-variant', 'justify-start');
                    knob.classList.remove('bg-surface-container-lowest');
                    knob.classList.add('bg-outline');
                } else {
                    button.setAttribute('data-active', 'true');
                    button.classList.remove('bg-surface-variant', 'justify-start');
                    button.classList.add('bg-primary-container', 'justify-end');
                    knob.classList.remove('bg-outline');
                    knob.classList.add('bg-surface-container-lowest');
                }
            });
        });

        // Action Buttons Feedback
        const rebootBtn = document.getElementById('btn-reboot-bios');
        if (rebootBtn) {
            rebootBtn.addEventListener('click', () => {
                const logBox = document.getElementById('kernel-log-box');
                const timeStr = new Date().toTimeString().split(' ')[0];
                const newEntry = document.createElement('div');
                newEntry.className = 'text-secondary-container font-label-sm';
                newEntry.textContent = `[${timeStr}] BIOS_RESET: SYS_OP triggered soft BIOS reset. Reloading NVRAM vectors...`;
                logBox.insertBefore(newEntry, logBox.lastElementChild);
                logBox.scrollTop = logBox.scrollHeight;
            });
        }

        const dumpBtn = document.getElementById('btn-dump-logs');
        if (dumpBtn) {
            dumpBtn.addEventListener('click', () => {
                const logBox = document.getElementById('kernel-log-box');
                const timeStr = new Date().toTimeString().split(' ')[0];
                const newEntry = document.createElement('div');
                newEntry.className = 'text-tertiary-container font-label-sm';
                newEntry.textContent = `[${timeStr}] LOG_DUMP: Archive sys_op_logs_${timeStr.replace(/:/g, '')}.bin compiled successfully.`;
                logBox.insertBefore(newEntry, logBox.lastElementChild);
                logBox.scrollTop = logBox.scrollHeight;
            });
        }
    </script>
</main>
