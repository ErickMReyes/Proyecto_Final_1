<?php

$estado_session = session_status();
if ($estado_session == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>


  <article class="message">
    <div class="message-header">
      <p>MERCEDES</p>
      <button class="delete" aria-label="delete"></button>
    </div>
    <div class="message-body">
      Mercedes AMG F1 Petronas es un equipo de origen alemán con sedes en Brackley y Brixworth, en Gran Bretaña. Originalmente Daimler poseía el 60% del equipo, Toto Wolff el 30% y Niki Lauda el 10%. Desde diciembre de 2020, el accionariado está compuesto por Daimler, Toto Wolff e Ineos a partes iguales.
      <br><br>
      <a href="url"><strong>CHAT</strong></a> |
      <a href="url"><strong>LEER MÁS</strong></a>
    </div>
  </article>

  <article class="message is-link">
    <div class="message-header">
      <p>RED BULL</p>
      <button class="delete" aria-label="delete"></button>
    </div>
    <div class="message-body">
      Red Bull Racing es un equipo privado de origen austríaco con sede en Milton Keynes, en Gran Bretaña. Es propiedad de la marca de bebidas homónima.
      <br><br>
      <a href="views/chat.php"><strong>CHAT</strong></a> |
      <a href="?menu=chat"><strong>LEER MÁS</strong></a>
    </div>
  </article>

  <article class="message is-warning">
    <div class="message-header">
      <p>MCLAREN</p>
      <button class="delete" aria-label="delete"></button>
    </div>
    <div class="message-body">
      McLaren es un equipo privado de origen británico con sede en Woking, Gran Bretaña. Es propiedad del Grupo McLaren, cuyo accionariado está compuesto por la corona de Baréin y Mansour Ojjeh.
      <br><br>
      <a href="url"><strong>CHAT</strong></a> |
      <a href="url"><strong>LEER MÁS</strong></a>
    </div>
  </article>

  <article class="message is-danger">
    <div class="message-header">
      <p>FERRARI</p>
      <button class="delete" aria-label="delete"></button>
    </div>
    <div class="message-body">
      Scuderia Ferrari es un equipo de origen italiano con sede en Maranello, Italia. Es la escudería oficial del fabricante de automóviles Ferrari.
      <br><br>
      <a href="url"><strong>CHAT</strong></a> |
      <a href="url"><strong>LEER MÁS</strong></a>
    </div>
  </article>

<?php
} else { ?>
  <?php include 'error401.php' ?>
<?php } ?>