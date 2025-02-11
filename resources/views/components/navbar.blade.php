<div>
    <nav id="navbar"
        class="bg-white absolute w-full z-20 top-0 left-0 transition-transform duration-300">
        @include('components.customerlogos')

        <div class="border-b-2 border-t-2 border-circuit_green shadow-lg">

            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3">
                    <img src="{{ asset('images/circuito-logo-with-text.png') }}" class="h-16 object-contain"
                        alt="Logo">
                </a>
                <div class="flex md:order-2 space-x-3">
                    <button type="button"
                        class="text-white bg-circuit_green hover:bg-lime-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2">
                        Entre em contato
                    </button>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none">
                        <span class="sr-only">Abrir menu</span>
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="hidden md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col md:flex-row md:space-x-8 gap-6 font-medium">
                        <li>
                            <a href="{{ url('/') }}"
                                class="py-2 px-3 hover:text-lime-600 {{ request()->is('/') ? 'text-circuit_green ' : 'text-gray-900' }}">
                                Início
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/laboratorios') }}"
                                class="py-2 px-3 hover:text-lime-600 {{ request()->is('/laboratorios') ? 'text-circuit_green ' : 'text-gray-900' }}">
                                Laboratórios
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/portifolio') }}"
                                class="py-2 px-3 hover:text-lime-600 {{ request()->is('/portifolio') ? 'text-circuit_green ' : 'text-gray-900' }}">
                                Portfólio
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/Eventos') }}"
                                class="py-2 px-3 hover:text-lime-600 {{ request()->is('/Eventos') ? 'text-circuit_green ' : 'text-gray-900' }}">
                                Eventos
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</div>


<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            navbar.style.transform = "translateY(-100%)"; // Esconde ao descer
        } else {
            navbar.style.transform = "translateY(0)"; // Mostra ao subir
        }

        lastScrollTop = scrollTop;
    });
</script>
