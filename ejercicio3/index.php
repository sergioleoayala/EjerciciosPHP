<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">

    <title>Sergio Ayala</title>
</head>
<body>
    <h1>Ejercicios Sergio N° 3 (Cookies)</h1>
    <div class="row">
        <div class="col-3 offset"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">Igrese los datos:</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 offset"></div>
                        <div class="col-6">
                            <form action="procesar_formulario.php" method="post">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" pattern="[a-zA-Z]{3,30}" name="nombre" id="nombre" >
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" pattern="[a-zA-Z]{2,30}" name="apellido" id="apellido">
                                </div>
                                <button type="submit" class="btn btn-primary" name="btnSubmit" value="formSubmit">Enviar</button>
                            </form>
                        </div>
                        <div class="col-3 offset"></div>
                    </div>
                

                    
                </div>
            </div>
        </div>
        <div class="col-3 offset"></div>
    </div>

</body>
</html>