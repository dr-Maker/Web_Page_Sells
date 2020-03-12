
<?php


try {
   //Intenta esto 
        //incluye el archivo de la coneccion 
        include_once('../conexion/conex.php');
        echo'<br>';
        $sql = "SELECT * FROM administradores";
        $resultados = $conn -> query($sql);
        $conn -> close();


} catch ( Exeption $e) {
    // Si no se logra el TRY se ejecuta el Catch y la pagina no se CAE 
    echo $e->getMessage();

}

    while ($administrador = $resultados -> fetch_assoc()){ 
        
        
        
    ?>


<!-- visualiar el resultado  -->




<pre>
    
    <?php  echo $administrador['Correo_Adm'] ;?>
    <?php  echo $administrador['Pass_Adm'] ;?>
  
    
    
</pre>

    <?php  };?> <!-- fin While -->



