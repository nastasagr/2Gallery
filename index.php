<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>2Gallery | Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-slate-100 text-slate-900">
    <div x-data="{
      sidebarOpen: false,
      activeItem: 'dashboard',
      openMenus: {
        clients: true,
        galleries: true
      }
    }" class="min-h-screen">
        <div class="flex min-h-screen">
            <!-- Mobile overlay -->
            <div x-show="sidebarOpen" x-transition.opacity
                class="fixed inset-0 z-40 bg-slate-900/40 backdrop-blur-sm lg:hidden" @click="sidebarOpen = false">
            </div>

            <!-- Sidebar -->
            <aside
                class="fixed inset-y-0 left-0 z-50 flex w-72 transform flex-col justify-between border-r border-slate-200 bg-white px-5 py-6 shadow-xl transition-transform duration-300 lg:static lg:translate-x-0 lg:shadow-none"
                :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
                <div class="min-h-0 flex-1 overflow-y-auto">
                    <!-- Top -->
                    <div class="mb-8 flex items-center justify-between">
                        <div class="flex items-center gap-3 px-2">
                            <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-red-100 text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 7c2.5 0 2.5-2 5-2s2.5 2 5 2 2.5-2 5-2M4 13c2.5 0 2.5-2 5-2s2.5 2 5 2 2.5-2 5-2" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-slate-900">2Gallery</p>
                                <p class="text-xs text-slate-500">Administrator Panel/p>
                            </div>
                        </div>

                        <button class="rounded-xl p-2 text-slate-500 hover:bg-slate-100 hover:text-slate-900 lg:hidden"
                            @click="sidebarOpen = false" aria-label="Close sidebar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6 6 18" />
                            </svg>
                        </button>
                    </div>

                    <!-- Main menu -->
                    <nav class="space-y-1">
                        <!-- Dashboard -->
                        <button @click="activeItem = 'dashboard'"
                            class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-left text-sm font-medium transition"
                            :class="activeItem === 'dashboard'
                ? 'bg-slate-100 font-semibold text-slate-900'
                : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                :class="activeItem === 'dashboard' ? 'text-slate-800' : 'text-slate-500'"
                                class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>

                            Dashboard
                        </button>

                        <!-- Clients with submenu -->
                        <div class="rounded-2xl">
                            <button @click="openMenus.clients = !openMenus.clients"
                                class="flex w-full items-center justify-between rounded-xl px-4 py-3 text-left text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-slate-900"
                                :class="openMenus.clients ? 'bg-slate-50 text-slate-900' : ''">
                                <span class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        :class="activeItem === 'dashboard' ? 'text-slate-800' : 'text-slate-500'"
                                        class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                    </svg>

                                    Clients
                                </span>

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transition-transform duration-200"
                                    :class="openMenus.clients ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div x-show="openMenus.clients" x-collapse class="mt-1 space-y-1 pl-4">
                                <button @click="activeItem = 'all-clients'"
                                    class="flex w-full items-center rounded-xl px-4 py-2.5 text-sm transition" :class="activeItem === 'all-clients'
                    ? 'bg-red-50 font-semibold text-red-700'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                                    All Clients
                                </button>

                                <button @click="activeItem = 'new-client'"
                                    class="flex w-full items-center rounded-xl px-4 py-2.5 text-sm transition" :class="activeItem === 'new-client'
                    ? 'bg-red-50 font-semibold text-red-700'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                                    Add New Client
                                </button>

                                <button @click="activeItem = 'vip-clients'"
                                    class="flex w-full items-center rounded-xl px-4 py-2.5 text-sm transition" :class="activeItem === 'vip-clients'
                    ? 'bg-red-50 font-semibold text-red-700'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                                    VIP Clients
                                </button>
                            </div>
                        </div>

                        <!-- Galleries with submenu -->
                        <div class="rounded-2xl">
                            <button @click="openMenus.galleries = !openMenus.galleries"
                                class="flex w-full items-center justify-between rounded-xl px-4 py-3 text-left text-sm font-medium text-slate-600 transition hover:bg-slate-50 hover:text-slate-900"
                                :class="openMenus.galleries ? 'bg-slate-50 text-slate-900' : ''">
                                <span class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                    </svg>

                                    Galleries
                                </span>

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transition-transform duration-200"
                                    :class="openMenus.galleries ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div x-show="openMenus.galleries" x-collapse class="mt-1 space-y-1 pl-4">
                                <button @click="activeItem = 'all-galleries'"
                                    class="flex w-full items-center rounded-xl px-4 py-2.5 text-sm transition" :class="activeItem === 'all-galleries'
                    ? 'bg-red-50 font-semibold text-red-700'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                                    All Galleries
                                </button>

                                <button @click="activeItem = 'shared-galleries'"
                                    class="flex w-full items-center rounded-xl px-4 py-2.5 text-sm transition" :class="activeItem === 'shared-galleries'
                    ? 'bg-red-50 font-semibold text-red-700'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                                    Shared via Code
                                </button>

                                <button @click="activeItem = 'draft-galleries'"
                                    class="flex w-full items-center rounded-xl px-4 py-2.5 text-sm transition" :class="activeItem === 'draft-galleries'
                    ? 'bg-red-50 font-semibold text-red-700'
                    : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                                    Draft Galleries
                                </button>
                            </div>
                        </div>

                        <!-- Favorites -->
                        <button @click="activeItem = 'favorites'"
                            class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-left text-sm font-medium transition"
                            :class="activeItem === 'favorites'
                ? 'bg-slate-100 font-semibold text-slate-900'
                : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>

                            Favorites
                        </button>

                        <!-- Settings -->
                        <button @click="activeItem = 'settings'"
                            class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-left text-sm font-medium transition"
                            :class="activeItem === 'settings'
                ? 'bg-slate-100 font-semibold text-slate-900'
                : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            Settings
                        </button>
                    </nav>

                    <!-- Recent clients -->
                    <div class="mt-10">
                        <p class="mb-4 px-4 text-xs font-semibold uppercase tracking-wider text-slate-400">
                            Recent Clients
                        </p>

                        <div class="space-y-2">
                            <button @click="activeItem = 'emma-mark'"
                                class="flex w-full items-center gap-3 rounded-xl px-4 py-2.5 text-left text-sm transition"
                                :class="activeItem === 'emma-mark'
                  ? 'bg-rose-50 font-semibold text-rose-700'
                  : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                                <span
                                    class="flex h-8 w-8 items-center justify-center rounded-full bg-rose-100 text-xs font-semibold text-rose-600">EM</span>
                                Emma & Mark
                            </button>

                            <button @click="activeItem = 'alex-lewis'"
                                class="flex w-full items-center gap-3 rounded-xl px-4 py-2.5 text-left text-sm transition"
                                :class="activeItem === 'alex-lewis'
                  ? 'bg-sky-50 font-semibold text-sky-700'
                  : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                                <span
                                    class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-xs font-semibold text-sky-600">AL</span>
                                Alex Lewis
                            </button>

                            <button @click="activeItem = 'sofia-brown'"
                                class="flex w-full items-center gap-3 rounded-xl px-4 py-2.5 text-left text-sm transition"
                                :class="activeItem === 'sofia-brown'
                  ? 'bg-amber-50 font-semibold text-amber-700'
                  : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'">
                                <span
                                    class="flex h-8 w-8 items-center justify-center rounded-full bg-amber-100 text-xs font-semibold text-amber-600">SB</span>
                                Sofia Brown
                            </button>
                        </div>
                    </div>
                </div>

                <!-- User -->
                <div class="mt-6 border-t border-slate-200 pt-5">
                    <div class="flex items-center gap-3">
                        <img src="https://i.pravatar.cc/100?img=32" alt="User"
                            class="h-10 w-10 rounded-full object-cover" />
                        <div>
                            <p class="text-sm font-semibold text-slate-900">John Doe</p>
                            <p class="text-xs text-slate-500">Photographer</p>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main content -->
            <div class="flex min-w-0 flex-1 flex-col">
                <!-- Topbar -->
                <header class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur">
                    <div class="flex items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                        <div class="flex items-center gap-3">
                            <button
                                class="rounded-xl border border-slate-200 bg-white p-2 text-slate-600 hover:bg-slate-50 lg:hidden"
                                @click="sidebarOpen = true" aria-label="Open sidebar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>

                            <div>
                                <h1 class="text-xl font-bold text-slate-900 sm:text-2xl">Dashboard</h1>
                                <p class="text-sm text-slate-500">Manage your portfolio, clients and private galleries.
                                </p>
                            </div>
                        </div>

                        <div class="hidden items-center gap-3 sm:flex">
                            <button
                                class="rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">
                                New Client
                            </button>
                            <button
                                class="rounded-xl bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-red-700">
                                Create Gallery
                            </button>
                        </div>
                    </div>
                </header>

                <!-- Page -->
                <main class="flex-1 p-4 sm:p-6 lg:p-8">
                    <div class="mb-4 flex gap-3 sm:hidden">
                        <button
                            class="flex-1 rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100">
                            New Client
                        </button>
                        <button
                            class="flex-1 rounded-xl bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-red-700">
                            Create Gallery
                        </button>
                    </div>

                    <!-- Debug / current active -->
                    <div class="mb-6 rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                        <p class="text-sm text-slate-500">Current active item</p>
                        <p class="mt-1 text-base font-semibold text-slate-900" x-text="activeItem"></p>
                    </div>

                    <!-- Stats -->
                    <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-3">
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <p class="text-sm text-slate-500">Total Clients</p>
                            <h3 class="mt-2 text-2xl font-bold text-slate-900">0</h3>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <p class="text-sm text-slate-500">Active Galleries</p>
                            <h3 class="mt-2 text-2xl font-bold text-slate-900">0</h3>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <p class="text-sm text-slate-500">Shared with Code</p>
                            <h3 class="mt-2 text-2xl font-bold text-slate-900">0</h3>
                        </div>
                    </div>

                    <!-- Galleries -->
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-5 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                            <div>
                                <h2 class="text-lg font-semibold text-slate-900">Client Galleries</h2>
                                <p class="text-sm text-slate-500">Organize images per client and share access securely.
                                </p>
                            </div>

                            <input type="text" placeholder="Search gallery..."
                                class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2 text-sm outline-none placeholder:text-slate-400 focus:border-red-400 focus:bg-white md:w-72" />
                        </div>

                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3">
                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <div
                                    class="mb-3 h-40 rounded-xl bg-[url('https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=800&q=80')] bg-cover bg-center">
                                </div>
                                <h3 class="font-semibold text-slate-900">Emma & Mark Wedding</h3>
                                <p class="mt-1 text-sm text-slate-500">248 photos • Auth Code Enabled</p>
                            </div>

                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <div
                                    class="mb-3 h-40 rounded-xl bg-[url('https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?auto=format&fit=crop&w=800&q=80')] bg-cover bg-center">
                                </div>
                                <h3 class="font-semibold text-slate-900">Alex Portrait Session</h3>
                                <p class="mt-1 text-sm text-slate-500">96 photos • Private Gallery</p>
                            </div>

                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <div
                                    class="mb-3 h-40 rounded-xl bg-[url('https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80')] bg-cover bg-center">
                                </div>
                                <h3 class="font-semibold text-slate-900">Sofia Engagement</h3>
                                <p class="mt-1 text-sm text-slate-500">132 photos • Shared via Code</p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>