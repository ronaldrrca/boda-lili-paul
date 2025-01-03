<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boda Lilibeth y Paul</title>
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/movil.css" media="screen and (min-width: 320px)">
    <link rel="stylesheet" href="./css/tablet.css" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="./css/portatil.css" media="screen and (min-width: 1200px)">
</head>
<body>
    <header></header>
    <a id="link_fotos" href="" target="blank">
    <img class="upload_img" src="./assets/upload.gif" alt="icono de upload">
        Queremos crear un álbum lleno de recuerdos y tú puedes ser nuestro cómplice. Comparte tus fotos de la fiesta haciendo clic en este enlace
        el día de la boda a partir de las 9:00pm
     </a>
    <main>
        <div id="contenedor__main__fixedImages">
            <img class="main__fixedImage main__fixedImage__left" src="./assets/rama_de_flores_left.png" alt="rama de flores">
            <img class="main__fixedImage main__fixedImage__right" src="./assets/rama_de_flores_right.png" alt="rama de flores">
        </div>
        <section class="seccion presentacion">
            <img class="presentacion__logoNovios" src="./assets/logo-rosa-palo-D7AFA8.png" alt="logo de las iniciales de los novios entrelazadas con un corazon">
            <h1 class="presentacion__nombresNovios">Lilibeth y Paul</h1>
            <audio class="presentacion__reproductorDeAudio" controls loop>
                <source src="./assets/la-boda.mp3" type="audio/mpeg">
                Tu navegador no soporta este componente de audio.
            </audio>
            <span class="presentacion__reproductorDeAudio__textoReproductor">Play para escuchar nuestra canción</span>
            <img class="presentacion__imagenPrincipal" src="./assets/9G1A1622.webp" alt="novios caminando por la playa">
        </section>
        <section class="seccion detalles">
            <div class="detalles__citaBiblica">
                <p class="detalles__citaBiblica__versiculo">
                    Uno solo puede ser vencido, pero dos podrán resistir. Y además, la cuerda de tres hilos no se rompe fácilmente. 
                </p>
                <span class="detalles__citaBiblica__cita">Eclesiastés 4:12</span>
            </div>
            <img class="detalles__iconoImagen" src="./assets/bendicion.png" alt="manos bendiciendo">
            <h2>Con la bendición de nuestros padres</h2>
            <div class="detalles__bendicion">
                <div class="detalles__bendicion__padresNovia">
                    <span class="detalles__bendicion__novia">Novia</span>
                    <span>Alfredo Rodríguez Noriega</span>
                    <span>Celia Campillo de Rodríguez</span>
                </div>
                <div class="detalles__bendicion__padresNovio">
                    <span class="detalles__bendicion__novio">Novio</span>
                    <span>Paul Donado Torres</span>
                    <span>Rosa Fontalvo de Donado<img class="detalles__bendicion__cruzPostuma" src="./assets/cruz.svg" alt="cruz postuma"></span>
                </div>
            </div>
            <span class="detalles_nosCasamos">Nos casamos</span>
            <!-- <span class="detalles__fechaLugar__fecha">30 de Marzo de 2025</span>
            <span class="detalles__fechaLugar__lugar">Barranquilla, Atlántico</span> -->
            <div class="temporal_mostrarModelosFechas">
                <div class="detalles__fechaLugar__modelo3">
                    <span class="detalles__fechaLugar__modelo3_diaSemana">SÁB</span>
                    <span class="detalles__fechaLugar__modelo3_diaMes">15</span>
                    <span class="detalles__fechaLugar__modelo3_mes">Marzo</span>
                    <span class="detalles__fechaLugar__modelo3_anio">2025</span>
                </div>
            </div>
            <span class="detalles__cuentaRegresiva__faltan">Faltan</span><!--Estilizar-->
            <div class="detalles__cuentaRegresiva">
                <div class="detalles__cuentaRegresiva__tiempo">
                    <span id="detalles__cuentaRegresiva__dias" class="tiempo">000</span><span>:</span>
                    <span id="detalles__cuentaRegresiva__horas" class="tiempo">00</span><span>:</span>
                    <span id="detalles__cuentaRegresiva__minutos" class="tiempo">00</span><span>:</span>
                    <span id="detalles__cuentaRegresiva__segundos" class="tiempo">00</span>
                </div>
                <div class="detalles__cuentaRegresiva__descripcion">
                    <span class="detalles__cuentaRegresiva__item">Días</span><span class="detalles__cuentaRegresiva__relleno">:</span>
                    <span class="detalles__cuentaRegresiva__item">Horas</span><span class="detalles__cuentaRegresiva__relleno">:</span>
                    <span class="detalles__cuentaRegresiva__item">Min</span><span class="detalles__cuentaRegresiva__relleno">:</span>
                    <span class="detalles__cuentaRegresiva__item">Seg</span>
                </div>
            </div>
            <div class="detalles__slider">
                <img id="detalles__slider__flechaRetroceder" class="detalles__slider__flecha" src="./assets/flecha_retroceder.svg" alt="flecha de retroceso de imagenes">
                <img id="detalles__slider__flechaAvanzar" class="detalles__slider__flecha" src="./assets/flecha_retroceder.svg" alt="flecha de avance de imagenes de imagenes">
                <img id="detalles__slider__foto" class="detalles__slider__foto" src="./assets/9G1A1671_1.webp" alt="fotos variadas de novios">
            </div>
        </section>
        <section class="seccion_informacion">
            <span id="informacion__mensaje__tituloTarjeta"></span>
            <span id="informacion__tituloTarjeta"></span>
            <div id="informacion__momentos" class="informacion__momentos">
                
                <div class="informacion__momentos__frase"><span>Nuestra celebración inicia con la Sagrada Eucaristía a la que esperamos que también nos acompañes</span></div>
                <div class="informacion__momentos__ceremonia">
                    <img class="informacion__iconoImagen" src="./assets/iglesia.svg" alt="iglesia">
                    <h2>Ceremonia</h2>
                    <span>7:00pm</span>
                    <span class="informacion__momentos__lugar">Capilla de la Catedral María Reina<br>Barranquilla</span>
                    <a href="https://maps.app.goo.gl/Cw2vB432xTBCbWi87" class="informacion__momentos__verUbicacion" target="_blank">Ver ubicación</a>
                </div>
                <div class="informacion__momentos__celebracion">
                    <img class="informacion__iconoImagen" src="./assets/copas.svg" alt="copas de brindis">
                    <h2>Fiesta</h2>
                    <span>9:00pm</span>
                    <span class="informacion__momentos__lugar">Salón de Eventos Dayder<br>Calle 76 # 44 - 45</span>
                    <a href="https://maps.app.goo.gl/KorYaWTijcLFyKWE8" class="informacion__momentos__verUbicacion" target="_blank">Ver ubicación</a>
                </div>
            </div>
            <div class="informacion__regalos">
                <img class="regalos__iconoImagen" src="./assets/sobre.svg" alt="sobres de regalos">
                <p>Tu presencia será nuestro mejor regalo, pero si deseas obsequiarnos algo, una lluvia de sobres será recibida con gratitud y alegría.</p>
            </div>
            <div class="informacion__vestimenta">
                <img class="informacion__iconoImagen" src="./assets/vestimenta.svg" alt="vestido formal de mujer y traje formal de hombre">
                <h2>Código de vestimenta</h2>
                <div class="informacion_vestimenta_ideas">
                    <div class="informacion_vestimenta_ellas">
                        <a href="https://es.pinterest.com/senorysenoraDonado/ellas/" target="_blank">Ver ideas<img src="./assets/vestimenta_mujer.png" alt=""></a>
                        <span>Vestido largo</span>
                    </div>
                    <div class="informacion_vestimenta_ellos">
                        <a href="https://es.pinterest.com/senorysenoraDonado/ellos/" target="_blank">Ver ideas <img src="./assets/vestimenta_hombre.png" alt="icono vestido formal de hombres"></a>
                        <span>Guayabera</span>
                    </div>
                </div>
                
            </div>
            <h2>Confirma tu asistencia</h2>
            <span id="texto_confirmacion">¡Nos encantaría contar con tu presencia! Por favor, confirma tu asistencia a nuestra boda antes del <b>22 de febrero</b>. 
                </span>
            <button id="confirmButtom">Confirmar</button>
            <div id="informacion__asistencia" class="informacion__asistencia">
                <span id="informacion__asistencia__preparacion">
                    Por favor marca la casilla correspondiente a cada invitado para confirmar su asistencia
                </span>
                <form id="myForm" class="informacion__asistencia__formulario" action="./confirmar.php" method="POST">
                <!-- Campo oculto para la fecha y hora que se envían al formulario-->
                <input type="hidden" id="timestamp" name="fechaHora" value="">
                <input type="hidden" name="token" id="token" value="">
                <!-- <span id="asistencia__datos__encabezado">Nos complace invitar a:</span> -->
                <div id="asistencia__datos" class="asistencia__datos"></div>
                <input type="tel" name="telefono" id="telefono" required placeholder="Teléfono">
                <textarea id="Mensaje" maxlength="300" cols="6" name="mensaje" required placeholder="Mensaje para los novios"></textarea>
                <div id="formulario_botones">
                    <button id="cancelarEnvio">Cancelar</button>
                    <input type="submit" id="submit" value="Enviar confirmación">
                </div>
                </form>
            </div>
        </section>
        <div id="informacion__contenedor__agradecimiento">
            <div id="informacion__asistencia__agradecimiento">
                <span id="informacion__asistencia__respuesta"></span>
                <button id="acceptButton">Aceptar</button>
            </div>
        </div>
        <div id="loader" class="loader"></div>
    </main>
    <footer id="footer">
        <span class="footer__desarrollador">Desarrollado por Ronald Rodríguez Campillo</span>
        <span class="footer__trabajos">Páginas, sitios, aplicaciones web, invitaciones web para bodas, cumpleaños, aniversarios y eventos especiales.</span>
        <div class="footer__links">
            <a class="footer__web" href="https://codews.co/" target="_blank">www.codews.co</a>
            <a href="https://www.instagram.com/codews.co?igsh=cmRjeTNwazljcmV4" target="_blank"><img class="footer__iconos" src="./assets/instagram.ico" alt="logo instagram"></a>
        </div>
    </footer>
    
    <script src="./app.js"></script>
    <script src="./confirmar.js"></script>
</body>
</html>