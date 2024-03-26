<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Heroicons -->
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react/outline.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="h-screen flex overflow-hidden bg-gray-100">
        <!-- Sidebar -->
        <div class="bg-transparent 0 w-64 overflow-y-auto">
            <div class="py-4 px-6">
                <!-- Sidebar branding -->
                <h2 class="text-grey-800 text-xl font-bold mb-8 ">Admin Dashboard</h2>
                <!-- Sidebar links -->
                <ul class="space-y-2">
                    <li>
                        <a href="#"
                            class="text-gray-800 hover:bg-gray-800 hover:text-white  px-4 py-2 rounded-md text-sm font-medium flex items-center space-x-2">
                            <svg class="h-6 w-6 text-gray-800" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-800 hover:bg-gray-800 hover:text-white block px-4 py-2 rounded-md text-sm font-medium flex items-center space-x-2">
                            <svg class="h-6 w-6 text-gray-800" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-800 hover:bg-gray-800 hover:text-white block px-4 py-2 rounded-md text-sm font-medium flex items-center space-x-2">
                            <svg class="h-6 w-6 text-gray-800" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Content area -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <!-- Top bar -->
            <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 shadow">
                <!-- Top bar content -->
                <button
                    class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-600 md:hidden">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div class="flex-1 px-4 flex justify-between">
                    <div class="flex-1 flex">
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Profile dropdown -->
                        <div class="ml-3 relative">
                            <div>
                                <button
                                    class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid">
                                    <img class="h-8 w-8 rounded-full"
                                        src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content area -->
            <div class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                <!-- Your content goes here -->
                
                <div class="flex justify-center m-8">
                    
                    
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
