<?php
class MainPageView extends APage {
    use Layout;
    function getPage(){
        $page = <<<EOF
                    <div id="mainPageImage" class="elements"></div>
                    <div id="mainPageIntro" class="elements">
                        <div class="introTitle">This is the intro title</div>
                        <div class="introBody">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Veniam vero consectetur ratione labore cumque dolore quia 
                            neque error, voluptatem sapiente magnam, minima blanditiis.
                            Non repudiandae, ea accusamus corrupti voluptas sapiente!
                        </div>
                    </div>
                    <div class="categorys">
                        <div class="carruselText">
                            <div class="carruselTextTitle">NOTICIAS</div>
                            <div class="carruselTextBody">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Maxime sit, ad omnis sint blanditiis alias eligendi adipisci, 
                                error rem accusantium 
                            </div>
                        </div>
                        <div class="carruselFrame">
                            <div id="carete">
                                <div class="carruselElement" id="chardware">
                                    <div class="carruseEcaption">
                                        <p>
                                            <b>HARDWARE</b> <br>
                                            Publicaciones relacionadas a novedades de respecto al 
                                            hardware de pc, componentes ...
                                        </p>
                                    </div>
                                </div>
                                <div class="carruselElement" id="cgames">
                                    <div class="carruseEcaption">
                                        <p>
                                            <b>JUEGOS Y ENTRETEN.</b> <br>
                                            Publicaciones sobre lanzamientos, juegos gratuitos de la semana
                                            en Epic Games ...
                                        </p>
                                    </div>
                                </div>
                                <div class="carruselElement" id="cfilms">
                                    <div class="carruseEcaption">
                                        <p>
                                            <b>SERIES Y PELICULAS</b> <br> 
                                            Informacion, dudas y publicaciones sobre las series y peliculas populares,
                                            estrenos ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carruselArrowsCont">
                                <span class="arrows" id="leftArrow"></span>
                                <span class="arrows" id="rightArrow"></span>
                            </div>
                        </div>
                    </div>
                    EOF;
        return $page;
    }
}

?>