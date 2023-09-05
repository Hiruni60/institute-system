<div class="min-h-full">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
      <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>
  
      <div class="fixed inset-0 z-40 flex">
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.
  
          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div class="relative flex w-full max-w-xs flex-1 flex-col bg-white pb-4 pt-5">
          <!--
            Close button, show/hide based on off-canvas menu state.
  
            Entering: "ease-in-out duration-300"
              From: "opacity-0"
              To: "opacity-100"
            Leaving: "ease-in-out duration-300"
              From: "opacity-100"
              To: "opacity-0"
          -->
          <div class="absolute right-0 top-0 -mr-12 pt-2">
            <button type="button" class="relative ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Close sidebar</span>
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
  
          <div class="flex flex-shrink-0 items-center px-4">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=purple&shade=500" alt="Your Company">
          </div>
          <div class="mt-5 h-0 flex-1 overflow-y-auto">
            <nav class="px-2">
              <div class="space-y-1">
                <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                <a href="#" class="bg-gray-100 text-gray-900 group flex items-center rounded-md px-2 py-2 text-base font-medium leading-5" aria-current="page">
                  <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
                  <svg class="text-gray-500 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  Home
                </a>
                <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center rounded-md px-2 py-2 text-base font-medium leading-5">
                  <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                  </svg>
                  My tasks
                </a>
                <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center rounded-md px-2 py-2 text-base font-medium leading-5">
                  <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  Recent
                </a>
              </div>
              <div class="mt-8">
                <h3 class="px-3 text-sm font-medium text-gray-500" id="mobile-teams-headline">Teams</h3>
                <div class="mt-1 space-y-1" role="group" aria-labelledby="mobile-teams-headline">
                  <a href="#" class="group flex items-center rounded-md px-3 py-2 text-base font-medium leading-5 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                    <span class="mr-4 h-2.5 w-2.5 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                    <span class="truncate">Engineering</span>
                  </a>
                  <a href="#" class="group flex items-center rounded-md px-3 py-2 text-base font-medium leading-5 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                    <span class="mr-4 h-2.5 w-2.5 bg-green-500 rounded-full" aria-hidden="true"></span>
                    <span class="truncate">Human Resources</span>
                  </a>
                  <a href="#" class="group flex items-center rounded-md px-3 py-2 text-base font-medium leading-5 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                    <span class="mr-4 h-2.5 w-2.5 bg-yellow-500 rounded-full" aria-hidden="true"></span>
                    <span class="truncate">Customer Success</span>
                  </a>
                </div>
              </div>
            </nav>
          </div>
        </div>
  
        <div class="w-14 flex-shrink-0" aria-hidden="true">
          <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
      </div>
    </div>
  
    <!-- Static sidebar for desktop -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-64 lg:flex-col lg:border-r lg:border-gray-200 lg:bg-gray-100 lg:pb-4 lg:pt-5">
      <div class="flex flex-shrink-0 items-center px-6">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=purple&shade=500" alt="Your Company">
      </div>
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="mt-5 flex h-0 flex-1 flex-col overflow-y-auto pt-1">
        <!-- User account dropdown -->
        <div class="relative inline-block px-3 text-left">
          <div>
            <button type="button" class="group w-full rounded-md bg-gray-100 px-3.5 py-2 text-left text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-100" id="options-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="flex w-full items-center justify-between">
                <span class="flex min-w-0 items-center justify-between space-x-3">
                  <img class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-300" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" alt="">
                  <span class="flex min-w-0 flex-1 flex-col">
                    <span class="truncate text-sm font-medium text-gray-900">Jessy Schwarz</span>
                    <span class="truncate text-sm text-gray-500">@jessyschwarz</span>
                  </span>
                </span>
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                </svg>
              </span>
            </button>
          </div>
  
          <!--
            Dropdown menu, show/hide based on menu state.
  
            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div class="absolute left-0 right-0 z-10 mx-3 mt-1 origin-top divide-y divide-gray-200 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-button" tabindex="-1">
            <div class="py-1" role="none">
              <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="options-menu-item-0">View profile</a>
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="options-menu-item-1">Settings</a>
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="options-menu-item-2">Notifications</a>
            </div>
            <div class="py-1" role="none">
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="options-menu-item-3">Get desktop app</a>
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="options-menu-item-4">Support</a>
            </div>
            <div class="py-1" role="none">
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="options-menu-item-5">Logout</a>
            </div>
          </div>
        </div>
        <!-- Sidebar Search -->
        <div class="mt-5 px-3">
          <label for="search" class="sr-only">Search</label>
          <div class="relative mt-1 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3" aria-hidden="true">
              <svg class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
              </svg>
            </div>
            <input type="text" name="search" id="search" class="block w-full rounded-md border-0 py-1.5 pl-9 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Search">
          </div>
        </div>
        <!-- Navigation -->
        <nav class="mt-6 px-3">
          <div class="space-y-1">
            <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-700 hover:bg-gray-50 hover:text-gray-900" -->
            <a href="#" class="bg-gray-200 text-gray-900 group flex items-center rounded-md px-2 py-2 text-sm font-medium" aria-current="page">
              <!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
              <svg class="text-gray-500 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
              </svg>
              Home
            </a>
            <a href="#" class="text-gray-700 hover:bg-gray-50 hover:text-gray-900 group flex items-center rounded-md px-2 py-2 text-sm font-medium">
              <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
              </svg>
              My tasks
            </a>
            <a href="#" class="text-gray-700 hover:bg-gray-50 hover:text-gray-900 group flex items-center rounded-md px-2 py-2 text-sm font-medium">
              <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Recent
            </a>
          </div>
          <div class="mt-8">
            <!-- Secondary navigation -->
            <h3 class="px-3 text-sm font-medium text-gray-500" id="desktop-teams-headline">Teams</h3>
            <div class="mt-1 space-y-1" role="group" aria-labelledby="desktop-teams-headline">
              <a href="#" class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">
                <span class="mr-4 h-2.5 w-2.5 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                <span class="truncate">Engineering</span>
              </a>
              <a href="#" class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">
                <span class="mr-4 h-2.5 w-2.5 bg-green-500 rounded-full" aria-hidden="true"></span>
                <span class="truncate">Human Resources</span>
              </a>
              <a href="#" class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">
                <span class="mr-4 h-2.5 w-2.5 bg-yellow-500 rounded-full" aria-hidden="true"></span>
                <span class="truncate">Customer Success</span>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Main column -->
    <div class="flex flex-col lg:pl-64">
      <!-- Search header -->
      <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 border-b border-gray-200 bg-white lg:hidden">
        <!-- Sidebar toggle, controls the 'sidebarOpen' sidebar state. -->
        <button type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 lg:hidden">
          <span class="sr-only">Open sidebar</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
          </svg>
        </button>
        <div class="flex flex-1 justify-between px-4 sm:px-6 lg:px-8">
          <div class="flex flex-1">
            <form class="flex w-full md:ml-0" action="#" method="GET">
              <label for="search-field" class="sr-only">Search</label>
              <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center">
                  <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                  </svg>
                </div>
                <input id="search-field" name="search-field" class="block h-full w-full border-transparent py-2 pl-8 pr-3 text-gray-900 focus:border-transparent focus:outline-none focus:ring-0 focus:placeholder:text-gray-400 sm:text-sm" placeholder="Search" type="search">
              </div>
            </form>
          </div>
          <div class="flex items-center">
            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>
  
              <!--
                Dropdown menu, show/hide based on menu state.
  
                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right divide-y divide-gray-200 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <div class="py-1" role="none">
                  <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                  <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="user-menu-item-0">View profile</a>
                  <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                  <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="user-menu-item-2">Notifications</a>
                </div>
                <div class="py-1" role="none">
                  <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="user-menu-item-3">Get desktop app</a>
                  <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="user-menu-item-4">Support</a>
                </div>
                <div class="py-1" role="none">
                  <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="user-menu-item-5">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <main class="flex-1">
        <!-- Page title & actions -->
        <div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
          <div class="min-w-0 flex-1">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">Home</h1>
          </div>
          <div class="mt-4 flex sm:ml-4 sm:mt-0">
            <button type="button" class="sm:order-0 order-1 ml-3 inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:ml-0">Share</button>
            <button type="button" class="order-0 inline-flex items-center rounded-md bg-purple-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-purple-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600 sm:order-1 sm:ml-3">Create</button>
          </div>
        </div>
        <!-- Pinned projects -->
        <div class="mt-6 px-4 sm:px-6 lg:px-8">
          <h2 class="text-sm font-medium text-gray-900">Pinned Projects</h2>
          <ul role="list" class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 xl:grid-cols-4">
            <li class="relative col-span-1 flex rounded-md shadow-sm">
              <div class="flex w-16 flex-shrink-0 items-center justify-center bg-pink-600 rounded-l-md text-sm font-medium text-white">GA</div>
              <div class="flex flex-1 items-center justify-between truncate rounded-r-md border-b border-r border-t border-gray-200 bg-white">
                <div class="flex-1 truncate px-4 py-2 text-sm">
                  <a href="#" class="font-medium text-gray-900 hover:text-gray-600">GraphQL API</a>
                  <p class="text-gray-500">12 Members</p>
                </div>
                <div class="flex-shrink-0 pr-2">
                  <button type="button" class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2" id="pinned-project-options-menu-0-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open options</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                    </svg>
                  </button>
  
                  <!--
                    Dropdown menu, show/hide based on menu state.
  
                    Entering: "transition ease-out duration-100"
                      From: "transform opacity-0 scale-95"
                      To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                      From: "transform opacity-100 scale-100"
                      To: "transform opacity-0 scale-95"
                  -->
                  <div class="absolute right-10 top-3 z-10 mx-3 mt-1 w-48 origin-top-right divide-y divide-gray-200 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="pinned-project-options-menu-0-button" tabindex="-1">
                    <div class="py-1" role="none">
                      <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                      <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="pinned-project-options-menu-0-item-0">View</a>
                    </div>
                    <div class="py-1" role="none">
                      <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="pinned-project-options-menu-0-item-1">Removed from pinned</a>
                      <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="pinned-project-options-menu-0-item-2">Share</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
  
            <!-- More items... -->
          </ul>
        </div>
  
        <!-- Projects list (only on smallest breakpoint) -->
        <div class="mt-10 sm:hidden">
          <div class="px-4 sm:px-6">
            <h2 class="text-sm font-medium text-gray-900">Projects</h2>
          </div>
          <ul role="list" class="mt-3 divide-y divide-gray-100 border-t border-gray-200">
            <li>
              <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
                <span class="flex items-center space-x-3 truncate">
                  <span class="h-2.5 w-2.5 flex-shrink-0 rounded-full bg-pink-600" aria-hidden="true"></span>
                  <span class="truncate text-sm font-medium leading-6">
                    GraphQL API
                    <span class="truncate font-normal text-gray-500">in Engineering</span>
                  </span>
                </span>
                <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
              </a>
            </li>
  
            <!-- More projects... -->
          </ul>
        </div>
  
        <!-- Projects table (small breakpoint and up) -->
        <div class="mt-8 hidden sm:block">
          <div class="inline-block min-w-full border-b border-gray-200 align-middle">
            <table class="min-w-full">
              <thead>
                <tr class="border-t border-gray-200">
                  <th class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900" scope="col">
                    <span class="lg:pl-2">Project</span>
                  </th>
                  <th class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-left text-sm font-semibold text-gray-900" scope="col">Members</th>
                  <th class="hidden border-b border-gray-200 bg-gray-50 px-6 py-3 text-right text-sm font-semibold text-gray-900 md:table-cell" scope="col">Last updated</th>
                  <th class="border-b border-gray-200 bg-gray-50 py-3 pr-6 text-right text-sm font-semibold text-gray-900" scope="col"></th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100 bg-white">
                <tr>
                  <td class="w-full max-w-0 whitespace-nowrap px-6 py-3 text-sm font-medium text-gray-900">
                    <div class="flex items-center space-x-3 lg:pl-2">
                      <div class="h-2.5 w-2.5 flex-shrink-0 rounded-full bg-pink-600" aria-hidden="true"></div>
                      <a href="#" class="truncate hover:text-gray-600">
                        <span>
                          GraphQL API
                          <span class="font-normal text-gray-500">in Engineering</span>
                        </span>
                      </a>
                    </div>
                  </td>
                  <td class="px-6 py-3 text-sm font-medium text-gray-500">
                    <div class="flex items-center space-x-2">
                      <div class="flex flex-shrink-0 -space-x-1">
                        <img class="h-6 w-6 max-w-none rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Dries Vincent">
                        <img class="h-6 w-6 max-w-none rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Lindsay Walton">
                        <img class="h-6 w-6 max-w-none rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Courtney Henry">
                        <img class="h-6 w-6 max-w-none rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Tom Cook">
                      </div>
                      <span class="flex-shrink-0 text-xs font-medium leading-5">+8</span>
                    </div>
                  </td>
                  <td class="hidden whitespace-nowrap px-6 py-3 text-right text-sm text-gray-500 md:table-cell">March 17, 2020</td>
                  <td class="whitespace-nowrap px-6 py-3 text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  </td>
                </tr>
  
                <!-- More projects... -->
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>