<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento de Sergio Ayala</title>
</head>
<body>
    <h1>Ejercicio 4, Cálculos:</h1>
    
    <form action="procesar_formulario.php" method="post">
        <br><br>
        <label for="nombre">Ingrese su Nombre:</label>
        <input type="text" name="nombreInput" id="nombre" placeholder="nombre/s" >
        
        <br><br>
        <br>
        <label for="operacion">Eliga la operación a realizar:</label>
        <select name="operacionInput[]" id="operaciones">
        <option value="" selected disabled>Select</option>
            <option value="sumar">sumar</option>
            <option value="restar">restar</option>
            <option value="dividir">dividir</option>
            <option value="multiplicar">multiplicar</option>
            <br><br>
        </select>
        <br><br>
        <label for="num1">Ingrese Primer Número:</label>
            <input type="number" name="num1" id="num1" required>
            <br><br>
        <label for="num2">Ingrese Segundo Número:</label>
            <input type="number" name="num2" id="num2" required>
        <br>
        
        <br><br><br>
        
        <button type="submit">Enviar</button>
        <br>
        <button type="reset">Cancelar</button>
        </form>
    
</body>
</html>