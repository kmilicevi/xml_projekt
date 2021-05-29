<?php
$xmlb = simplexml_load_file("ballet.xml");
?>
<html>
    <head>
        <title>Ballet shoes</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css.css"/>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
    </head>

    <body id="omotac">
        <header class="sticky-top">
            <a href="#"><img src="logo.jpg"/></a>
        </header>

        <main>
            <article>
                <div class="image col-xl-6 col-sm-12">
                    <img src='img/alegra.jpg'/></a>
                </div>
                <div class="tekst col-xl-6 col-sm-12">
                    <?php
                        $bshoe=$xmlb->shoe;
                        $bname=$bshoe[0]->name;
                        $bbrand=$bshoe[0]->brand;
                        $bopis=$bshoe[0]->opis;
                        $blink=$bshoe[0]->link;
                        echo "
                            <h1>" . $bname . "</h1><br>
                            <h3>Brand: " . $bbrand . "</h3><br>
                            <p>" . $bopis . "</p>
                            <a href='" . $blink . "' target='blank'>Buy</a>
                        ";
                    ?>
                </div>
            </article>

            <article>
                    <div class="image col-xl-6 col-sm-12">
                    <img src='img/bloch.jpg'/>
                </div>
                <div class="tekst col-xl-6 col-sm-12">
                    <?php
                        $bshoe=$xmlb->shoe;
                        $bname=$bshoe[1]->name;
                        $bbrand=$bshoe[1]->brand;
                        $bopis=$bshoe[1]->opis;
                        $blink=$bshoe[1]->link;
                        echo "
                            <h1>" . $bname . "</h1><br>
                            <h3>Brand: " . $bbrand . "</h3><br>
                            <p>" . $bopis . "</p>
                            <a href='" . $blink . "' target='blank'>Buy</a>
                        ";
                    ?>
                </div>
            </article>
            
            <article>
                    <div class="image col-xl-6 col-sm-12">
                    <img src='img/capezio.jpg'/>
                </div>
                <div class="tekst col-xl-6 col-sm-12">
                    <?php
                        $bshoe=$xmlb->shoe;
                        $bname=$bshoe[2]->name;
                        $bbrand=$bshoe[2]->brand;
                        $bopis=$bshoe[2]->opis;
                        $blink=$bshoe[2]->link;
                        echo "
                            <h1>" . $bname . "</h1><br>
                            <h3>Brand: " . $bbrand . "</h3><br>
                            <p>" . $bopis . "</p>
                            <a href='" . $blink . "' target='blank'>Buy</a>
                        ";
                    ?>
                </div>
            </article>
            
            <article>
                    <div class="image col-xl-6 col-sm-12">
                    <img src='img/freed.jpg'/>
                </div>
                <div class="tekst col-xl-6 col-sm-12">
                    <?php
                        $bshoe=$xmlb->shoe;
                        $bname=$bshoe[3]->name;
                        $bbrand=$bshoe[3]->brand;
                        $bopis=$bshoe[3]->opis;
                        $blink=$bshoe[3]->link;
                        echo "
                            <h1>" . $bname . "</h1><br>
                            <h3>Brand: " . $bbrand . "</h3><br>
                            <p>" . $bopis . "</p>
                            <a href='" . $blink . "' target='blank'>Buy</a>                       
                        ";
                      ?>
                </div>
            </article>
            
            <article>
                    <div class="image col-xl-6 col-sm-12">
                    <img src='img/merlet.jpg'/>
                </div>
                <div class="tekst col-xl-6 col-sm-12">
                    <?php
                        $bshoe=$xmlb->shoe;
                        $bname=$bshoe[4]->name;
                        $bbrand=$bshoe[4]->brand;
                        $bopis=$bshoe[4]->opis;
                        $blink=$bshoe[4]->link;
                        echo "
                            <h1>" . $bname . "</h1><br>
                            <h3>Brand: " . $bbrand . "</h3><br>
                            <p>" . $bopis . "</p>
                            <a href='" . $blink . "' target='blank'>Buy</a>                        
                        ";
                    ?>
                </div>
            </article>
            
            <article>
                    <div class="image col-xl-6 col-sm-12">
                    <img src='img/move_dance.jpg'/>
                </div>
                <div class="tekst col-xl-6 col-sm-12">
                    <?php
                        $bshoe=$xmlb->shoe;
                        $bname=$bshoe[5]->name;
                        $bbrand=$bshoe[5]->brand;
                        $bopis=$bshoe[5]->opis;
                        $blink=$bshoe[5]->link;
                        echo "
                            <h1>" . $bname . "</h1><br>
                            <h3>Brand: " . $bbrand . "</h3><br>
                            <p>" . $bopis . "</p>
                            <a href='" . $blink . "' target='blank'>Buy</a>                        
                        ";
                    ?>
                </div>
            </article>
            
            <article>
                    <div class="image col-xl-6 col-sm-12">
                    <img src='img/repetto.jpg'/>
                </div>
                <div class="tekst col-xl-6 col-sm-12">
                    <?php
                        $bshoe=$xmlb->shoe;
                        $bname=$bshoe[6]->name;
                        $bbrand=$bshoe[6]->brand;
                        $bopis=$bshoe[6]->opis;
                        $blink=$bshoe[6]->link;
                        echo "
                            <h1>" . $bname . "</h1><br>
                            <h3>Brand: " . $bbrand . "</h3><br>
                            <p>" . $bopis . "</p>
                            <a href='" . $blink . "' target='blank'>Buy</a>                       
                        ";
                    ?>
                </div>
            </article>
            <article>
                    <div class="image col-xl-6 col-sm-12">
                    <img src='img/sansha.jpg'/>
                </div>
                <div class="tekst col-xl-6 col-sm-12">
                    <?php
                        $bshoe=$xmlb->shoe;
                        $bname=$bshoe[7]->name;
                        $bbrand=$bshoe[7]->brand;
                        $bopis=$bshoe[7]->opis;
                        $blink=$bshoe[7]->link;
                        echo "
                            <h1>" . $bname . "</h1><br>
                            <h3>Brand: " . $bbrand . "</h3><br>
                            <p>" . $bopis . "</p>
                            <a href='" . $blink . "' target='blank'>Buy</a>                        
                        ";
                    ?>
                </div>
            </article>
            
            <article>
                    <div class="image col-xl-6 col-sm-12">
                    <img src='img/so_danca.jpg'/>
                </div>
                <div class="tekst col-xl-6 col-sm-12">
                    <?php
                        $bshoe=$xmlb->shoe;
                        $bname=$bshoe[8]->name;
                        $bbrand=$bshoe[8]->brand;
                        $bopis=$bshoe[8]->opis;
                        $blink=$bshoe[8]->link;
                        echo "
                            <h1>" . $bname . "</h1><br>
                            <h3>Brand: " . $bbrand . "</h3><br>
                            <p>" . $bopis . "</p>
                            <a href='" . $blink . "' target='blank'>Buy</a>                       
                        ";
                    ?>
                </div>
            </article>
            
            <article>
                    <div class="image col-xl-6 col-sm-12">
                    <img src='img/tappers_pointers.jpg'/>
                </div>
                <div class="tekst col-xl-6 col-sm-12">
                    <?php
                        $bshoe=$xmlb->shoe;
                        $bname=$bshoe[9]->name;
                        $bbrand=$bshoe[9]->brand;
                        $bopis=$bshoe[9]->opis;
                        $blink=$bshoe[9]->link;
                        echo "
                            <h1>" . $bname . "</h1><br>
                            <h3>Brand: " . $bbrand . "</h3><br>
                            <p>" . $bopis . "</p>
                            <a href='" . $blink . "' target='blank'>Buy</a>                       
                        ";
                    ?>
                </div>
            </article>

            <article>
                <div class="image col-xl-6 col-sm-12">
                    <img src='img/basilica.jpg'/>
                </div>
                <div class="tekst col-xl-6 col-sm-12">
                    <?php
                        $bshoe=$xmlb->shoe;
                        $bname=$bshoe[10]->name;
                        $bbrand=$bshoe[10]->brand;
                        $bopis=$bshoe[10]->opis;
                        $blink=$bshoe[10]->link;
                        echo "
                            <h1>" . $bname . "</h1><br>
                            <h3>Brand: " . $bbrand . "</h3><br>
                            <p>" . $bopis . "</p>
                            <a href='" . $blink . "' target='blank'>Buy</a>                        
                        ";
                    ?>
                </div>
            </article>
            <article></article>
        </main>

        <footer>
            <P> XML Programiranje, Katarina Miličević, kmilicevi@tvz.hr, 2021.</p>
        </footer>
    </body>
</html>