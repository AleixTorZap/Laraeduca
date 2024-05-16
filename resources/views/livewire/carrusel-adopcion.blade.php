<div>
    <style>
        body {
            background-color: #404040;
        }

        .carousel {
            width: 90%;
            height: 90%;

        }

        .carousel-container {
            width: 90%;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            /* Ajusta este margen según sea necesario */
        }

        .slide {
            display: flex;
            transition: transform 0.5s ease;
            max-width: 100%;
            /* Ancho máximo para las imágenes */
            margin: 0 auto;
            /* Centrar horizontalmente */
        }

        .prev-btn,
        .next-btn {
            border: none;
            background: none;
            font-size: 1.5rem;
            color: rgb(255, 255, 255);
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        body {
            font-family: 'DM Sans', sans-serif;
        }

        input[type=radio] {
            display: none;
        }

        .card {
            position: absolute;
            width: 350px;
            /* Ajuste del ancho de la imagen */
            height: 350px;
            /* Ajuste del alto de la imagen */
            left: 0;
            right: 0;
            margin: auto;
            transition: transform .4s ease;
            cursor: pointer;
        }

        .container {
            width: 95%;
            max-width: 80%;
            /* Ajuste de la altura del contenedor */
            transform-style: preserve-3d;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            /* Añade esta línea para centrar horizontalmente */
            margin-top: 20px;
            /* Ajusta este margen superior según sea necesario */
        }

        .cards {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            object-fit: cover;
        }

        #item-1:checked~.cards #circle-5,
        #item-2:checked~.cards #circle-1,
        #item-3:checked~.cards #circle-2,
        #item-4:checked~.cards #circle-3,
        #item-5:checked~.cards #circle-4 {
            transform: translateX(-200%) scale(0.8);
            filter: grayscale(100%);
            max-width: 175px;
            max-height: 175px;
            z-index: 0;
        }

        #item-1:checked~.cards #circle-4,
        #item-2:checked~.cards #circle-5,
        #item-3:checked~.cards #circle-1,
        #item-4:checked~.cards #circle-2,
        #item-5:checked~.cards #circle-3 {
            transform: translateX(-80%) scale(0.8);
            filter: grayscale(100%);
            max-width: 250px;
            max-height: 250px;
            z-index: 0;
        }

        #item-1:checked~.cards #circle-3,
        #item-2:checked~.cards #circle-4,
        #item-3:checked~.cards #circle-5,
        #item-4:checked~.cards #circle-1,
        #item-5:checked~.cards #circle-2 {
            transform: translateX(0) scale(1);
            opacity: 1;
            z-index: 1;
            border-radius: 100%;
            border: 10px solid #8AB469;
            /* Ajusta el grosor, el estilo y el color del borde según tus necesidades */
        }

        #item-1:checked~.cards #circle-2,
        #item-2:checked~.cards #circle-3,
        #item-3:checked~.cards #circle-4,
        #item-4:checked~.cards #circle-5,
        #item-5:checked~.cards #circle-1 {
            transform: translateX(80%) scale(0.8);
            filter: grayscale(100%);
            max-width: 250px;
            max-height: 250px;
            z-index: 0;
        }

        #item-1:checked~.cards #circle-1,
        #item-2:checked~.cards #circle-2,
        #item-3:checked~.cards #circle-3,
        #item-4:checked~.cards #circle-4,
        #item-5:checked~.cards #circle-5 {
            transform: translateX(200%) scale(0.8);
            filter: grayscale(100%);
            max-width: 175px;
            max-height: 175px;
            z-index: 0;
        }

        .prev-btn,
        .next-btn {
            border: none;
            background: none;
            font-size: 2rem;
            /* Aumento del tamaño del botón */
            color: #8AB469;
            /* Cambio de color */
            cursor: pointer;
        }

        .prev-btn:hover,
        .next-btn:hover {
            color: #6E944A;
            /* Cambio de color en hover */
        }

        .overlay {
            position: absolute;
            top: 20%;
            left: 5%;
            display: flex;
            flex-direction: column;
            border-bottom: 5px solid #6E944A;
            border-top: 5px solid #6E944A;
            justify-content: flex-start;
            /* Alinea el contenido desde arriba */
            height: auto;
            /* Ajusta automáticamente la altura según el contenido */
            width: 40%;
            align-items: left;
            color: white;
            font-size: 2rem;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            overflow-y: hidden;
            /* Oculta cualquier desbordamiento vertical */
        }


        .overlay_title {
            font-size: 32px;
            /* Establece un ancho máximo para el título */
            overflow-wrap: break-word;
            /* Permite que el texto se rompa y se mueva a la siguiente línea si supera el ancho máximo */
        }

        .overlay_text {
            margin-left: 20px;
            font-size: 12px;
        }
    </style>



    <div class="carousel-container">
        <!-- Carrusel grande -->
        <div class="carousel relative overflow-hidden">
            <!-- Flecha izquierda -->

            <!-- Flecha derecha -->

            <div class="slide absolute flex">
                <div class="slide-item">
                    <img src="../assets/images/carrusel-img/1.png" alt="">
                    <div class="overlay">
                        <h1 class="overlay_title">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h1>
                        <p class="overlay_text">hola</p>
                    </div>
                </div>
                <div class="slide-item">
                    <img src="../assets/images/carrusel-img/2.png" alt="">
                    <div class="overlay">Texto sobre imagen 2</div>
                </div>
                <div class="slide-item">
                    <img src="../assets/images/carrusel-img/3.png" alt="">
                    <div class="overlay">Texto sobre imagen 3</div>
                </div>
                <div class="slide-item">
                    <img src="../assets/images/carrusel-img/3.png" alt="">
                    <div class="overlay">Texto sobre imagen 4</div>
                </div>
                <div class="slide-item">
                    <img src="../assets/images/carrusel-img/2.png" alt="">
                    <div class="overlay">Texto sobre imagen 5</div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carrusel pequeño -->
    <div class="container">
        <button class="next-btn absolute top-1/2 right-0 transform -translate-y-1/2" onclick="nextSlide()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
        <input type="radio" name="slider" id="item-1" checked>
        <input type="radio" name="slider" id="item-2">
        <input type="radio" name="slider" id="item-3">
        <input type="radio" name="slider" id="item-4">
        <input type="radio" name="slider" id="item-5">

        <div class="cards">
            <label class="card" for="item-1" id="circle-1" onclick="selectCard(0)">
                <img src="../assets/images/carrusel-img/animal1.png" alt="circle">
            </label>
            <label class="card" for="item-2" id="circle-2" onclick="selectCard(1)">
                <img src="../assets/images/carrusel-img/animal2.png" alt="circle">
            </label>
            <label class="card" for="item-3" id="circle-3" onclick="selectCard(2)">
                <img src="../assets/images/carrusel-img/animal3.png" alt="circle">
            </label>
            <label class="card" for="item-4" id="circle-4" onclick="selectCard(3)">
                <img src="../assets/images/carrusel-img/animal4.png" alt="circle">
            </label>
            <label class="card" for="item-5" id="circle-5" onclick="selectCard(4)">
                <img src="../assets/images/carrusel-img/animal5.png" alt="circle">
            </label>
        </div>
        <button class="prev-btn absolute top-1/2 left-0 transform -translate-y-1/2" onclick="prevSlide()">
            <svg xmlns="http://www.w3.org/2000/svg" class=" h-24 w-24" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </div>

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slide-item');
        const totalSlides = slides.length;

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlide();
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlide();
        }

        function updateSlide() {
            for (let i = 0; i < slides.length; i++) {
                if (i === currentIndex) {
                    slides[i].style.display = "block";
                } else {
                    slides[i].style.display = "none";
                }
            }
            // Al actualizar el carrusel grande, deseleccionamos todos los círculos en el carrusel pequeño
            document.querySelectorAll('.cards input[type="radio"]').forEach(radio => {
                radio.checked = false;
            });
            // Luego seleccionamos el círculo correspondiente al carrusel grande actual
            document.getElementById(`item-${currentIndex + 1}`).checked = true;
        }

        // Función para seleccionar un card en el carrusel pequeño y actualizar el carrusel grande
        function selectCard(index) {
            currentIndex = index;
            updateSlide();
        }

        // Llama a updateSlide() para iniciar desde la primera imagen
        updateSlide();
    </script>
</div>