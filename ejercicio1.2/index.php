<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento de Sergio Ayala</title>
</head>
<body>
    <h1>Ejercicios Sergio</h1>
    <div class="encabezado"> Formulario para ingresar datos del cliente:</div>
    <br><br>
    <form action="procesar_formulario.php" method="post" enctype="multipart/form-data" >
        <label for="fotoInput">Ingrese su foto de perfil:</label>
        <input type="file" name="fotoInput" id="fotoInput" accept=".jpeg, .jpg">
        <br><br><br>
        <label for="nombre">Ingrese su Nombre:</label>
        <input type="text" name="nombreInput" id="nombre" placeholder="nombre/s">
        <br><br>
        <label for="apellido">Ingrese su Apellido:</label>
        <input type="text" name="apellidoInput" id="apellido" placeholder="apellido/s">
        <br><br>
        <label for="DNI">Ingrese su DNI:</label>
        <input type="number" name="dniInput" id="DNI" value="number" pattern="[0-9]{8}" placeholder="sin puntos">
        <br>
        <br>
        <label for="Nacimiento">Nacimiento</label>
        <input type="date" name="fechaNacimiento" id="Nacimiento">
        <br><br>
        <label>Femenino</label>
        <input type="radio" name="miRadioButton" value="femenino" checked>
        <br>
        <label>Masculino</label>
        <input type="radio" name="miRadioButton" value="masculino">
        <br>
        <label>Otro</label>
        <input type="radio" name="miRadioButton" value="Otro">
        <br><br>
        <label for="paises">País de origen:</label>
        <select name="paisInput[]" id="paises">
            <option value="Select" selected disabled>Select</option>
            <option value="Argentina">Argentina</option>
            <option value="Brasil">Brasil</option>
            <option value="Canada">Canada</option>
            <option value="Colombia">Colombia</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Uruguay">Uruguay</option>
        </select>
        <br><br><br>
        
        <button type="submit">Enviar Formulario</button>
        <br>
        <button type="reset">Limpiar Formulario</button>
    </form>
    
</body>
</html>