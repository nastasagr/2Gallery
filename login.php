<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>2Gallery | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-100 text-slate-900">
    <div class="flex min-h-screen">
        <!-- Left Side -->
        <div class="hidden lg:flex lg:w-1/2 xl:w-3/5 bg-white border-r border-slate-200">
            <div class="flex w-full flex-col justify-between p-10 xl:p-14">
                <div>
                    <div class="flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-red-100 text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 7c2.5 0 2.5-2 5-2s2.5 2 5 2 2.5-2 5-2M4 13c2.5 0 2.5-2 5-2s2.5 2 5 2 2.5-2 5-2" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-base font-semibold text-slate-900">2Gallery</p>
                            <p class="text-sm text-slate-500">Client Gallery Platform</p>
                        </div>
                    </div>

                    <div class="mt-20 max-w-xl">
                        <p class="inline-flex rounded-full bg-red-50 px-3 py-1 text-sm font-medium text-red-700">
                            Private galleries made simple
                        </p>

                        <h1 class="mt-6 text-4xl font-bold leading-tight text-slate-900 xl:text-5xl">
                            Share client memories beautifully and securely.
                        </h1>

                        <p class="mt-5 text-lg leading-8 text-slate-600">
                            Organize photos by client, create elegant private galleries, and protect access with secure
                            auth codes.
                        </p>

                        <div class="mt-10 grid grid-cols-1 gap-4 sm:grid-cols-3">
                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <p class="text-2xl font-bold text-slate-900">250+</p>
                                <p class="mt-1 text-sm text-slate-500">Client galleries</p>
                            </div>

                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <p class="text-2xl font-bold text-slate-900">12k</p>
                                <p class="mt-1 text-sm text-slate-500">Photos delivered</p>
                            </div>

                            <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                <p class="text-2xl font-bold text-slate-900">100%</p>
                                <p class="mt-1 text-sm text-slate-500">Private access</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div
                        class="h-40 rounded-3xl bg-[url('https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=800&q=80')] bg-cover bg-center">
                    </div>
                    <div
                        class="h-40 rounded-3xl bg-[url('https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80')] bg-cover bg-center">
                    </div>
                    <div
                        class="h-40 rounded-3xl bg-[url('https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?auto=format&fit=crop&w=800&q=80')] bg-cover bg-center">
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side -->
        <div class="flex w-full items-center justify-center p-6 sm:p-8 lg:w-1/2 xl:w-2/5">
            <div class="w-full max-w-md">
                <div class="mb-8 lg:hidden">
                    <div class="flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-red-100 text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 7c2.5 0 2.5-2 5-2s2.5 2 5 2 2.5-2 5-2M4 13c2.5 0 2.5-2 5-2s2.5 2 5 2 2.5-2 5-2" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-base font-semibold text-slate-900">PhotoFlow</p>
                            <p class="text-sm text-slate-500">Client Gallery Platform</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
                    <div>
                        <h2 class="text-3xl font-bold text-slate-900">Welcome back</h2>
                        <p class="mt-2 text-sm text-slate-500">
                            Sign in to manage your clients and galleries.
                        </p>
                    </div>

                    <form class="mt-8 space-y-5">
                        <div>
                            <label for="email" class="mb-2 block text-sm font-medium text-slate-700">
                                Email address
                            </label>
                            <input id="email" type="email" placeholder="you@example.com"
                                class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-400 focus:bg-white focus:ring-4 focus:ring-red-100" />
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between">
                                <label for="password" class="block text-sm font-medium text-slate-700">
                                    Password
                                </label>
                                <a href="#" class="text-sm font-medium text-red-600 hover:text-red-700">
                                    Forgot password?
                                </a>
                            </div>

                            <input id="password" type="password" placeholder="Enter your password"
                                class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-400 focus:bg-white focus:ring-4 focus:ring-red-100" />
                        </div>

                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-3 text-sm text-slate-600">
                                <input type="checkbox"
                                    class="h-4 w-4 rounded border-slate-300 text-red-600 focus:ring-red-500" />
                                Remember me
                            </label>
                        </div>

                        <button type="submit"
                            class="inline-flex w-full items-center justify-center rounded-2xl bg-red-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-100">
                            Sign in
                        </button>
                    </form>

                    <div class="my-6 flex items-center gap-4">
                        <div class="h-px flex-1 bg-slate-200"></div>
                        <span class="text-xs font-medium uppercase tracking-wider text-slate-400">or</span>
                        <div class="h-px flex-1 bg-slate-200"></div>
                    </div>

                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                        <button
                            class="inline-flex items-center justify-center gap-2 rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-slate-50">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill="currentColor"
                                    d="M21.35 11.1H12v2.98h5.36c-.23 1.52-1.74 4.47-5.36 4.47-3.23 0-5.86-2.67-5.86-5.96s2.63-5.96 5.86-5.96c1.84 0 3.07.79 3.77 1.46l2.58-2.5C16.7 4.04 14.57 3 12 3 6.98 3 3 7.03 3 12s3.98 9 9 9c5.19 0 8.62-3.64 8.62-8.77 0-.59-.06-1.03-.27-1.13Z" />
                            </svg>
                            Google
                        </button>

                        <button
                            class="inline-flex items-center justify-center gap-2 rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-700 transition hover:bg-slate-50">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M16.365 1.43c0 1.14-.466 2.232-1.167 3.038-.75.87-1.976 1.54-3.057 1.456-.137-1.087.39-2.213 1.092-3 .775-.87 2.102-1.494 3.132-1.494Zm3.87 16.18c-.495 1.13-.734 1.635-1.372 2.61-.89 1.356-2.145 3.05-3.702 3.064-1.383.013-1.74-.902-3.617-.89-1.878.01-2.27.907-3.653.894-1.558-.015-2.747-1.544-3.638-2.9-2.49-3.79-2.75-8.24-1.215-10.6 1.09-1.68 2.814-2.66 4.434-2.66 1.65 0 2.687.907 4.052.907 1.324 0 2.13-.91 4.038-.91 1.44 0 2.97.786 4.057 2.145-3.56 1.95-2.98 7.01.616 8.34Z" />
                            </svg>
                            Apple
                        </button>
                    </div>

                    <p class="mt-8 text-center text-sm text-slate-500">
                        Don’t have an account?
                        <a href="#" class="font-semibold text-red-600 hover:text-red-700">Create one</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>