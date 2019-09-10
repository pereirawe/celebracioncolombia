<?php include_once('./views/header.php'); ?>
<style>
    .tabcontent {
        display: none;
        width:100%;
        border: none;
    }
    
</style>

<div class="container-fluid pt-4 tb-4" style="background: #EAEAEA;">
    <div class="row pl-4 pr-4">
        <div id="enterateahora_top">
            <h1 class="textWhite align-center">
                ENTÉRATE AHORA
            </h1>
        </div>
        <div id="enterateahora_content" class="col-md-12 bgWhite pt-5 pb-5 ">
            <h3 class="textBlue mb-5" >
                Si aún no tienes boleta,
                <a href="https://backoffice.isagenix.com/Authentication/Login?ReturnUrl=%2FEvents%2FCommon%2FUniversityEvent%3Fid%3D3910d047-0074-4568-a738-ee4398af26a6%26id2%3D997%26skipmobilecheck%3D1&id=3910d047-0074-4568-a738-ee4398af26a6&id2=997&skipmobilecheck=1" class="textGreen" target="_blank">¡INGRESA AHORA</a>
                a tu oficina virtual para comprar tu boleto para la Celebración Colombia 2019!
            </h3>

            <div class="bgWhite mt-5">
                <ul class="nav nav-tabs justify-content-center">
                    <li class="tablinks btn btn-success btn-blue pl-auto pr-auto active" onclick="openTabs(event, 'enterate_1')" >Tips sobre el lugar</li>
                    <li class="tablinks btn btn-success btn-blue" onclick="openTabs(event, 'enterate_2')" >Tips de la agenda</li>
                    <li class="tablinks btn btn-success btn-blue" onclick="openTabs(event, 'enterate_3')" >Tips para la experiencia</li>
                </ul>
            </div>

            <div class="col-md-12 bgWhite p-5 mb-5">
                <div id="enterate_1" class="tabcontent">
                    <p><b>¡Estamos en el Centro de Convenciones Compensar Av. 68!</b> Queremos mantener todos nuestros eventos en un mismo lugar para tu conveniencia y la nuestra. ¡Así creamos también identidad!</p>
                    <p><b>¡Quédate cerca de nosotros!</b> No olvides reservar tu habitación de hotel cerca del Compensar Av. 68 Hay muchos hoteles para elegir en todos los rangos de precios diferentes. <a class="textGreen" target="_blank" href="https://www.trivago.com.co/">¡Puedes verlos aquí!</a></p>
                    <p><b>Tu manilla del evento es tu ACCESO.</b> Recibirás una manilla en el sitio cuando te registres en el Registro de la Celebración. Es imperativo que uses esta manilla en todo momento durante el evento, ya que este será tu acceso a los espacios de reunión. Toma en cuenta que es una manilla por boleta comprada, por lo que es muy importante que mantengas la tuya visible.</p>
                    <p><b>¡NO GUARDAR ASIENTOS!</b> Te pedimos que seas respetuoso con los demás asistentes y NO guardes asientos para nadie que aún no haya llegado a la Capacitación de Líderes, R.O.N. o Sesión General. Los asistentes que estén listos y presentes tendrán prioridad sobre cualquier persona que aún no esté en la sala. Si deseas sentarte con tu equipo, ¡asegúrense de llegar juntos! Nuestro equipo de seguridad supervisará de cerca este sitio, por lo que es importante contar con tu colaboración.</p>
                    <p><b>¡Por favor, recoge tu basura!</b> 🙂</p>
                    <p><b>¡Somos una empresa familiar!</b> Si bien creemos que el volumen de sonido, algunos actos de tarima y el contenido del evento no siempre son adecuados para niños pequeños, entendemos tu deseo de mantener a sus hijos cerca de usted. Si vas a traer niños al evento, toma las precauciones para que tanto los niños como el resto de la audiencia puedan disfrutar del evento sin distracciones.</p>

                </div>
                <div id="enterate_2" class="tabcontent">
                    <a><b>¡Planifica con anticipación!</b> Asegúrate de aprovechar TODO lo que la Celebración Colombia 2019 tiene para ofrecer; echa un vistazo a nuestra <a href="./agenda.php">agenda</a> y <a href="./ponentes.php">ponentes</a>.</p>
                    <p><b>Reserva tu viaje:</b> ¡Para quienes vivan fuera de Bogotá, asegúrense de llegar con suficiente anticipación para disfrutar de todas las capacitaciones! Esto es lo que hará la diferencia en tu negocio y lo que creará historias memorables para inspirar a otros. </p>
                    <p><b>¡Este momento es para fortalecer a tu equipo,</b> así que planifica tradiciones duraderas con ellos! Tal vez una cena de liderazgo dentro de un hotel, o una noche divertida de equipo, cualquier cosa divertida y fácil. ¡Permitir que tu equipo se conecte entre sí creará momentum después del evento! Revisa algunas cosas divertidas que hacer en Bogotá. Sugerencia útil: asegúrate de publicar TONELADAS de fotos juntas en tus redes sociales para crear FOMO (Fear Of Missing Out o Miedo de Perderse Algo) para nuevos prospectos potenciales en tus canales de redes sociales usando los hashtags #CelebracionColombia2019 #SomosIsagenix.</p>

                </div>
                <div id="enterate_3" class="tabcontent">
                <p><b>¡Promociona el evento!</b> Si ya tienes tu boleto, ¡promueve el evento entre tu equipo! No es suficiente dar fechas y horas... ¡comparte testimonios de otros líderes cuyas vidas y negocios fueron cambiados gracias a nuestros eventos!</p>
                <p><b>PREPÁRATE</b> para el momentum posterior al evento: construye en grande AHORA (¡no esperes hasta después!) Cuantos más Asociados puedas inscribir ahora para aprovechar la capacitación y los lanzamientos, más sólidos y firmes serán tus pasos después del evento. ¡Deja que todos sepan que tú eres la persona a la cual acudir para saber más de esta oportunidad! Comienza a anunciar las grandes cosas que vienen. 😉</p>
                <p><b>¡Construye MOMENTUM!</b> Publica lo emocionado que estás de volver a conectarte con tu familia Isagenix en Celebración: ¡alienta a los nuevos miembros del equipo a asistir y comienza a darle muestras a tu equipo de todas las cosas importantes que se anunciarán en el evento de este año! ¡Asegúrate de prepararte para compartir todo lo nuevo con tus prospectos a través de tus redes sociales! Puedes usar #CelebracionColombia2019 y #SomosIsagenix para etiquetar tus fotos.</p>
                <p><b>¡Prepárate para la Celebración!</b> Por lo general, en la Celebración, hay MUCHO caminar y movimiento. Te sugerimos que comiences a pensar en la ropa y zapatos cómodos que llevarás contigo, para que puedas permanecer en tu mejor nivel todos los días. ¿Qué ponerte? Recuerda que debes vestirte para el éxito cada vez que vengas a un evento de Isagenix. </p>

                </div>

                <div class="mt-5 pt-5">
                        <h6>En serio, no podemos ESPERAR para impresionarte con lo que hemos planeado este año. Este evento tiene el potencial de crear un gran impulso global para tu negocio, ¡así que ESTÁ PRESENTE y ESTÁ LISTO para prestar toda tu atención a todo lo que te rodea mientras estás con nosotros!</h6>
                    
                    <p class="mt-3 ">Para cualquier pregunta que tengas sobre el evento, envía un correo electrónico a <a target="_blank" href="mailto:graise.Caballero@isagenixcorp.com">Graise.Caballero@isagenixcorp.com</a> para brindarte apoyo.</p>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>


<script>
    document.getElementsByClassName("tabcontent")[0].style.display = "block"
function openTabs(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  
  
  
  evt.currentTarget.className += " active";
  
}


</script>

<?php include_once('./views/footer.php'); ?>