  <?php
  session_start()
  ?>
  <!DOCTYPE html>
  <html lang="es">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Renta de mobiliario Sunsea</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <script src="../js/jquery.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/responsivemenu.js"></script>
  </head>

  <body>
    <header>
      <img src="../img/My project.png" alt="logo-brand" />
      <div class="rotativo">
        <div class="desaparecido">
          <h1>Renta de mobiliario Sunsea</h1>
        </div>

        <div class="menu">
          <ul>




          </ul>
        </div>
        <div class="php">
          <?php

          /*  session_destroy(); */
          ?>
        </div>
        <div class="menu-movible">
          <div class="menu">
            <ul>

              <li><a href="../main/cotizaciones.php">Cotizaciones</a></li>
              <li><a href="../main/galeria.html">Galeria</a></li>
              
              <?php
              if ($_SESSION['user_id'] != "") {
                echo '<li><a href="../main/reservaciones.php">Mis pedidos</a></li>';
              } else {
                echo "<li> <a href='../main/login.php'>
                            <li>Inicio Sesion</li>
                        </a> </li>" ;
              }
              ?>

            </ul>
          </div>



        </div>

        <div class="admin">

          <img src="../img/login.svg" alt="">
          <div class="dropdown">

            <button class="dropbtn"><?php echo  $_SESSION["nameUsuario"]; ?></button>
            <div class="dropdown-content">

              <a href="../php/cerrarSesion.php">Cerrar sesion</a>
              

            </div>
          </div>

        </div>


        <div class="cascada">

          <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
          </div>
          <nav>
            <ul>
              <li><a href="../main/cotizaciones.php"><span class=""></span>Cotizaciones</a></li>
              <li><a href="../main/galeria.html"><span class="icon-suitcase"></span>Galeria</a></li>
              <?php
              if ($_SESSION['user_id'] != "") {
                echo "";
              } else {
                echo "<li><a href='../main/login.php'><span class='icon-earth'></span>Inicio Sesion</a></li>";
              }
              ?>
              
              <?php
              if ($_SESSION['user_id'] != "") {
                echo "<li><a href='../main/reservaciones.php'><span class='icon-earth'></span>Mis pedidos</a></li>";

                
              } else {
                echo "";
              }
              ?>
            </ul>
          </nav>
        </div>

      </div>


    </header>
    <main>

      <div class="aviso">
        <p>Damos servicio en San Marcos Gro y alrededores</p>
      </div>



      <a href="https://wa.me/+527331701927?text=Mas información" target="_blank"><img src="../img/wh.svg" alt="" id="whatsapp"></a>

      <div class="contenido">

        <div class="banner">


          <!-- aaa -->

          <div class="slide" id="padreCarrusel">
            <div class="slide-inner">
              <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden="" checked="checked">
              <div class="slide-item">
                <img src="../img/eventoMango">
              </div>
              <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">
              <div class="slide-item">
                <img src="../img/Banner-princip.jpg">
              </div>
              <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="">
              <div class="slide-item">
                <img src="../img/fondo.jpg">
              </div>
              <label for="slide-3" class="slide-control prev control-1">‹</label>
              <label for="slide-2" class="slide-control next control-1">›</label>
              <label for="slide-1" class="slide-control prev control-2">‹</label>
              <label for="slide-3" class="slide-control next control-2">›</label>
              <label for="slide-2" class="slide-control prev control-3">‹</label>
              <label for="slide-1" class="slide-control next control-3">›</label>
              <ol class="slide-indicador">
                <li>
                  <label for="slide-1" class="slide-circulo">•</label>
                </li>
                <li>
                  <label for="slide-2" class="slide-circulo">•</label>
                </li>
                <li>
                  <label for="slide-3" class="slide-circulo">•</label>
                </li>
              </ol>
            </div>
          </div>


          <!-- aaa -->
        </div>
        <div class="servicios">
          <ul>
            <li><a href="../main/sillas.html">Sillas</a></li>
            <li><a href="../main/mesas.html">Mesas</a></li>
            <li><a href="../main/ramadas.html">Ramadas</a></li>
            <li><a href="../main/inflables.html">Inflables</a></li>
          </ul>
        </div>

        <div class="mosaico">
          <div class="card-informativa">
            <h1>Renta de mobiliario para eventos</h1>
            <p>
              La renta de mobiliario para eventos y selección de equipo es un
              elemento muy importante en cualquier tipo de evento que estés
              planeando. Da la sensación de clase y tema a tu celebración. Es
              muy importante que selecciones a la empresa de alquiler o renta de
              mobiliario y decoración adecuada. En Renta de mobiliario Sunsea
              contamos con un buen perfil de proyectos de decoración de eventos
              para mostrarte cuáles pueden elegir y generar ideas para cualquier
              tipo de evento que estés planeando. Nosotros contamos con una
              amplia gama de mesas, sillas, mantelería, , carpas, y Inflables
              todo para cualquier tipo de celebración.
            </p>
          </div>

          <div class="card-img"></div>
        </div>

      </div>
    </main>

    <footer>

      <p>
        En Renta de mobiliario Sunsea estamos siempre dispuestos a ofrecerle el
        mejor servicio, no dude en contactarnos para darnos a conocer sus
        requerimientos y preferencias y recibir información de nuestros
        servicios
      </p>

      <div class="sociales" id="social">

        <div class="imagenesRedes">
          <a target="_blank" href="https://web.facebook.com/RentademobiliarioSunSea"><img src="../img/facevook.svg" alt=""></a>
          <a target="_blank" href="https://www.instagram.com/"> <img src="../img/insta.svg" alt=""></a>



        </div>

      </div>

    </footer>
    <center>
      <p>© Todos los derechos reservados . Renta de mobiliario Sunsea .Desarrollado por Eliezer Solano y Jonathan Cruz</p>
      <a href="../main/admin.php">ADMIN</a>
    </center>
  </body>

  </html>