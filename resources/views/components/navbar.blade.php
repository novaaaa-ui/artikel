<nav class="bg-gray-800 dark:bg-gray-800/50" x-data="{ isOpen: false }">
  <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <x-nav-link href="/" active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/posts" active="request()->is('posts')">Blog</x-nav-link> 
              <x-nav-link href="/about" active="request()->is('about')">About</x-nav-link>
              <x-nav-link href="/contact" active="request()->is('contact')">Contact</x-nav-link>
              <x-nav-link href="/logout" active="request()->is('logout')">logout</x-nav-link>              
            </div>
          </div>
        </div>

        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-white">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="size-6" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>

            
            <el-dropdown class="relative ml-3">
              <button type="button" @click="isOpen = !isOpen"
                class="relative flex max-w-xs items-center rounded-full">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
              </button>

              
              <div x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute right-0 z-50 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline-1 outline-black/5 dark:bg-gray-800 dark:shadow-none dark:-outline-offset-1 dark:outline-white/10">

                <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Your profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Sign out</a>
              </div>

            </el-dropdown>
          </div>
        </div>

        
        <div class="-mr-2 flex md:hidden">
          <button @click="isOpen = !isOpen"
            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>

            <svg class="size-6" fill="none" stroke="currentColor" stroke-width="1.5" x-show="!isOpen">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <svg class="size-6" fill="none" stroke="currentColor" stroke-width="1.5" x-show="isOpen">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>

      </div>
    </div>

    
    <el-disclosure id="mobile-menu" hidden class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <x-nav-link href="/" active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/posts" active="request()->is('posts')">Blog</x-nav-link>
        <x-nav-link href="/about" active="request()->is('about')">About</x-nav-link>
        <x-nav-link href="/contact" active="request()->is('contact')">Contact</x-nav-link>
        <x-nav-link href="/logout" active="request()->is('logout')">Logout</x-nav-link>
      </div>
    </el-disclosure>
</nav>  