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
                    <span>Ceremonia Católica</span>
                    <span>6:00pm</span>
                </div>
                <div class="informacion__momentos__celebracion">
                    <img class="informacion__iconoImagen" src="./assets/copas.svg" alt="copas de brindis">
                    <span>Celebración</span>
                    <span>8:00pm</span>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>
    <script src="./app.js"></script>
</body>
</html>