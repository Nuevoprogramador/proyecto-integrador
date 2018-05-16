<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Oswald|PT+Sans" rel="stylesheet">
    <title>Home</title>
  </head>
  <body>
    <?php
      include ("head.php");
    ?>

    <section class="cuerpo">
      <form id="register" action="" method="post">
        <div class="conteiner">
          <div class="mini_conteiner">
            <label for="name" >Nombre completo: </label>  <br/>
            <input type="text" name="name" class="espacio_de_relleno" id="name" value=""  maxlength="50" /><br/>
            <span class="error"></span>
          </div>

          <div class="mini_conteiner">
            <label for="email" >Email:</label><br/>
            <input type="text" name="email" class="espacio_de_relleno" id="email" value="" maxlength="50" placeholder="Ingrese su email" /><br/>
            <span id="mail_error" class="error"></span>
          </div>

          <div class="mini_conteiner">
            <label for="username" >Nombre de usuario*:</label><br/>
            <input type="text" name="username" class="espacio_de_relleno" id="username" value="" maxlength="50" /><br/>
            <span id="username_error" class="error"></span>
          </div>

          <div class="mini_conteiner">
            <label for="password" >Contaseña*:</label><br/>
            <input type="password" name="password" class="espacio_de_relleno" id="password"  maxlength="50" placeholder="Ingrese su contraseña" />
            <div id="password_error" class="error"></div>
          </div>

          <div class="mini_conteiner">
            <label for="repassword" >Repetir Contaseña*:</label><br/>
            <input type="repassword" name="repassword" class="espacio_de_relleno" id="repassword" maxlength="50" placeholder="Repita su contraseña" />
            <div id="repassword_error" class="error"></div>
          </div>

          <div class="mini_conteiner">
            <label for="genero">Indique el genero</label> <br>
            <input type="radio" name="genero" value="Hombre">Hombre<br>
            <input type="radio" name="genero" value="Mujer">Mujer<br>
            <input type="radio" name="genero" value="Otro"> Otro
          </div>

          <div class="mini_conteiner">
            <label for="rendimiento_cocina">Como cocinas?</label><br>
            <input type="radio" name="rendimiento_cocina" value="Puedo ir a Masterchef"> Puedo ir a Masterchef <br>
            <input type="radio" name="rendimiento_cocina" value="Me defiendo"> Me defiendo <br>
            <input type="radio" name="rendimiento_cocina" value="Se me pasan los fideos"> Se me pasan los fideos
          </div>
          <input  type="submit" class="submit" name="Submit" value="Registrarme" />
        </div>
      </form>

      <!--<div class="volver">
        <a href="home.php">Volver</a>
      </div>-->
    </section>

    <?php
      include ("footer.php");
    ?>
  </body>
</html>
