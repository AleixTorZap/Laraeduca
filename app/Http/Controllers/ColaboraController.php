<?php

namespace App\Http\Controllers;

class ColaboraController extends Controller
{
    public function adopta()
    {
        $titulo = 'AYÚDANOS A <span class="text-conservar-verde">CONSERVAR</span> LA NATURALEZA';

        $texto = 'Únete a la mayor organización independiente de defensa de la naturaleza. 
        Gracias al apoyo de  nuestros socios y socias podemos seguir luchando por la conservación 
        de lugares únicos y especies en peligro en todo el mundo. Al unirte a WWF estás ayudando a 
        conservar especies amenazadas como el lince y el lobo ibérico y a proteger  bosques y océanos. 
        ¡Contamos contigo!, algunos de esos ejemplos los puedes encontrar aqui:';

        // imagen
        $imagen = '../assets/images/loro.webp';

        $segundoTitulo = 'ANIMALES CON LOS QUE COLABORAMOS';

        return view('front-client.colabora', compact('titulo', 'texto', 'imagen', 'segundoTitulo'));
    }

    public function animalesAmenazados()
    {
        $titulo = 'AYÚDANOS A <span class="text-conservar-rojo">CONSERVAR</span> LA NATURALEZA';

        $texto = 'Únete a la mayor organización independiente de defensa de 
        la naturaleza. Gracias al apoyo de  nuestros socios y socias podemos 
        seguir luchando por la conservación de lugares únicos y especies en 
        peligro en todo el mundo. Al unirte a WWF estás ayudando a conservar 
        especies amenazadas como el lince y el lobo ibérico y a proteger  bosques y océanos. 
        ¡Contamos contigo!, algunos de esos ejemplos los puedes encontrar aqui:';

        // imagen
        $imagen = '../assets/images/nutria.png';

        $segundoTitulo = 'ANIMALES EN PELIGRO DE EXTINCIÓN';

        return view('front-client.animalesAmenazados', compact('titulo', 'texto', 'imagen', 'segundoTitulo'));
    }

    public function animalesExplotados()
    {
        $titulo = 'AYÚDANOS A <span class="text-conservar-amarillo">CONSERVAR</span> LA NATURALEZA';

        $texto = 'Únete a la mayor organización independiente de defensa 
        de la naturaleza. Gracias al apoyo de  nuestros socios y socias podemos 
        seguir luchando por la conservación de lugares únicos y especies en peligro 
        en todo el mundo. Al unirte a WWF estás ayudando a conservar especies 
        amenazadas como el lince y el lobo ibérico y a proteger  bosques y océanos. 
        ¡Contamos contigo!, algunos de esos ejemplos los puedes encontrar aqui:';

        // imagen
        $imagen = '../assets/images/tigre.jpg';

        $segundoTitulo = 'ANIMALES EN PELIGRO DE EXPLOTACIÓN';

        return view('front-client.animalesAmenazados', compact('titulo', 'texto', 'imagen', 'segundoTitulo'));
    }
}
