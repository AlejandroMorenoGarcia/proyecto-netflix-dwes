<!doctype html>
<html lang="en">
<head>
    <title>Insertar un nueva ROM</title>
</head>
<body>
    <main>
        <form method="post" action="/rom" enctype="multipart/form-data">
            <label for="inputTitulo">Titulo del ROM</label>
            <input type="text" id="inputTitulo" name="titulo">
            <br>
            <label for="inputPlataforma">Insertar Plataforma</label>
            <input type="text" id="inputPlataforma" name="plataforma">
            <br>
            <label for="inputDescripcion">InsertarDescripcion</label>
            <textarea id="inputDescripcion" name="descripcion" cols="20" rows="5"></textarea>
            <br>
            <label for="inputCaratula">Insertar Caratula</label>
            <input type="file" id="inputCaratula" name="caratula" accept="image/*">
            <br>
            <label for="opcionEdad">Insertar Edad Recomendada</label>
            <select id="opcionEdad" name="edad">
                <option>+18</option>
                <option>+16</option>
                <option>+12</option>
                <option>+3</option>
                <option>Todas las Edades</option>
            </select>
            <br>
            <input type="checkbox" id="checkGeneroAventura" name="genero[]" value="Aventura">
            <label for="checkGeneroAventura">Aventura</label>
            <input type="checkbox" id="checkGeneroAccion" name="genero[]" value="Accion">
            <label for="checkGeneroAccion">Accion</label>
            <input type="checkbox" id="checkGeneroSimulacion" name="genero[]" value="Simulacion">
            <label for="checkGeneroSimulacion">Simulacion</label>
            <input type="checkbox" id="checkGeneroRPG" name="genero[]" value="RPG">
            <label for="checkGeneroRPG">RPG</label>
            <br>
            <input type="submit">
        </form>
    </main>
</body>
</html>