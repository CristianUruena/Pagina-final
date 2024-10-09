<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/styles.css">
</head>
<body>

<div id="navbar"></div>

    <section>
        <h2>Contacto</h2>
        <div id="formMessage" style="display: none;"></div>
        <form class="formulario" id="contacform" action="send.php" method="post" autocomplete="off">
            <fieldset>
                <legend>Contáctanos llenando todos los campos</legend>

                <div class="contenedor-campos">
                    <div class="campo">
                        <label for="nombre">Nombre y Apellido</label>
                        <input class="input-text" type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                    </div>

                    <div class="campo">
                        <label for="telefono">Teléfono</label>
                        <input class="input-text" type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
                    </div>

                    <div class="campo">
                        <label for="email">Correo Electrónico</label>
                        <input class="input-text" type="email" id="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="campo">
                        <label for="asunto">Asunto</label>
                        <input class="input-text" type="text" id="asunto" name="asunto" placeholder="Especifique el motivo de su mensaje" required>
                    </div>

                    <div class="campo">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="input-text" id="mensaje" name="mensaje" placeholder="Escribe un mensaje..."></textarea>
                    </div>

                    <div class="campo">
                        <label>
                            <input type="checkbox" name="consentimiento" required>
                            Acepto los <a href="terms-and-conditions.html">términos y condiciones</a>.
                        </label>
                    </div>
                </div>

                <div class="alinear-derecha flex">
                    <input class="boton w-sm-100" type="submit" value="Enviar">
                </div>
            </fieldset>
        </form>
</section>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include("send.php");
        }
        ?>

    <div id="footer"></div>

<script>
    // Cargar el archivo navbar.html
    fetch("Practica final/navbar.html")
        .then(response => response.text())
        .then(data => document.getElementById("navbar").innerHTML = data);

    // Cargar el archivo footer.html
    fetch("Practica final/footer.html")
        .then(response => response.text())
        .then(data => document.getElementById("footer").innerHTML = data);
</script>
<script src="Practica final/script.js"></script>
<script src="script.js"></script>

</body>
</html>