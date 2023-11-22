

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">
                <picture>
                    <source srcset="/img/LOGOS/logo_retangular1.png" media="(max-width: 600px)" width="150px" />
                    <img src="/img/LOGOS/logo_dark.png" alt="Logo" width="200rem" class="mx-3 d-inline-block align-text-top">
                </picture>

            </a>


            <div class="collapse navbar-collapse justify-content-center" id="navbar_links">
                <div class="navbar-nav" id="navbar">
                    <a class="nav-item nav-link" id='artOrganizer-menu' href="#banner1">ArtOrganizer</a>
                    <a class="nav-item nav-link" id='adicionar-menu' href="#banner2">Adicionar</a>
                    <a class="nav-item nav-link" id='organizar-menu' href="#banner3">Organizar</a>
                    <a class="nav-item nav-link" id='compartilhar-menu' href="#banner4">Compartilhar</a>
                    <a class="nav-item nav-link" id="contatos-menu" href="#banner5">Contatos</a>

                </div>

            </div>

            <div class="row">
                <div class="col">
                    <button class="button btn" id="btnEntrar" onclick="fcPopupLogin()">Entrar</button>
                </div>

                <div class="col mx-4">
                    <button class="button btn" id="btnCadastrar" onclick="fcPopupCadastrar()">Cadastrar</button>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_links" aria-controls="navbar_links" aria-expanded="false" aria-label="togler navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

    <dialog class="container" id="popupLogin">

        <div class=" row">
            <div class="col-10 justify-content-center d-flex  ">
                <div class="d-flex justify-content-center aling-items-center">
                    <h1>Login</h1>
                </div>
                
            </div>
            <div class="col">
            <button class="btn button" id="fechar" onclick="fcPopupFechar()">Fechar</button>
            </div>




        </div>

        <div class="row my-5">

            <div class="col-1"></div>

            <div class="container col-10" id="popup_content">

                <div class="row">

                    <div class="col-1"></div>
                    <form class="col-10" action="/login" method="post">

                        <div class="mb-3">
                            <label for="InputEmail1" class="form-label">Email </label>
                            <input id="email_log" type="email" class="form-control" name="email_log" aria-describedby="emailHelp">
                            
                        </div>

                        <div class="mb-3">
                            <label for="InputSenha" class="form-label">Senha</label>
                            <input id="senha_log" type="password" class="form-control" name="senha_log">
                        </div>

                        <div class="row">
                            <div class="col-2"></div>
                            <button type="submit" id="enviar_log" class="col-8 btn button btn-primary">Login</button>
                            <div class="col-2"></div>
                        </div>

                    </form>

                    <div class="col-1"></div>

                </div>

            </div>
            <div class="col-1"></div>

        </div>

    </dialog>

    <dialog class="container" id="popupCadastrar">

        <div class="justify-content-end row">
            <div class="col-10"></div>
            <button class="btn button col-1" id="fechar" onclick="fcPopupFechar()">Fechar</button>
            <div class="col-1"></div>
        </div>

        <div class="row my-5">

            <div class="col-1"></div>

            <div class="container col-10" id="popup_content">

                <div class="row">

                    <div class="col-1"></div>
                    <form class="col-10" action="/cadastrar" method="post">

                        <div class="mb-3">
                            <label for="InputNome" class="form-label">Nome </label>
                            <input id="nome_cad" type="text" class="form-control" name="nome_cad" required>
                        </div>

                        <div class="mb-3">
                            <label for="InputNome" class="form-label">Nickname </label>
                            <input id="user_cad" type="text" class="form-control" name="user_cad" required>
                        </div>

                        <div class="mb-3">
                            <label for="InputEmail1" class="form-label">Email </label>
                            <input id="email_cad" type="email" class="form-control" name="email_cad" aria-describedby="emailHelp" required>

                            
                        </div>

                        <div class="mb-3">
                            <label for="InputSenha" class="form-label">Senha</label>
                            <input id="senha_cad" type="password" class="form-control" name="senha_cad" required>
                        </div>

                        <div class="mb-3">
                            <label for="InputNasc" class="form-label">Data de Nacimento</label>
                            <input id="nasc_cad" type="date" id="InputNasc" name="nasc_cad" value="2023-08-" max="2008-08-16" required>
                        </div>



                        <div class="row">
                            <div class="col-2"></div>
                            <button type="submit" id="enviar_cad" class="col-8 btn button btn-primary">Cadastrar</button>
                            <div class="col-2"></div>
                        </div>
                    </form>

                    <div class="col-1"></div>

                </div>

            </div>

            <div class="col-1"></div>
        </div>

    </dialog>

    <!-- Banners -->
    <section class="banners container-fluid d-flex justify-content-center fs-sm-64" id="banner1">
        <h1 class="h1 row b1-font-h1" id="banner1_titulo">ArtOrganizer</h1>
        <h2 class="lead row b1-font-h2" id="banner1_subtitulo">Sua nova biblioteca digital</h2>
    </section>

    <section class="container-fluid d-flex" id="banner2">
        <div class="container d-flex" id="banner2_textos">
            <h1 class="row h1 b2-font-h1 text-start">Adicione Artigos com facilidade</h1>

            <p class="row lead b2-font-h2 text-justify">Com ArtOrganizer, os usuários podem facilmente compartilhar seus
                conhecimentos e perspectivas com a comunidade de entusiastas de artigos. Adicionar um novo artigo é
                simples: basta inserir um título, conteúdo e tags relacionadas. Compartilhe seu conhecimento hoje mesmo!
            </p>
        </div>
    </section>

    <section class="banners container-fluid d-flex justify-content-center" id="banner3">
        <div class="container d-flex cartao">
            <div class="container-fluid col-md-8" id="banner3_textos">
                <h1 class="b2-font-h1 text-center mb-5">Organização de Artigos</h1>

                <p class="b2-font-h2 text-justify mt-5">Com o ArtOrganizer, os usuários podem criar pastas
                    personalizadas para organizar seus artigos de acordo com temas, projetos ou preferências
                    individuais. Isso ajuda a manter seus artigos organizados e fáceis de encontrar, para que possam ser
                    acessados rapidamente quando necessário.</p>
            </div>
            <div id="banner3_img" class="container-fluid col-md-4"></div>
        </div>
    </section>




    <section class="banners container-fluid d-flex justify-content-center" id="banner4">
        <div class="container d-flex  cartao justify-content-center">
            <div class="container-fluid col-md-4" id="banner4_img"></div>
            <div class="container-fluid col-md-8" id="banner4_textos">

                <h1 class="row justify-content-center b2-font-h1 text-center mb-5" id="banner4_titulo">Compartilhamento
                    de Artigos</h1>
                <p class="row justify-content-center b2-font-h2 text-justify mt-5" id="banner4_text">Os usuários do
                    ArtOrganizer podem compartilhar facilmente seus artigos com outros usuários da plataforma ou através
                    de plataformas de mídia social. Isso permite que os usuários alcancem um público mais amplo e
                    compartilhem seus conhecimentos com outras pessoas interessadas no mesmo assunto.</p>

            </div>
        </div>
    </section>



    <!-- Rodapé-->

    <section class="container-fluid border " id="banner5">
        <div class="container p-5" id="footer_contatos">
            <div class="row">
                <h1 class="col footer-fonts-h1">Contatos</h1>
            </div>
            <div class="row">
                <p class="col footer-fonts-h2">Entre em contato conosco para dúvidas, sugestões ou reclamações. Sua
                    opinião é
                    importante para nós.</p>
            </div>
            <div class="row">
                <div class="col m-3">
                    <div class="row">
                        <h1 class="footer-fonts-h1">Telefone</h1>
                    </div>
                    <div class="row">
                        <p class="footer-fonts-h2">(48) 99140-7636</p>
                    </div>
                    <div class="row">
                        <p class="footer-fonts-h2">(48) 9977-4587</p>
                    </div>
                </div>
                <div class="col m-3">
                    <div class="row">
                        <h1 class="footer-fonts-h1">Email</h1>
                    </div>
                    <div class="row">
                        <p class="footer-fonts-h2">Art.Organizer01@gmail.com</p>
                    </div>
                </div>
                <div class="col m-3">
                    <div class="row">
                        <h1 class="footer-fonts-h1">Instagram</h1>
                    </div>
                    <div class="row">
                        <p class="footer-fonts-h2">artorganizer_</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

