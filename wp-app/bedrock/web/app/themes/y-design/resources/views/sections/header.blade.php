<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif

  <nav class="bg-gray-800 container">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <div class="flex-shrink-0 flex items-center">
            <a href="#">
              <img class="h-8 w-8" src="logo.png" alt="Logo">
            </a>
          </div>
          <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
            <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
            <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Services</a>
            <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
          </div>
        </div>
        <div class="hidden sm:flex sm:items-center sm:ml-6">
          <button class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">View notifications</span>
            <!-- Icon for notifications -->
          </button>
  
          <div class="ml-3 relative">
            <div>
              <button class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <!-- User avatar icon -->
                <span class="ml-1">John Doe</span>
                <!-- User name -->
              </button>
            </div>
            <!-- User menu dropdown -->
          </div>
        </div>
        <div class="-mr-2 flex items-center sm:hidden">
          <button class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Menu icon -->
          </button>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
        <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>
        <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Services</a>
        <a href="#" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
      </div>
    </div>
  </nav>
</header>