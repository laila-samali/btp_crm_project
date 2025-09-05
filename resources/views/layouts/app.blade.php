<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Application BTP')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        /* Fixer la taille des icônes pour éviter les glitchs */
        .sidebar-icon {
            width: 1.5rem; /* Taille explicite des icônes */
            height: 1.5rem;
            flex-shrink: 0;
            transition: none; /* Désactiver les transitions sur les icônes */
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

<div class="flex h-screen" x-data="{ sidebarOpen: false }">
    <!-- Sidebar -->
    <div :class="sidebarOpen ? 'w-64' : 'w-20'" class="bg-white text-gray-900 flex flex-col shadow-lg transition-all duration-300">
        <div class="h-16 flex items-center justify-between px-4 border-b border-gray-300">
            <span :class="sidebarOpen ? 'block' : 'hidden'" class="text-xl font-bold whitespace-nowrap">Application BTP</span>
            <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 hover:text-gray-800">
                <svg :class="sidebarOpen ? 'h-6 w-6' : 'hidden'" class="sidebar-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"></path>
                </svg>
                <svg :class="!sidebarOpen ? 'h-6 w-6' : 'hidden'" class="sidebar-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </button>
        </div>
        <nav class="flex-1 px-2 py-4">
            <ul class="space-y-2">
                <!-- Menu complet -->
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 p-2 rounded-md">
                        <svg class="sidebar-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                        </svg>
                        <span :class="sidebarOpen ? 'block whitespace-nowrap' : 'hidden'">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}" class="flex items-center space-x-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 p-2 rounded-md">
                        <svg class="sidebar-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"></path>
                        </svg>
                        <span :class="sidebarOpen ? 'block whitespace-nowrap' : 'hidden'">Utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('lots.index') }}" class="flex items-center space-x-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 p-2 rounded-md">
                        <svg class="sidebar-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3"></path>
                        </svg>
                        <span :class="sidebarOpen ? 'block whitespace-nowrap' : 'hidden'">Lots</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sous_lots.index') }}" class="flex items-center space-x-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 p-2 rounded-md">
                        <svg class="sidebar-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"></path>
                        </svg>
                        <span :class="sidebarOpen ? 'block whitespace-nowrap' : 'hidden'">Sous-Lots</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('bon_livraisons.index') }}" class="flex items-center space-x-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 p-2 rounded-md">
                        <svg class="sidebar-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"></path>
                        </svg>
                        <span :class="sidebarOpen ? 'block whitespace-nowrap' : 'hidden'">Bon de Livraison</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('devis.index') }}" class="flex items-center space-x-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 p-2 rounded-md">
                        <svg class="sidebar-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"></path>
                        </svg>
                        <span :class="sidebarOpen ? 'block whitespace-nowrap' : 'hidden'">Devis</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('factures.index') }}" class="flex items-center space-x-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 p-2 rounded-md">
                        <svg class="sidebar-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"></path>
                        </svg>
                        <span :class="sidebarOpen ? 'block whitespace-nowrap' : 'hidden'">Factures</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('paiements.index') }}" class="flex items-center space-x-2 text-gray-700 hover:bg-gray-200 hover:text-gray-900 p-2 rounded-md">
                        <svg class="sidebar-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z"></path>
                        </svg>
                        <span :class="sidebarOpen ? 'block whitespace-nowrap' : 'hidden'">Paiements</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <header class="h-16 bg-white shadow px-4 flex items-center justify-between border-b border-gray-300">
            <div>
                <h1 class="text-xl font-bold">@yield('title', 'Dashboard')</h1>
            </div>
        </header>
        <main class="flex-1 bg-gray-50 p-6">
            @yield('content')
        </main>
    </div>
</div>

</body>
</html>