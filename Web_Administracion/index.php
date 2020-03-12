<?php
include_once('./includes/header.php');
?>
<body>


<div class="form-div centrar">
<section>

<form class="form" method="post" action="./modelo/validar.php">
   
<h2>login</h2>

<label for="email" >Usuario</label>
<p>
<input type="email" name="email" id="form-user" placeholder="Ingrese su correo...">
</p>
<br>
<label for="pass"> Contraseña </label>
<p>
<input type="password" name="pass" id="form-pass" >
</p>
<br>
<input type="submit" name="submit" id="form-submit" value="Enviar">

<p class="form-error hide">
    Error usuario o contraseña incorrectos
</p>
<p class="form-registro">
    Si no esta registrado favor registrese <a href="registro.php">aca</a>
</p>

</form>

</section>
</div>
<?php
include_once('./includes/footer.php');
?>



</body>
</html>