<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento de Sergio Ayala</title>
</head>
<body>
    <h1>seleccion múltiples</h1>
    
    <form action="procesar_formulario.php" method="post">
        <br><br>
        <label for="nombre">Ingrese su Nombre:</label>
        <input type="text" name="nombreInput" id="nombre" placeholder="nombre/s" >
        
        <br><br>
        <br>
        <label for="autos">Eliga el o los vehículos:</label>
        <select name="autoInput[]" id="autos" multiple>
            <option value="" selected disabled>Select</option>
            <option value="Audi">Audi</option>
            <option value="Ferrari">Ferrari</option>
            <option value="Fiat">Fiat</option>
            <option value="Ford">Ford</option>
            <option value="Honda">Honda</option>
            <option value="Lamborghini">Lamborghini</option>
            <option value="Nissan">Nissan</option>
            <option value="Peugeot">Peugeot</option>
            <option value="Renault">Renault</option>
            <option value="Tesla">Tesla</option>
            <option value="Volkswagen">Volkswagen</option>
        </select>
        <br><br><br>
        
        <button type="submit">Enviar</button>
        <br>
        <button type="reset">Cancelar</button>
    </form>
    
</body>
</html>