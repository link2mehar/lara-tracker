<div class="w-2/12 bg-gray-800  p-3 shadow-lg">
    <div class="flex items-center space-x-4 p-2 mb-5">
        {{-- <img class="h-12 rounded-full" src="http://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="James Bhatta"> --}}
        <div>
            <h4 class="font-semibold text-lg text-white capitalize font-poppins tracking-wide">Track App</h4>
        </div>
    </div>
    <ul class="space-y-2 text-sm">
     
        <li>
            <a href="/" class="flex items-center space-x-3 text-white p-2 rounded-md font-medium hover:bg-gray-600 bg-gray-600 focus:shadow-outline">
                <span class="text-gray-200">
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </span>
                <span>Urls</span>
            </a>
        </li>
        <li>
            <a href="/contact" class="flex items-center space-x-3 text-white p-2 rounded-md font-medium hover:bg-gray-600 focus:bg-gray-600 focus:shadow-outline">
                <span class="text-gray-200">
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </span>
                <span>Contact</span>
            </a>
        </li>
        <li>
            <a href="/about" class="flex items-center space-x-3 text-white p-2 rounded-md font-medium hover:bg-gray-600 focus:bg-gray-600 focus:shadow-outline">
                <span class="text-gray-200">
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </span>
                <span>About</span>
            </a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="w-full flex items-center space-x-3 text-white p-2 rounded-md font-medium hover:bg-gray-600 focus:bg-gray-600 focus:shadow-outline">
                    <span class="text-gray-200">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </span>
                    <span>Logout</span>
                </button>
            </form>
            
        </li>
    </ul>
</div>