<html lang="pt-br">
    <head>
        <title>Calcular Imc</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <h1>Calculadora de Imc</h1>
        </header>
        <main>
            <form action="calcular.php" method="POST">
                <label for="Ipeso">Seu peso: </label>
                <input type="step" name="peso" id="Ipeso" required>

                <label for="Ialtura">Sua altura: </label>
                <input type="step" name="altura" id="Ialtura" required>

                <button type="submit">Calcular</button>
            </form>
        </main> 
        <footer>
        </footer>
    </body>
</html>