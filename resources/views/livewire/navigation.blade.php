<nav style="background-color: #8AB469;">
    <div>
        <ul class="flex items-center justify-center gap-10">
            <div class="flex gap-10 text-xl font-mono">
                <li><a href="/" class="text-white hover:text-black">Inicio</a></li>
                <li><a href="/somos" class="text-white hover:text-black">Somos</a></li>
                <li class="relative">
                    <a href="#" class="text-white hover:text-black"
                        onclick="toggleDropdown(event, 'informate')">Informate</a>
                    <div id="informate"
                        class="absolute bg-white p-4 rounded-md shadow-lg hidden border border-gray-300 z-10 transform origin-top transition-all duration-300 ease-in-out scale-y-0"
                        data-visible="false" onclick="event.stopPropagation()">
                        <a href="#"
                            class="block text-gray-800 py-2 px-4 transition-colors duration-300">Newsletter</a>
                        <div class="border-t border-gray-300"></div>
                        <a href="#" class="block text-gray-800 py-2 px-4 transition-colors duration-300">Blog</a>
                        <div class="border-t border-gray-300"></div>
                        <a href="#"
                            class="block text-gray-800 py-2 px-4 transition-colors duration-300">Contacta</a>
                    </div>
                </li>
            </div>
            <div class="flex items-center">
                <x-application-logo class="block h-9 w-auto" />
            </div>
            <div class="flex gap-10 text-xl font-mono">
                <li class="relative">
                    <a href="#" class="text-white hover:text-black"
                        onclick="toggleDropdown(event, 'trabajo')">Nuestro Trabajo</a>
                    <div id="trabajo"
                        class="absolute bg-white p-4 rounded-md shadow-lg hidden border border-gray-300 z-10 transform origin-top transition-all duration-300 ease-in-out scale-y-0"
                        data-visible="false" onclick="event.stopPropagation()">
                        <a href="/trabajo/especies"
                            class="block text-gray-800 py-2 px-4 transition-colors duration-300">Especies</a>
                        <div class="border-t border-gray-300"></div>
                        <a href="/trabajo/voluntariado"
                            class="block text-gray-800 py-2 px-4 transition-colors duration-300">Voluntariado</a>
                    </div>
                </li>
                <li class="relative">
                    <a href="#" class="text-white hover:text-black"
                        onclick="toggleDropdown(event, 'colabora')">Colabora</a>
                    <div id="colabora"
                        class="absolute bg-white p-4 rounded-md shadow-lg hidden border border-gray-300 z-10 transform origin-top transition-all duration-300 ease-in-out scale-y-0"
                        data-visible="false" onclick="event.stopPropagation()">
                        <a href="/colabora/adopta"
                            class="block text-gray-800 py-2 px-4 transition-colors duration-300">Adopta</a>
                        <div class="border-t border-gray-300"></div>
                        <a href="/colabora/animalesAmenazados"
                            class="block text-gray-800 py-2 px-4 transition-colors duration-300">Animales amenazados</a>
                        <div class="border-t border-gray-300"></div>
                        <a href="/colabora/animalesExplotados"
                            class="block text-gray-800 py-2 px-4 transition-colors duration-300">Animales explotados</a>
                    </div>
                </li>
            </div>
        </ul>
    </div>
</nav>

<script>
    function toggleDropdown(event, id) {
        event.preventDefault();
        const dropdown = document.getElementById(id);
        const isVisible = dropdown.getAttribute('data-visible');

        if (isVisible === 'true') {
            closeDropdowns();
            return;
        }

        closeDropdowns();

        dropdown.classList.remove('hidden');
        dropdown.setAttribute('data-visible', 'true');
        setTimeout(() => {
            dropdown.classList.remove('scale-y-0');
            dropdown.classList.add('scale-y-100');
        }, 10);
    }

    function closeDropdowns() {
        document.querySelectorAll('.absolute').forEach(function(dropdown) {
            dropdown.classList.add('hidden');
            dropdown.setAttribute('data-visible', 'false');
            dropdown.classList.remove('scale-y-100');
            dropdown.classList.add('scale-y-0');
        });
    }

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.relative')) {
            closeDropdowns();
        }
    });
</script>
