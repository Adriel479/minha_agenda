<html>
<head>
    <meta charset="utf-8">
    <title>Minha Agenda</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/estilo-minha-agenda.css" />
</head>
<body>
    
    <header class="cabecalho">
        <h1>Minha Agenda</h1>
        <nav>
            <ul>
                <li>
                    <a href="#servico">Serviços</a>
                </li>
                <li>
                    <a href="#entrar">Entrar</a>
                </li>
                <li>
                    <a href="#cadastrese">Cadastre-se</a>
                </li>
                <li>
                    <a href="#trocasenha">Trocar Senha</a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="text-center" id="apresentacao">
        <h2>Minha Agenda</h2>
        <p>Seja bem-vindo ao melhor gerenciador de contatos!</p>
    </section>

    <section id="servico">
           
        <h2 class="text-center">Serviços</h2>
           
        <div class="linha">
            <article class="">
                <h3>Registre</h3>
                <p>Com o <em>Minha Agenda</em>, você poderá salvar seus contatos preferidos
                    e acessálos de qualquer lugar ou dispositivo.</p>
            </article>

            <article class="">
                <h3>Visualize</h3>
                <p>Com o <em>Minha Agenda</em>, você poderá visualizar seus contatos em formato
                    tabular e de formar simples poderá iniciar um chat no Whatsapp Web com
                    apenas um clique. </p>
            </article>

            <article class="">
                <h3>Altere e remova seus contatos</h3>
                <p>Com o <em>Minha Agenda</em>, você poderá editar e remover seus contatos de forma
                    simples e fácil com apenas um clique. </p>
            </article>
        </div>
    </section>

    <hr class="borda"/>
   
    <section id="entrar">
        <h2 class="text-center">Entrar</h2>

        <form action="" method="post">
            <div class="form-group">
                <label for="login_email">E-mail:</label>
                <input type="text" class="form-control" name="email" id="login_email" />
            </div>

            <div class="form-group">
                <label for="login_senha">Senha:</label>
                <input type="password" class="form-control" name="senha" id="login_senha" />
            </div>

            <div class="text-center">
                <input type="submit" value="Entrar" class="btn btn-primary" />
            </div>
        </form>

    </section>

    <hr class="borda"/>

    <section id="cadastrese">
        <h2 class="text-center">Cadastre-se</h2>

        <form action="" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" />
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" name="email" id="email" />
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha" />
            </div>

            <div class="form-group">
                <label for="senha_confirmacao">Senha:</label>
                <input type="password" class="form-control" name="senha_confirmacao" id="senha_confirmacao" />
            </div>

            <div class="text-center">
                <input type="submit" value="Cadastrar" class="btn btn-primary" />
            </div>
        </form>

    </section>

    <hr class="borda"/>
    
    <section id="trocasenha">
        <h2 class="text-center">Trocar Senha</h2>
            
        <form action="" method="post">
            <div class="form-group">
                <label for="rec_email">E-mail:</label>
                <input type="text" class="form-control" name="email" id="rec_email" />
            </div>
            
            <div class="text-center">
                <input type="submit" value="Enviar" class="btn btn-primary" />
            </div>
        </form>

        <form action="" method="post">
            <div class="form-group">
                <label for="codigo_recuperacao">Código de recuperação:</label>
                <input type="text" class="form-control" name="codigo_recuperacao" id="codigo_recuperacao" />
            </div>

            <div class="form-group">
                <label for="nova_senha">Nova senha:</label>
                <input type="password" class="form-control" name="nova_senha" id="nova_senha" />
            </div>

            <div class="form-group">
                <label for="conf_nova_senha">Confirmar nova senha:</label>
                <input type="password" class="form-control" name="conf_nova_senha" id="conf_nova_senha" />
            </div>

            <div class="text-center">
                <input type="submit" value="Alterar Senha" class="btn btn-primary" />
            </div>
        </form>

    </section>

    <section id="rodape" class="text-center">
        <p>Minha Agenda © Todos os direitos reservados.</p>
    </section>

</body>
</html>