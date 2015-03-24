<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Produits</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/jquery.scrollex.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <noscript>

        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/products.css" />
    <link rel="stylesheet" href="css/item.css" />

    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body>

<!-- Header -->
<header id="header" class="skel-layers-fixed">
    <h1 id="logo"><a href="index.html">Posthings</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li>
                <a href="">Produits</a>
                <ul>
                    <li><a href="left-sidebar.html">Achat/Vente</a></li>
                    <li><a href="right-sidebar.html">Cours Particuliers</a></li>
                    <li><a href="no-sidebar.html">Evenements</a></li>
                    <!--<li>
                        <a href="">Submenu</a>
                        <ul>
                            <li><a href="#">Option 1</a></li>
                            <li><a href="#">Option 2</a></li>
                            <li><a href="#">Option 3</a></li>
                            <li><a href="#">Option 4</a></li>
                        </ul>
                    </li>-->
                </ul>
            </li>
            <li><a href="elements.html">Nous ?</a></li>
            <li><a href="#" class="button special">Inscrivez-Vous</a></li>
        </ul>
    </nav>
</header>

<!-- Main -->
<div id="main" class="wrapper style1">
    <div class="container">
        <header class="major">


                <div class="container search">
                    <header>
                        <h2>Que recherchez-vous ?</h2>
                    </header>
                    <form method="post" action="#" class="container 50%">
                        <div class="row uniform 50%">
                            <div class="8u 12u$(xsmall)"><input type="text" name="search" id="search" placeholder="Tapez ce qui vous passe par la tête ICI ..." /></div>
                            <div class="select-wrapper">
                                <select name="category" id="category">
                                    <option value="">- Catégorie -</option>
                                    <option value="1">Ordinateur</option>
                                    <option value="1">Montre</option>
                                    <option value="1">Sac</option>
                                    <option value="1">Cours</option>
                                </select>
                            </div>
                            <div class="4u$ 12u$(xsmall)"><input type="submit" value="Go" class="fit special" /></div>
                        </div>
                    </form>
                </div>

        </header>



        <?php
            @include ('list-products.php');
        ?>

    </div>
</div>

<!-- Footer -->
<footer id="footer">
    <ul class="icons">
        <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
        <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="https://github.com/AminMe/Projet-WebBD-AK-HE-ME-ZH" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
        <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
    </ul>
    <ul class="copyright">
        <h1 id="logofooter"><a href="index.html">Posthings</a></h1>
        <br/>
        <li>&copy; Copyright Reserved <a>Posthings.com</a></li>
    </ul>
</footer>
<script src="js/item.js"></script>
</body>
</html>