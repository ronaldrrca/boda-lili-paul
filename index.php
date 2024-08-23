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
    <main>
        <img class="main__fixedImage main__fixedImage__left" src="./assets/rama_de_flores_left.png" alt="rama de flores">
        <img class="main__fixedImage main__fixedImage__right" src="./assets/rama_de_flores_right.png" alt="rama de flores">
        <section class="seccion presentacion">
            <img class="presentacion__logoNovios" src="./assets/logo.png" alt="logo de las iniciales de los novios entrelazadas con un corazon">
            <h1 class="presentacion__nombresNovios">Lilibeth y Paul</h1>
            <audio class="presentacion__reproductorDeAudio" controls loop>
                <source src="./assets/la-boda.mp3" type="audio/mpeg">
                Tu navegador no soporta este componente de audio.
            </audio>
            <img class="presentacion__imagenPrincipal" src="./assets/foto__principal.webp" alt="novios caminando por la playa">
        </section>
        <section class="seccion detalles">
            <div class="detalles__citaBiblica">
                <p class="detalles__citaBiblica__versiculo">
                    Alguien que está solo puede ser atacado y vencido, pero si son dos, se ponen de espalda con espalda y vencen; mejor todavía 
                    si son tres, porque una cuerda triple no se corta fácilmente.
                </p>
                <span class="detalles__citaBiblica__cita">Eclesiastés 4:12</span>
            </div>
            <img class="detalles__iconoImagen" src="./assets/bendicion.svg" alt="manos bendiciendo">
            <h2>Con la bendición de nuestros padres</h2>
            <div class="detalles__bendicion">
                <div class="detalles__bendicion__padresNovia">
                    <span class="detalles__bendicion__novia">Lilibeth</span>
                    <span>Alfredo Rodríguez Noriega</span>
                    <span>Celia Campillo de Rodríguez</span>
                </div>
                <div class="detalles__bendicion__padresNovio">
                    <span class="detalles__bendicion__novio">Paul</span>
                    <span>Paul Donado Torres</span>
                    <span>Rosa Fontalvo de Donado<img class="detalles__bendicion__cruzPostuma" src="./assets/cruz.svg" alt="cruz postuma"></span>
                </div>
            </div>
            <span class="detalles_nosCasamos">Nos casamos</span>
            <span class="detalles__fechaLugar__fecha">30 de Marzo de 2025</span>
            <span class="detalles__fechaLugar__lugar">Barranquilla, Atlántico</span>
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
                <img id="detalles__slider__foto" class="detalles__slider__foto" src="./assets/foto3.webp" alt="fotos variadas de novios">
            </div>
        </section>
        <section class="seccion informacion">
            <div class="informacion__momentos">
                <div class="informacion__momentos__ceremonia">
                    <img class="informacion__iconoImagen" src="./assets/iglesia.svg" alt="iglesia">
                    <h2>Ceremonia Católica</h2>
                    <span>6:00pm</span>
                    <span class="informacion__momentos__lugar">Catedral Metropolitana <br>de Barranquilla</span>
                    <div class="informacion__momentos__mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.670202760637!2d-74.79265042630101!3d10.988246855253674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d65339eb257%3A0x9d19c0493a92c4fe!2sCATEDRAL%20METROPOLITANA%20MAR%C3%8DA%20REINA%20Y%20AUXILIADORA%20DE%20BARRANQUILLA!5e0!3m2!1ses-419!2sco!4v1723756831333!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
                <div class="informacion__momentos__celebracion">
                    <img class="informacion__iconoImagen" src="./assets/copas.svg" alt="copas de brindis">
                    <h2>Celebración</h2>
                    <span>8:00pm</span>
                    <span class="informacion__momentos__lugar">Centro de Eventos <br>Puerta de Oro</span>
                    <div class="informacion__momentos__mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.1863572395414!2d-74.80289832630045!3d11.024640554569054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef4327f0f3fe8d5%3A0x170118464179c6bc!2sPuerta%20de%20Oro%20-%20Centro%20de%20Eventos!5e0!3m2!1ses-419!2sco!4v1723757930140!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="informacion__regalos">
                <img class="regalos__iconoImagen" src="./assets/sobre.svg" alt="sobres de regalos">
                <p>Tu presencia será nuestro mejor regalo, pero si deseas obsequiarnos algo, una lluvia de sobres será recibida con gratitud y alegría.</p>
            </div>
            <div class="informacion__vestimenta">
                <img class="informacion__iconoImagen" src="./assets/vestimenta.svg" alt="vestido formal de mujer y traje formal de hombre">
                <h2>Código de vestimenta</h2>
                <span>Por definir</span>
            </div>
            <div class="informacion__asistencia">
                <h2>Confirma tu asistencia</h2>
                <form class="informacion__asistencia__formulario" action="#">
                    <div class="asistencia__datos">
                        <input type="text" name="nombres" placeholder="Nombres de los asistentes, separados por comas (,)">
                        <input type="tel" name="telefono" placeholder="Teléfono">
                    </div>
                    <select name="asistencia" id="">
                        <option value="" selected disabled>Confirmación</option>
                        <option value="si">Sí, allí estaré</option>
                        <option value="no">No</option>
                    </select>
                    <textarea name="deseos" id="" maxlength="300" cols="6" placeholder="Mensaje para los novios"></textarea>
                    <input type="submit" value="Enviar confirmación">
                </form>
            </div>
        </section>
    </main>
    <footer>
        <span class="footer__desarrollador">Desarrollado por Ronald Rodríguez Campillo</span>
        <div class="footer__links">
            <a class="footer__web" href="https://codews.co/">codews.co</a>
            <a href="https://www.instagram.com/codews.co?igsh=cmRjeTNwazljcmV4"><img class="footer__iconos" src="./assets/instagram.ico" alt="logo instagram"></a>
        </div>
    </footer>
    <script src="./app.js"></script>
</body>
</html>