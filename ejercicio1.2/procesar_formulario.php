<?php

    $nombreInput = $_POST['nombreInput'];
    $apellidoInput = $_POST['apellidoInput'];
    $miRadioButton  = $_POST['miRadioButton'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $paisInput = $_POST['paisInput'];


    if (empty($nombreInput)){
        echo "<br>No ingresó nombre";
    }else{
        echo "<br>Bienvenido $nombreInput!!!";
    }
    if (empty($apellidoInput)){
        echo "<br>No ingresó su apellido";
    }else{
        echo "<br>Apellido ingresado: $apellidoInput";
    }
date_default_timezone_set ('America/Argentina/Buenos_Aires');
$fechaNacimiento = date ("m/d/Y");
echo "<br>Su fecha de Nacimiento ingresado es:".date ("d/m/Y"); 
echo "<br>Su fecha de Nacimiento ingresado es:  $fechaNacimiento "; 

foreach ($paisInput as $index => $paises) {
        echo "<br>   País: $paises";
    }

    echo "<br> Sexo: $miRadioButton";

if(!file_exists('imagenes')){
                if(!mkdir('imagenes',0777)){
                    echo "error no puedo crear esa carpeta";
                    exit();
                }
            }
        
            chmod('imagenes',0777);
        
            if(move_uploaded_file($_FILES['fotoInput']['tmp_name'],'imagenes/'.$_FILES['fotoInput']['name'])){
                echo "<br><br>Archivo subido exitosamente";
            }else{
                echo "<br><br>Error al subir el archivo";
            }

            ?>