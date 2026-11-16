<div>
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav" id="drawer-navigation">

        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">

            <!-- Search -->
            <form action="#" method="GET" class="md:hidden mb-2">
                <label for="sidebar-search" class="sr-only">Search</label>

                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                            </path>
                        </svg>
                    </div>

                    <input type="text" name="search" id="sidebar-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Search" />
                </div>
            </form>

            <!-- Menu -->
            <ul class="space-y-2">

                <p class="px-3 pt-4 pb-2 text-[16px] font-bold uppercase tracking-wider text-gray-100">
                    MENU
                </p>

                <div class="my-3 h-px w-full bg-gray-200 dark:bg-gray-700"></div>

                <!-- Dashboard -->
                <x-admin.menu-item href="/admin/dashboard" label="Dashboard" icon='
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                ' />

                <!-- About -->
                <x-admin.menu-item href="/admin/about" label="About" icon='
                    <path fill-rule="evenodd"
                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                        clip-rule="evenodd"/>
                ' />

                <!-- Student -->
                <x-admin.menu-item href="/admin/student" label="Student" icon='
                    <path fill-rule="evenodd"
                        d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Z"
                        clip-rule="evenodd"/>
                ' />

                <!-- Teachers -->
                <x-admin.menu-item href="/admin/teachers" label="Teachers" icon='
                    <path stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        d="M12 6a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM5 20a7 7 0 0 1 14 0M3 5h18M3 9h3m12 0h3"/>
                ' />

                <!-- Classroom -->
                <x-admin.menu-item href="/admin/classroom" label="Classroom" icon='
                    <path stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z"/>
                ' />

                <!-- Subjects -->
                <x-admin.menu-item href="/admin/subjects" label="Subjects" icon='
                     <path stroke="currentColor" stroke-linecap="round"
                         stroke-linejoin="round" stroke-width="2"
                            d="M4 5h16M4 12h16M4 19h16"/>
                ' />

            </ul>

        </div>
    </aside>
</div>