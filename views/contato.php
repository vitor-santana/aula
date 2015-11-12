<!DOCTYPE hmtl>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nome do Site</title>
        <!--Meus arquivos-->
        
        <!--Bootstrap Arquivos-->
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <hgroup>
                    <h1>Título</h1>
                    <h2>Subtítulo</h2>
                </hgroup>
                
                IMAGEM LOGO
                
                <nav id="menu">
                    <ul>
                        <li>menu1</li>
                        <li>menu2</li>
                        <li>menu3</li>
                        <li>menu4</li>
                        <li>menu5</li>
                        <li>menu6</li>
                    </ul>
                </nav>
            </header>
            <section id="conteudo">
                <article id="principal">
                    <form method="post" action="/index.php/control/doPost">
                        <fieldset id="usuario">
                            <legend>Identificação</legend>
                            <p><label for="cnome">Nome:</label>
                                <input type="text" name="tnome" id="cnome" size="50" maxlength="100" placeholder="Digite o nome completo"/></p>
                            <p><label for="cemail">Email:</label>
                                <input type="email" name="temail" id="cemail" size"50" maxlength="50" placeholder="Digite seu email"/></p>
                                <fieldset id="sexo">
                                    <legend>Sexo</legend>
                                        <input type="radio" name="tsexo" id="cmasc"/><label for="cmasc">Masculino</label><br/>
                                        <input type="radio" name="tsexo" id="cfem"/><label for="cfem">Feminino</label>
                                </fieldset>
                        </fieldset>
                        <fieldset id="mensagem">
                            <legend>Mensagem</legend>
                            <p><label for="cmsg">Mensagem:</label>
                                <textarea name="tmsg" id="cmsg" cols="48" rols="5" placeholder="Digite aqui sua mensagem:"></textarea></p>
                        </fieldset>
                        <input type="submit" name="tenvio" id="cenvio" value="Enviar"/>
                    </form>
                </article>
            </section>
            <footer id="rodape">
                </p></p>
            </footer>
        </div>
    </body>
</html>