<body>
    <!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-[#004666] fixed top-0 left-0 right-0 z-10">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/bars-3

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x-mark

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="block h-8 w-auto lg:hidden" src="<?= base_url('assets/'); ?>img/login/iportal-03 1.png">
          <img class="hidden h-8 w-auto lg:block" src="<?= base_url('assets/'); ?>img/login/iportal-03 1.png">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Berita</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Liputan</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Regulasi</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pengumuman</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Artikel</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kliping</a>
            
            <a href="#" id="dropdownTopik"  data-dropdown-toggle="dropdownAja" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium inline-flex">Topik <svg class="ml-2 mt-0.5 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></a>

            <!-- <button id="dropdownTopik" data-dropdown-toggle="dropdownAja" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown divider <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button> -->

            <!-- Dropdown menu -->
            <div id="dropdownAja" class="hidden z-10 w-44 bg-white  rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTopik">
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-slate-300 dark:hover:bg-gray-600 dark:hover:text-white">Layanan umum & properti</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-slate-300 dark:hover:bg-gray-600 dark:hover:text-white">Penomoran Surat</a>
                </li>
              
                </ul>
                
            </div>
            
            <a href="#" id="dropdownTautan" data-dropdown-toggle="dropdownDivider" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium inline-flex">Tautan <svg class="ml-2 mt-0.5 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></a>

            

            <!-- Dropdown menu -->
            <div id="dropdownDivider" class="hidden z-10 w-44 bg-white text-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTautan">
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-slate-300 dark:hover:bg-gray-600 dark:hover:text-white">Inti</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-slate-300 dark:hover:bg-gray-600 dark:hover:text-white">Koperasi</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-slate-300 dark:hover:bg-gray-600 dark:hover:text-white">Serikat Kerja</a>
                </li>
                </ul>
                
            </div>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <p class="text-gray-300"><?= $user["username"]; ?></p>

        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="dropdownUser"  data-dropdown-toggle="dropdownMenu">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="<?= base_url('assets/img/profile/') . $user["avatar"]; ?>" alt="">
            </button>
          </div>

          <div id="dropdownMenu" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUser">
                <li>
               
                    <a href="<?= base_url('user/profile/') .$user['username']; ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-300"> <i class="fa-solid fa-user fa-fw mr-2"></i>Profil Saya</a>
                </li>
                <li>
                    <a href="<?= base_url('user/editprofile/') .$user['username']; ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-300"><i class="fa-solid fa-user-edit fa-fw mr-2"></i>Edit Profil</a>
                </li>
                <li>
                    <a href="<?= base_url('auth/logout'); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-300"><i class="fa-solid fa-right-from-bracket fa-fw mr-2"></i>Logout</a>
                </li>
                </ul>
                
            </div>
          <!-- <div id="dropdownUser" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"> -->
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <!-- <a href="<?= base_url('user/profile'); ?>" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Profil Saya</a>
            <a href="<?= base_url('user/editprofile'); ?>" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Edit Profil</a>
            <a href="<?= base_url('auth/logout'); ?>" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Logout</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pt-2 pb-3"> -->
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
       <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
    </div>
  </div> 
</nav>

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">I-Portal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liputan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Regulasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kliping</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Topik
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Inti</a>
                            <a class="dropdown-item" href="#">Koperasi Inti</a>
                            <a class="dropdown-item" href="#">Serikat Pekerja INTI</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tautan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Layanan umum & properti</a>
                            <a class="dropdown-item" href="#">Penomoran Surat</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                   <!-- <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 " style="font-size: 18px;"><?= $user['username']; ?></span>
                            <img class="img-profile rounded-circle " style="height: 45px; width: 45px;" src="<?= base_url('assets/img/profile/' . $user['avatar']); ?>">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                My Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item logout" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav> -->