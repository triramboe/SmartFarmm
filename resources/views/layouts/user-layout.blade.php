<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Add some styles to overlay the sidebar on top of the main content on small screens */
        @media (max-width: 768px) {
            .overlay {
                position: fixed;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 999;
                display: none;
            }

            .overlay.active {
                display: block;
            }

            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                z-index: 1000;
            }
        }
    </style>
</head>

<body class="font-sans">
    <div class="min-h-screen flex">

        <!-- Overlay for small screens -->
        <div class="overlay"></div>
        <!-- Sidebar -->
        <aside class="bg-gray-800 text-white w-52 p-4 hidden lg:block sidebar ">

            <button class="close-sidebar-button text-white mb-4 lg:hidden">&#10006;</button>

            <!-- Sidebar Menu -->
            <nav>
                <ul>
                    <li class="mb-2">
                        <a href="#" class="block text-gray-300 hover:text-white">Home</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block text-gray-300 hover:text-white">Profile</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block text-gray-300 hover:text-white">Settings</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-4">
            @yield('content')
        </main>
    </div>


    <!--sidebar-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebar = document.querySelector('.sidebar');
            const toggleButton = document.querySelector('.toggle-button');
            const closeSidebarButton = document.querySelector('.close-sidebar-button');
            const overlay = document.querySelector('.overlay');

            toggleButton.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
                overlay.classList.toggle('active');
            });

            closeSidebarButton.addEventListener('click', function() {
                sidebar.classList.add('hidden');
                overlay.classList.remove('active');
            });
        });
    </script>


    @livewireScripts
</body>

</html>