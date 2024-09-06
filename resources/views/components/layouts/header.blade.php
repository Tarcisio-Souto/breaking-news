<!-- component -->
<nav
    class="bg-red-500 z-50 fixed w-full top-0 left-0 border border-gray-200 dark:border-gray-700  sm:px-4 py-2.5 rounded dark:bg-gray-800 shadow">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
                <img src="https://png.pngtree.com/png-vector/20221102/ourmid/pngtree-breaking-news-vector-label-png-image_6413040.png"
                    alt="logo" class="h-20 w-79">
            </span>
        </a>

        <div class="flex items-center">
            <button id="menu-toggle" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden">
                <span class="sr-only">Menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <div class="w-full md:block md:w-auto hidden" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="/"
                        class="block no-underline py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-gray md:dark:hover:bg-transparent dark:border-gray-700">
                        Início
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="block no-underline py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        Sobre
                    </a>
                </li>
                <li>
                    @if (!Auth::check())
                        <a href="/login" wire:click="login"
                            class="block no-underline py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            Área Restrita
                        </a>
                    @endif
                    @if (Auth::check())
                        <a href="/logout" wire:click="logout"
                            class="block no-underline py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            Sair
                        </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });
</script>
