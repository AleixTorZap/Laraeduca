<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacidadController extends Controller
{
    public function privacy()
    {
        $headings = [
            ['text' => '1. Información Recopilada'],
            ['text' => '2. Uso de la Información'],
            ['text' => '3. Protección de la Información'],
            ['text' => '4. Divulgación de Información'],
            ['text' => '5. Enlaces a Otros Sitios Web'],
            ['text' => '6. Cambios en la Política de Privacidad'],
        ];

        $paragraphs = [
            ['text' => 'Podemos recopilar información personal que usted nos proporciona voluntariamente, como su nombre, dirección de correo electrónico, número de teléfono y dirección postal, cuando se registra en nuestro sitio web, realiza una donación, se suscribe a nuestro boletín informativo o participa en nuestras actividades y eventos.'],
            ['text' => 'Utilizamos la información personal que recopilamos para los siguientes propósitos:
                Procesar y gestionar donaciones.
                Comunicarnos con usted sobre nuestras actividades, eventos y programas.
                Personalizar su experiencia en nuestro sitio web.
                Mejorar nuestros servicios y recursos.
                Cumplir con las leyes y regulaciones aplicables.'],
            ['text' => 'Nos comprometemos a proteger la seguridad de su información personal y hemos implementado medidas de seguridad para protegerla contra el acceso no autorizado, la divulgación, la alteración o la destrucción.'],
            ['text' => 'No venderemos, alquilaremos ni compartiremos su información personal con terceros, excepto cuando sea necesario para cumplir con la ley o proteger nuestros derechos, propiedad o seguridad.'],
            ['text' => 'Nuestro sitio web puede contener enlaces a sitios web de terceros. No somos responsables de las prácticas de privacidad o el contenido de estos sitios web de terceros. Le recomendamos que revise las políticas de privacidad de estos sitios antes de proporcionar cualquier información personal.'],
            ['text' => 'Nos reservamos el derecho de actualizar o modificar esta Política de Privacidad en cualquier momento. Le notificaremos sobre cualquier cambio mediante una publicación destacada en nuestro sitio web o por correo electrónico.'],
        ];

        return view('front-client.privacy.politica', compact('headings', 'paragraphs'));
    }
    public function terms()
    {
        $headings = [
            ['text' => 'Aceptación de los Términos y Condiciones'],
            ['text' => 'Recopilación y Uso de Información'],
            ['text' => 'Protección de la Información Personal'],
            ['text' => 'Divulgación de Información a Terceros'],
            ['text' => 'Enlaces a Otros Sitios Web'],
            ['text' => 'Cambios en los Términos y Condiciones'],
        ];

        $paragraphs = [
            ['text' => 'Al acceder y utilizar nuestro sitio web y cualquier otro servicio que ofrecemos, usted acepta estar sujeto a estos términos y condiciones de uso. Si no está de acuerdo con alguno de estos términos, por favor absténgase de utilizar nuestros servicios.'],
            ['text' => 'Podemos recopilar información personal que usted nos proporciona voluntariamente, como su nombre, dirección de correo electrónico, número de teléfono y dirección postal. Esta información se utilizará para los siguientes propósitos:
                Procesar y gestionar donaciones.
                Comunicarnos con usted sobre nuestras actividades, eventos y programas.
                Personalizar su experiencia en nuestro sitio web.
                Mejorar nuestros servicios y recursos.
                Cumplir con las leyes y regulaciones aplicables.'],
            ['text' => 'Nos comprometemos a proteger la seguridad de su información personal y hemos implementado medidas de seguridad para protegerla contra el acceso no autorizado, la divulgación, la alteración o la destrucción.'],
            ['text' => 'No venderemos, alquilaremos ni compartiremos su información personal con terceros, excepto cuando sea necesario para cumplir con la ley o proteger nuestros derechos, propiedad o seguridad.'],
            ['text' => 'Nuestro sitio web puede contener enlaces a sitios web de terceros. No somos responsables de las prácticas de privacidad o el contenido de estos sitios web de terceros. Le recomendamos que revise las políticas de privacidad de estos sitios antes de proporcionar cualquier información personal.'],
            ['text' => 'Nos reservamos el derecho de actualizar o modificar esta Política de Privacidad en cualquier momento. Le notificaremos sobre cualquier cambio mediante una publicación destacada en nuestro sitio web o por correo electrónico.'],
        ];

        return view('front-client.privacy.terms', compact('headings', 'paragraphs'));
    }
    public function cookies()
    {
        $headings = [
            ['text' => '¿Qué son las Cookies?'],
            ['text' => 'Tipos de Cookies:'],
            ['text' => 'Según su finalidad:'],
            ['text' => 'Obtención del consentimiento informado para la instalación:'],
            ['text' => 'Enlaces a Otros Sitios Web'],
            ['text' => 'Cambios en los Términos y Condiciones'],
        ];

        $paragraphs = [
            ['text' => 'Una Cookie es cualquier tipo de archivo o dispositivo que se descarga en el equipo terminal de un usuario con la finalidad de almacenar datos que podrán ser actualizados y recuperados por la entidad responsable de su instalación. '],
            ['text' => 'Según quién sea la entidad que gestione el equipo o dominio desde donde se envían las cookies y trate los datos que se obtengan, podemos distinguir

            Cookies propias: Son aquéllas que se envían al equipo terminal del usuario desde un equipo o dominio gestionado por el propio editor y desde el que se presta el servicio solicitado por el usuario.
            Cookies de terceros: Son aquéllas que se envían al equipo terminal del usuario desde un equipo o dominio que no es gestionado por el editor, sino por otra entidad que trata los datos obtenidos través de las cookies.'],
            ['text' => 'Cookies Técnicas: Son aquéllas que permiten al usuario la navegación a través de una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan como, por ejemplo, controlar el tráfico y la comunicación de datos, identificar la sesión, acceder a partes de acceso restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, realizar la solicitud de inscripción o participación en un evento, utilizar elementos de seguridad durante la navegación, almacenar contenidos para la difusión de videos o sonido o compartir contenidos a través de redes sociales.
            Cookies de personalización: Son aquéllas que permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma, el tipo de navegador a través del cual accede al servicio, la configuración regional desde donde accede al servicio, etc.
            Cookies de análisis: Son aquéllas que permiten al responsable de las mismas, el seguimiento y análisis del comportamiento de los usuarios de los sitios web a los que están vinculadas. La información recogida mediante este tipo de cookies se utiliza en la medición de la actividad de los sitios web, aplicación o plataforma y para la elaboración de perfiles de navegación de los usuarios de dichos sitios, aplicaciones y plataformas, con el fin de introducir mejoras en función del análisis de los datos de uso que hacen los usuarios del servicio.
            Cookies publicitarias: Son aquéllas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado en base a criterios como el contenido editado o la frecuencia en la que se muestran los anuncios.
            Cookies de publicidad comportamental: Son aquéllas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado. Estas cookies almacenan información del comportamiento de los usuarios obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar publicidad en función del mismo'],
            ['text' => 'No venderemos, alquilaremos ni compartiremos su información personal con terceros, excepto cuando sea necesario para cumplir con la ley o proteger nuestros derechos, propiedad o seguridad.'],
            ['text' => 'Nuestro sitio web puede contener enlaces a sitios web de terceros. No somos responsables de las prácticas de privacidad o el contenido de estos sitios web de terceros. Le recomendamos que revise las políticas de privacidad de estos sitios antes de proporcionar cualquier información personal.'],
            ['text' => 'Nos reservamos el derecho de actualizar o modificar esta Política de Privacidad en cualquier momento. Le notificaremos sobre cualquier cambio mediante una publicación destacada en nuestro sitio web o por correo electrónico.'],
        ];

        return view('front-client.privacy.terms', compact('headings', 'paragraphs'));
    }
}
