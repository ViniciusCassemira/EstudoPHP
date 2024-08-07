<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Teste simples</title>
    </head>
    <body>
        <header>
            <h1>Hello, World</h1>
        </header>
        <main>
            <form method="post" action="processar.php">
                <label for="name">Name: </label>
                <input id="Iname" name="name" type="text" placeholder="your name here" required />

                <br/>
                <label for="gender">Gender</label>
                <input type="radio" name="gender" id="Ifemale" value="female" required>Female
                <input type="radio" name="gender" id="Imale" value="male" required>Male

                <br/>
                <button type="submit">submit</button>
                <button type="reset">reset</button>
            </form>
        </main>
    </body>
</html>