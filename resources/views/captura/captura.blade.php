<!DOCTYPE html>
<html>
<head>
    <title>Captura de Pantalla</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

    <div class="container">
        <body>  
            <h1 class="label-title">Captura de Pantalla</h1>
            <form method="POST" action="/prueba" class="bordered-form">
                @csrf
                <label for="url" class="label-bootstrap">URL:</label>
                <input type="text" name="url" id="url" required class="input-bootstrap">
                <button type="submit" class="button-bootstrap">Capturar</button>
            </form>
        </body>
        <div>
            <p>
                <a  class="button-bootstrap-subir" href="{{ route('captura.vista') }}">Imagenes Capturadas</a>
            </p>
        </div>  
    </div>  
</html>
