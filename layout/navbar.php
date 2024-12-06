<div class="antialiased">
   <!-- Navbar -->
<nav class="bg-gray-800 shadow-sm px-4 py-3 fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center ">
        <div class="flex justify-start items-center">
            <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" class="p-2 mr-2 text-white rounded-lg cursor-pointer lg:hidden hover:bg-gray-700 focus:bg-gray-700 focus:ring-2 focus:ring-white">
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Lapor sini!</span>
            </button>

            <!-- Logo -->
            <a href="/" class="flex items-center justify-between mr-4">
                <span class="self-center text-2xl font-semibold text-white whitespace-nowrap">Report <span class="text-green-400 font-bold">Aja!</span></span>
            </a>

            <!-- Tab Name -->
            <h4 class="hidden lg:block lg:text-2xl font-bold text-blue-400 ml-5"><?= ucwords($_GET['page']) ?></h4>
        </div>

        <div class="flex items-center gap-3 lg:order-2">
            <a href="index.php?page=create" type="button" class="group inline-flex items-center px-4 py-2 text-sm font-medium text-blue-300 bg-transparent border border-blue-400 rounded hover:bg-blue-600 hover:text-white focus:z-10 focus:ring-2">
                <svg class="w-4 h-4 mr-2 text-blue-300 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                Buat laporan
            </a>

            <!-- User Profile -->
            <button type="button" class="flex mx-3 text-sm bg-gray-600 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-400" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full object-cover" src="https://cdn.pixabay.com/photo/2015/04/13/12/07/business-720429_1280.jpg" alt="user photo" />
            </button>
            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 w-56 text-base list-none bg-gray-700 divide-y divide-gray-500 shadow rounded-xl" id="dropdown">
                <div class="py-3 px-4">
                    <span class="block text-sm font-semibold text-white"><?= $_SESSION['name'] ?></span>
                    <span class="block text-sm text-gray-300 truncate"><?= $_SESSION['username'] ?></span>
                </div>
                <ul class="py-1 text-gray-300" aria-labelledby="dropdown">
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-600">My profile</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-600">Account settings</a>
                    </li>
                </ul>
                <ul class="py-1 text-gray-300" aria-labelledby="dropdown">
                    <li>
                        <a href="index.php?page=logout" class="block py-2 px-4 text-sm hover:bg-gray-600 rounded">Log out</a>
                    </li>
                </ul>
            </div>
            <!-- End of the user profile -->
        </div>
    </div>
</nav>
<!-- End of the Navbar -->
