<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <style>
        /* Estilos para los botones */
        .option {
            display: inline-block;
            padding: 12px 20px;
            background-color: #8AB469;
            color: white;
            cursor: pointer;
            border: 2px solid transparent;
            /* Añadir borde transparente */
            border-radius: 8px;
            margin-right: 10px;
        }

        /* Estilo para el botón seleccionado */
        .option.selected {
            border-color: white;
            /* Cambiar el color del borde al blanco */
            background-image: url('../assets/images/huella.png');
            /* Agregar la imagen de la huella */
            background-repeat: no-repeat;
            /* Evitar que se repita la imagen */
            background-position: right center;
            /* Posicionar la imagen a la derecha del botón */
            padding-right: 30px;
            /* Ajustar el espacio para la imagen */
        }
    </style>
</head>

<body>

    <div class="mt-80 flex justify-center items-center h-full">
        <div class="p-8 bg-[#A7DD7D] shadow-md" style="width: 800px;">
            <h1 class="text-white text-3xl font-bold mb-8 text-center">HAZTE SOCIO</h1>
            <div class="gap-28 p-5 mb-8 flex justify-center">
                <div>
                    <input type="radio" id="socio_adulto" name="tipo_socio" value="socio_adulto" class="mr-2 hidden"
                        onclick="handleButtonClick(this)">
                    <label for="socio_adulto" class="option">Socio Adulto</label>
                </div>
                <div>
                    <input type="radio" id="socio_menos" name="tipo_socio" value="socio_menos" class="ml-2 hidden"
                        onclick="handleButtonClick(this)">
                    <label for="socio_menos" class="option">Socio Menos</label>
                </div>
            </div>
            <hr class="my-8">
            <h3 class="text-white text-xl font-semibold mb-4">Tipo de Suscripción</h3>
            <div class="mb-8 flex justify-center gap-20">
                <input type="radio" id="mensual" name="tipo_suscripcion" value="mensual" class="mr-2 hidden"
                    onclick="handleButtonClick(this)">
                <label for="mensual" class="option">Mensual</label>
                <input type="radio" id="trimestral" name="tipo_suscripcion" value="trimestral" class="mr-2 hidden"
                    onclick="handleButtonClick(this)">
                <label for="trimestral" class="option">Trimestral</label>
                <input type="radio" id="anual" name="tipo_suscripcion" value="anual" class="ml-2 hidden"
                    onclick="handleButtonClick(this)">
                <label for="anual" class="option">Anual</label>
            </div>

            <label for="cantidad" class="text-white block mb-2">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad"
                class="w-full border border-gray-300 px-4 py-2 mb-8">
            <hr class="my-8">
            <div class="mb-8 flex justify-center gap-28 p-4">
                <input type="radio" id="formato_digital" name="formato" value="digital" class="mr-2 hidden"
                    onclick="handleButtonClick(this)">
                <label for="formato_digital" class="option">Formato Digital</label>
                <input type="radio" id="formato_papel" name="formato" value="papel" class="ml-2 hidden"
                    onclick="handleButtonClick(this)">
                <label for="formato_papel" class="option">Formato Papel</label>
            </div>

            <label for="correo" class="text-white block mb-2">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" placeholder="Ingrese su correo electrónico"
                class="w-full border border-gray-300 px-4 py-2 mb-8">

            <div class="mb-8">
                <input type="checkbox" id="proteccion_datos" name="proteccion_datos" class="mr-2">
                <label class="text-white" for="proteccion_datos">Acepto la protección de datos</label>
            </div>

            <button type="submit"
                class="py-4 px-32 bg-[#8AB469] text-white flex justify-center items-center mx-auto">Enviar</button>
        </div>
    </div>

    <script>
        // Función para manejar el clic en los botones
        function handleButtonClick(element) {
            // Obtener todos los botones con la clase "option" del mismo grupo
            var buttons = document.querySelectorAll('[name="' + element.name + '"]');

            // Desactivar la clase "selected" en todos los botones del mismo grupo
            buttons.forEach(button => {
                button.nextElementSibling.classList.remove('selected');
            });

            // Activar la clase "selected" solo en el botón clicado
            element.nextElementSibling.classList.add('selected');

            // Verificar que haya tres opciones seleccionadas
            var selectedOptions = document.querySelectorAll('.option.selected');
            if (selectedOptions.length > 3) {
                // Desactivar la clase "selected" en el primer botón seleccionado
                selectedOptions[0].classList.remove('selected');
            }
        }
    </script>

</body>

</html>
