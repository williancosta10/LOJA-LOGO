<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="Este é o teste desenvolvido por mim :)">
    <meta name="keywords" content="mkt, virtual, agencia, ">

    <link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <?php wp_head(); ?>

</head>
<body>

<header class="header_principal hidden-xs">
    <section class="head">
        <div class="container">
            <nav>
                <li><a href="#">Peça seu Cartão de Cliente</a></li>
                <li><a href="#"><span class="icon_bol"></span> Solicite a 2ª via do boleto</a></li>
                <li><a href="#">Encontre uma loja</a></li>
                <li><a href="#">Assine a newsletter</a></li>
                <li>
                    <div class="search">
                        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                            <input type="text" placeholder="Busca" name="s" id="s" onblur="clearText(this)" onfocus="clearText(this)" /> 
                            <input type="submit" value="" id="searchsubmit" class="submit-pesquisar"/>
                        </form>
                    </div>
                </li>
            </nav>
        </div>
    </section>
    <section class="menu">
        <div class="container">
            <a href="#">
                <img class="logo img-responsive" src="<?php bloginfo('template_url'); ?>/images/logos/logo.png">
            </a>
            <nav>
                <li><a href="#">CAMPANHAS</a></li>
                <li class="open_menu">
                    <a href="#">FEMININO</a>
                    <nav class="submenu">
                        <div class="sub-feminino">
                            <a href="#">Adulto</a>
                            <a href="#">Tamanhos Grandes</a>
                            <a href="#">Esporte</a>
                            <a href="#">Lingerie</a>
                            <a href="#">Acessórios</a>
                        </div>
                    </nav>
                </li>
                <li class="open_menu">
                    <a  href="#">MASCULINO</a>
                    <nav class="submenu">
                        <div class="sub-masculino">
                            <a href="#">Adulto</a>
                            <a href="#">Tamanhos Grandes</a>
                            <a href="#">Esporte</a>
                            <a href="#">Acessórios</a>
                        </div>
                    </nav>
                </li>
                <li class="open_menu">
                    <a href="#">KIDS</a>
                    <nav class="submenu">
                        <div class="sub-kids">
                            <a href="#">Bebê</a>
                            <a href="#">Infantil</a>
                            <a href="#">Juvenil</a>
                        </div>
                    </nav>
                </li>
                <li><a href="#">CASA</a></li>
                <li><a href="#">PROMOÇÕES</a></li>
            </nav>
        </div>
    </section>
</header>

<section class="header_mobile hidden-sm hidden-md hidden-lg">
    <div class="container">
        <a href="#">
            <img class="logo img-responsive" src="<?php bloginfo('template_url'); ?>/images/logos/logo.png">
        </a>
        <button class="navbar-toggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <section class="navbar-mob">
        <div class="nav-header">
            <span class="btn-close">X</span>
            <div class="clear"></div>
            <div class="search">
                <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                    <input type="text" placeholder="Busca" name="s" id="s" onblur="clearText(this)" onfocus="clearText(this)" /> 
                    <input type="submit" value="" id="searchsubmit" class="submit-pesquisar"/>
                </form>
            </div>
            <nav class="navegate-list">
               <li><a href="#">CAMPANHAS</a></li>
               <li>
                    <a href="#">FEMININO</a>
                    <ul>
                        <li><a href="#">Adulto</a></li>
                        <li><a href="#">Tamanhos Grandes</a></li>
                        <li><a href="#">Esporte</a></li>
                        <li><a href="#">Lingerie</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
               </li>
               <li>
                    <a href="#">MASCULINO</a>
                    <ul>
                        <li><a href="#">Adulto</a></li>
                        <li><a href="#">Tamanhos Grandes</a></li>
                        <li><a href="#">Esporte</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
               </li>
               <li>
                    <a href="#">KIDS</a>
                    <ul>
                        <li><a href="#">Bebê</a></li>
                        <li><a href="#">Infantil</a></li>
                        <li><a href="#">Juvenil</a></li>
                    </ul>
               </li>
               <li><a href="#">CASA</a></li>
               <li><a href="#">PROMOÇÕES</a></li>
            </nav>
        </div>
    </section>
</section>