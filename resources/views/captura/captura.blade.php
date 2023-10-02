<!DOCTYPE html>
<html>
<head>
    <title>Captura de Pantalla</title>
</head>
<body>
    <h1>Captura de Pantalla</h1>
    <form method="POST" action="/prueba">
        @csrf
        <label for="url">URL:</label>
        <input type="text" name="url" id="url" required>
        <button type="submit">Capturar</button>
    </form>
</body>

    <div>
        <p>
            <a href="{{ route('captura.vista') }}">Imagenes Subidas</a>
        </p>
    </div>
</html>
