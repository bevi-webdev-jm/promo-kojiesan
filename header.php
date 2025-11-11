<header class="sticky top-0 left-0 right-0 bg-black w-full z-50 shadow-2xl"> 
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="/" class="flex items-center gap-3">
            <img
                src="./assets/images/bevi-logo-white.png"
                alt="kojie.san"
                class="h-10 w-auto"
            />
            <span class="hidden md:inline-block text-white text-xl sm:text-2xl font-black tracking-widest uppercase">
                HOLIDAY MILLIONAIRE
            </span>
            </a>

            <nav class="hidden md:flex items-center space-x-6 text-sm font-semibold">
                <a
                    href="#criteria"
                    class="text-gray-100 hover:text-white transition duration-200"
                    >Criteria</a
                >
                <a
                    href="#products"
                    class="text-gray-100 hover:text-white transition duration-200"
                    >Products</a
                >
                <a href="#stores" class="text-gray-100 hover:text-white transition duration-200"
                    >Stores</a
                >
                <a href="#prizes" class="text-gray-100 hover:text-white transition duration-200"
                    >Prizes</a
                >
                <a
                    href="#mechanics-list"
                    class="text-gray-100 hover:text-white transition duration-200"
                    >Mechanics</a
                >
                <a
                    href="./privacy-policy.php"
                    class="ml-2 inline-flex items-center px-4 py-2 bg-white text-brand-red-700 font-bold rounded-full shadow-lg transition hover:bg-brand-red-50 hover:text-brand-red-900 transform hover:scale-105" >
                    Privacy Policy
                </a>
            </nav>

            <div class="md:hidden flex items-center">
                <button
                    id="nav-toggle"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                    class="p-2 rounded-md text-gray-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                >
                    <svg
                    id="hamburger"
                    class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                    </svg>
                    <svg
                    id="close-icon"
                    class="h-6 w-6 hidden"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div
    id="mobile-menu"
    class="md:hidden bg-brand-red-900/95 border-t border-brand-red-700 hidden" >
        <div class="px-4 pt-3 pb-4 space-y-2 font-medium">
            <a href="#criteria" class="block text-gray-100 py-2 px-3 rounded hover:bg-white/10 transition" >
                Criteria
            </a>
            <a href="#products" class="block text-gray-100 py-2 px-3 rounded hover:bg-white/10 transition" >
                Products
            </a>
            <a href="#stores" class="block text-gray-100 py-2 px-3 rounded hover:bg-white/10 transition" >
                Stores
            </a>
            <a href="#prizes" class="block text-gray-100 py-2 px-3 rounded hover:bg-white/10 transition" >
                Prizes
            </a>
            <a href="#mechanics-list" class="block text-gray-100 py-2 px-3 rounded hover:bg-white/10 transition">
                Mechanics
            </a>
            <a href="./privacy-policy.php" class="block mt-2 px-3 py-2 bg-white text-brand-red-700 rounded-md text-center font-bold shadow transition hover:bg-red-50" >
                Privacy Policy
            </a>
        </div>
    </div>
</header>