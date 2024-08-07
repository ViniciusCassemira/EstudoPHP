<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Formulário</title>
    </head>
    <body>
        <div id="global">
            <header>
                <h1>Formulário Simples ne pai</h1>
            </header>
            <main>
                <form id="" method="post" action="processaFormulario.php">
                    <label for="Inome">Nome</label>
                    <input id="Inome" name="nome" placeholder="Digite seu nome aqui" type="text" required/>

                    <label for="Iemail">Email</label>
                    <input id="Iemail" name="email" placeholder="Digite seu e-mail" type="email" required />

                    <label for="Iestado">Estado</label>
                    <select name="estado" id="Iestado">
                        <option>Selecione aqui</option>
                        <optgroup>
                            <option value="SP">São Paulo</option>   
                            <option value="MG">Minas Gerais</option>   
                            <option value="RJ">Rio de Janeiro</option>   
                        </optgroup>
                    </select>

                    <label for="Icidade">Cidade</label>
                    <input id="Icidade" name="cidade" type="text" placeholder="Sua cidade atual" required />

                    <button type="submit">Enviar</button>
                </form>
            </main>
            <footer>
            </footer>
        </div>
    </body>
</html>