<?php //include("gzip/gzipHTML.php"); ?>
<!doctype html>
<html lang="pt-br">
    <head>
        <?php include("header_nocache.php"); ?>
        <?php //include("header_cache.php"); ?>
        <?php include("header.php"); ?>
        <link rel="stylesheet" type="text/css" href="./css/estilo.min.css"/>
        <title><?=$titulo?></title>
    </head>

    <body>
        <?php include("topo.php"); ?>
        <main id="inicial" tabindex="-1">
            <div class="container">
                <div class="element element-1">
                    <div class="element-front">
                        <img src="https://picsum.photos/601" class="img-cover" alt="Elemento 01">
                    </div>
                    <div class="element-back">
                        <div class="element-back--container">
                            <h2 class="element-back--title">This is a Title</h2>
                            <div class="element-back--desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <ul class="element-back--icons">
                                <li><i class="fab fa-facebook"></i></li>
                                <li><i class="fab fa-instagram"></i></li>
                                <li><i class="fab fa-x-twitter"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="element element-2">
                    <div class="element-front">
                        <img src="https://picsum.photos/602" class="img-cover" alt="Elemento 02">
                    </div>
                    <div class="element-back">
                        <div class="element-back--container">
                            <h2 class="element-back--title">This is a Title</h2>
                            <div class="element-back--desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <ul class="element-back--icons">
                                <li><i class="fab fa-facebook"></i></li>
                                <li><i class="fab fa-instagram"></i></li>
                                <li><i class="fab fa-x-twitter"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="element element-3">
                    <div class="element-front">
                        <img src="https://picsum.photos/603" class="img-cover" alt="Elemento 03">
                    </div>
                    <div class="element-back">
                        <?php for($i=0;$i<4;$i++) { ?>
                            <div class="bar" aria-hidden="true"></div>
                        <?php } ?>
                        <img src="https://picsum.photos/603" class="img-cover" alt="Elemento 03">
                        <div class="element-back--container">
                            <h2 class="element-back--title">This is a Title</h2>
                            <div class="element-back--desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <ul class="element-back--icons">
                                <li><i class="fab fa-facebook"></i></li>
                                <li><i class="fab fa-instagram"></i></li>
                                <li><i class="fab fa-x-twitter"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="element element-4">
                    <div class="element-front">
                        <img src="https://picsum.photos/604" class="img-cover" alt="Elemento 04">
                    </div>
                    <div class="element-back">
                        <div class="element-back--container">
                            <h2 class="element-back--title">This is a Title</h2>
                            <div class="element-back--desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <ul class="element-back--icons">
                                <li><i class="fab fa-facebook"></i></li>
                                <li><i class="fab fa-instagram"></i></li>
                                <li><i class="fab fa-x-twitter"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include("rodape.php"); ?>
        <?php include("scripts.php"); ?>
        <script type="text/javascript" src="./js/init.min.js"></script>
    </body>
</html>