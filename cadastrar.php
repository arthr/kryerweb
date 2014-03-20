<? require_once('autoload.php'); ?>
<? $db = new Database('web'); ?>
<? if($db->connect()) echo 'CONECTADO';?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
        <meta name="description" content="L2 Nobless Private Server" >
        <meta name="keywords" content="L2, Lineage, Nobless, Interlude" >
        <title>L2 Nobless</title>
        <link href="css/style.css" media="screen" rel="stylesheet" type="text/css" >
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <div class="all">
            <div class="statusbar">
                <div class="statusinside">

                </div>
            </div>
            <div class="wrap">
                <h1>L2 Nobless</h1>
                <? require_once('includes/layout/menu.inc'); ?>
                <? require_once('includes/layout/banner.inc'); ?>
                <div class="clear"></div>
                <div class="inside">
                    <div class="topbg"></div>
                    <!-- // CONTEUDO INICIO // -->
                    <div class="main">
                        <!-- // CONTEUDO INICIO // -->

                        <div class="nbox">
                            <h2>Cadastro de Usuário</h2>
                            <div class="ninside">
                                <div class="post-expand">
                                    <form name="cad-user" method="post" action>
                                        <ul class="cad-form">
                                            <li>
                                                <label>Nome</label>
                                                <input type="text" name="nome" />
                                            </li>
                                            <li>
                                                <label>Sobrenome</label>
                                                <input type="text" name="sobrenome" />
                                            </li>
                                            <li>
                                                <label>Login</label>
                                                <input type="text" name="login" />
                                            </li>
                                            <li>
                                                <label>Senha</label>
                                                <input type="password" name="senha" />
                                            </li>
                                            <li>
                                                <label>Confirmar Senha</label>
                                                <input type="password" name="confenha" />
                                            </li>
                                        </ul>
                                        <input type="submit" class="button" value="Registrar" />
                                    </form>
                                </div>
                                <div class="clean"></div>
                            </div>
                            <div class="newbot"></div>
                        </div>

                        <!-- // CONTEUDO FIM // -->
                    </div>
                    <!-- // CONTEUDO FIM // -->
                    <div class="rightbar">
                        <div class="rbox">
                            <h3>Comece a jogar agora!</h3>
                            <div class="rightcontent">
                                <ul>
                                    <li>
                                        <a class="dclient" href="#">DOWNLOAD CLIENT</a>
                                    </li>
                                    <li>
                                        <a class="dpatch" href="#">DOWNLOAD PATCH</a>
                                    </li>
                                    <li>
                                        <p>Precisa de ajuda? Entre em <a href="#">contato</a>.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="rbox">
                            <h3>TOP 10 PVP Ranking</h3>
                            <div class="rightcontent">
                                <ul>
                                    <li>
                                        <a class="dclient" href="#">DOWNLOAD CLIENT</a>
                                    </li>
                                    <li>
                                        <a class="dpatch" href="#">DOWNLOAD PATCH</a>
                                    </li>
                                    <li>
                                        <p>Precisa de ajuda? Entre em <a href="#">contato</a>.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="rbox">
                            <h3>TOP 10 PK Ranking</h3>
                            <div class="rightcontent">
                                <ul>
                                    <li>
                                        <a class="dclient" href="#">DOWNLOAD CLIENT</a>
                                    </li>
                                    <li>
                                        <a class="dpatch" href="#">DOWNLOAD PATCH</a>
                                    </li>
                                    <li>
                                        <p>Precisa de ajuda? Entre em <a href="#">contato</a>.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="botbg"></div>
                </div>
                <div class="clear2"></div>
                <? require_once('includes/layout/footer.inc'); ?>
            </div>
        </div>
    </body>
</html>