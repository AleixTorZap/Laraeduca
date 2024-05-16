<x-privacy-layout>
    <x-slot name="title">POLITICA DE PRIVACIDAD</x-slot>
    <x-slot name="content">
        La Fundación Patitas Amigas ("nosotros", "nuestro" o "nosotros") se compromete a proteger la
        privacidad de los usuarios ("usted" o "su") de nuestro sitio web y cualquier otro servicio que ofrecemos. Esta
        Política de Privacidad describe cómo recopilamos, utilizamos y protegemos la información personal que usted
        proporciona a través de nuestro sitio web.
    </x-slot>

    <x-slot name="additionalContent">
        <div class="max-w-6xl mx-auto pt-10"> <!-- Nuevo div -->
            <!-- Contenido adicional aquí -->
            @foreach ($headings as $index => $heading)
                <div class="text-center mb-10">
                    <hr style="border-color: var(--color-primary);"
                        class="mr-12 mb-2 w-1/6 inline-block border-t-2 border-black">
                    <h1 style="color: var(--color-primary);"
                        class="mt-12 mb-2 text-black text-4xl font-bold inline-block">
                        {{ $heading['text'] }}
                    </h1>
                    <hr style="border-color: var(--color-primary);"
                        class="ml-12 mb-2 w-1/6 inline-block border-t-2 border-black">

                </div>
                @if (isset($paragraphs[$index]))
                    <p class="mb-10 text-black text-center text-base max-w-3xl mx-auto">
                        {{ $paragraphs[$index]['text'] }}
                    </p>
                @endif
            @endforeach
        </div> <!-- Fin del nuevo div -->
    </x-slot>
</x-privacy-layout>
