<!DOCTYPE html>
<html>

<?php
$root = 'http://localhost/projetositejamprodutora/';
$foto = 'salveo%20planeta.png';

$title = $facebook_title = "Home";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);



include_once "head.php"; ?>

<body>
<?php include_once "header.php"; ?>




<!--Start Banner-->



<div class="tp-banner-container">
    <div class="tp-banner ">
        <ul>
            <!-- SLIDE  -->

            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="images/slides/banner-img1.jpg" class="img-fluid" alt="" data-bgposition="center top"
                     data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYERS -->





                <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0" data-x="center"
                     data-y="250"
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="500" data-start="1400" data-easing="Back.easeOut" data-splitin="none"
                     data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                     style="z-index: 10; max-width: auto; max-height: auto; font-size: 52px; white-space: nowrap;">
                    ETERNIZE SUA TURNÊ
                </div>


                <div class="tp-caption black_thin_34 black_thin_34_bold customin tp-resizeme rs-parallaxlevel-0"
                     data-x="center" data-y="340"
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="500" data-start="1400" data-easing="Back.easeOut" data-splitin="none"
                     data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                     style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">
                    COM A JAM PARA O MUNDO
                </div>






            </li>

            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="images/slides/banner-img1.jpg" class="img-fluid" alt="" data-bgposition="center top"
                     data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYERS -->





                <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0" data-x="0"
                     data-y="250"
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="500" data-start="1400" data-easing="Back.easeOut" data-splitin="none"
                     data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                     style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">
                    GRAVE SEU DVD
                </div>


                <div class="tp-caption black_thin_34 black_thin_34_bold customin tp-resizeme rs-parallaxlevel-0"
                     data-x="0" data-y="340"
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="500" data-start="1400" data-easing="Back.easeOut" data-splitin="none"
                     data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                     style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">Os
                    Melhores DVD's passam pela JAM
                </div>






            </li>

            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="images/slides/banner-img1.jpg" class="img-fluid" alt="" data-bgposition="center top"
                     data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYERS -->





                <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0" data-x="right"
                     data-y="362"
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="500" data-start="1400" data-easing="Back.easeOut" data-splitin="none"
                     data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                     style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">
                    CINEMA
                </div>


                <div class="tp-caption black_thin_34 black_thin_34_bold customin tp-resizeme rs-parallaxlevel-0"
                     data-x="right" data-y="460"
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="500" data-start="1400" data-easing="Back.easeOut" data-splitin="none"
                     data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                     style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">
                    Filmes e Seriados com a Jam Produtora
                </div>






            </li>

            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="images/slides/banner-img1.jpg" class="img-fluid" alt="" data-bgposition="center top"
                     data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYERS -->





                <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0" data-x="center"
                     data-y="250"
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="500" data-start="1400" data-easing="Back.easeOut" data-splitin="none"
                     data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                     style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">
                    GOSPEL
                </div>


                <div class="tp-caption black_thin_34 black_thin_34_bold customin tp-resizeme rs-parallaxlevel-0"
                     data-x="center" data-y="340"
                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="500" data-start="1400" data-easing="Back.easeOut" data-splitin="none"
                     data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                     style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap; font-size: 52px;">
                    DVDs Ministérios de Louvor
                </div>

            </li>



        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</div>

<!--End Banner-->


<!--Start Content-->
<div class="content">

    <!--Start Services-->
    <!--Start Content-->
    <div class="content">
        <div class="departments">

            <div class="depart-sec">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <h2><span>Conheça a JAM no </span> Youtube!</h2>

                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="detail">
                                <h3>VÍDEO CLIPES</h3>
                                <P>Tecnologia e bom gosto a serviço do cliente</P>
                                <br /><br />
                                <h3>PÓS PRODUÇÃO</h3>
                                <P>Mais um diferencial da JAM Produtora</P>
                                <br /><br />
                                <h3>EXPERIÊNCIA NO MERCADO</h3>
                                <P>A JAM Produtora já gravou mais de 100 DVD´s</P>
                                <br /><br />


                                <!-- <button type="button" onclick="window.location.href='https://www.youtube.com/user/jamprodutora77'" formtarget="_blank" class="btn btn-youtube"><span class="btn-youtube-font">Ir para o Youtube</span> <span class="btn-icon-right">
                                    <i class="fab fa-youtube-square"></i></span>
                                </button> -->

                                <a  href='https://www.youtube.com/user/jamprodutora77'" target="_blank" class="btn btn-youtube"><span class="btn-youtube-font">Ir para o Youtube</span> <span class="btn-icon-right">
                                    <i class="fab fa-youtube-square"></i></span>
                                </a>

                            </div>
                        </div>


                        <div class="col-md-6">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/dW9U2XPbk_w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>





</div>
</div>
</div>
<!--End Services-->


<!--Start Services Three-->
<div class="services-three">
    <div class="serv-sec">
        <h3>Criação</h3>
        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
            eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
        <a href="#">Saiba Mais</a>
    </div>

    <div class="serv-sec serv-sec2">
        <h3>Edição</h3>
        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
            eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
        <a href="#">Saiba Mais</a>
    </div>

    <div class="serv-sec serv-sec3">
        <h3>Transmissão</h3>
        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
            eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
        <a href="#">Saiba Mais</a>
    </div>


</div>
<div class="clear"></div>
<!--End Services Three-->

<!--Start Welcome-->
<div class="welcome-two dark-back">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="main-title">
                    <h2><span>Bem vindo a</span> Jam Produtora</h2>
                    <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut
                        volutpat eros adipiscing nonummy.</p>
                </div>
            </div>
        </div>

        <div class="welcome-detail">
            <div class="row">


                <div id="exTab3" class="container">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a  href="#1" data-toggle="tab">Insitucional</a>
                        </li>
                        <li><a href="#2" data-toggle="tab">Jam Produtora</a>
                        </li>
                        <li><a href="#3" data-toggle="tab">Transmissão</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="1">
                            <div id="wrappper-video-main">
                                <div id="video">
                                    <iframe width="700" height="315" src="https://www.youtube.com/embed/wTH-cDLkaO4?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="2">
                            <div id="video">
                                <iframe width="700" height="315" src="https://www.youtube.com/embed/wTH-cDLkaO4?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="tab-pane" id="3">
                            <div id="video">
                                <iframe width="700" height="315" src="https://www.youtube.com/embed/wTH-cDLkaO4?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
</div>
<!--End Welcome-->



<!--Start Services Four-->
<div class="services-four">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="main-title">
                    <h2><span>Nossos</span> Serviços</h2>
                    <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut
                        volutpat eros adipiscing nonummy.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="services-sec">

                    <div class="icon">
                        <i class="fas fa-compact-disc"></i>
                    </div>
                    <div class="detail">
                        <h6>Gravação e Autoração de DVD</h6>
                        <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. <br><a href="#">Veja mais</a></p>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="services-sec">

                    <div class="icon">
                        <i class="fas fa-satellite-dish"></i>
                    </div>
                    <div class="detail">
                        <h6>Transmissão de Eventos</h6>
                        <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. <br><a href="#">Veja mais</a></p>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="services-sec">

                    <div class="icon">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <div class="detail">
                        <h6>Programas de Tv e YouTube</h6>
                        <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. <br><a href="#">Veja mais</a></p>
                    </div>

                </div>
            </div>

            <div class="bottom-serv">

                <div class="col-md-4">
                    <div class="services-sec">

                        <div class="icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="detail">
                            <h6>Videos Clipes e Institucionais</h6>
                            <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. <br><a href="#">Veja mais</a></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="services-sec">

                        <div class="icon">
                            <i class="fas fa-hashtag"></i>
                        </div>
                        <div class="detail">
                            <h6>Gerenciamento Mídias Sociais</h6>
                            <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. <br><a href="#">Veja mais</a></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="services-sec">

                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="detail">
                            <h6>Casting Jam</h6>
                            <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. <br><a href="#">Veja mais</a></p>
                        </div>

                    </div>
                </div>

            </div>

        </div>


    </div>
</div>
<!--End Services Four-->



<!--Start Latest News-->
<div class="latest-news dark-back">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="main-title">
                    <h2><span>Ultimas notícias da</span> Jam Produtora</h2>
                    <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut
                        volutpat eros adipiscing nonummy.</p>
                </div>
            </div>
        </div>




        <div id="latest-news">
            <div class="container">
                <div class="row">
                    <div class="span12">

                        <div id="owl-demo" class="owl-carousel">

                            <div class="post item">
                                <img class="lazyOwl" src="images/news-img1.jpg" alt="">
                                <div class="detail">
                                    <img src="images/news-dr1.jpg" alt="">
                                    <h4><a href="news-detail.html">Center for Medical</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                                    <span><i class="icon-clock3"></i> Apr 22, 2016</span>
                                    <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 5
                                                                    Comments</a></span>
                                </div>
                            </div>
                            <div class="post item">
                                <img class="lazyOwl" src="images/news-img2.jpg" alt="">
                                <div class="detail">
                                    <img src="images/news-dr2.jpg" alt="">
                                    <h4><a href="news-detail.html">Laboratory Tests</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                                    <span><i class="icon-clock3"></i> Apr 09, 2016</span>
                                    <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 3
                                                                        Comments</a></span>
                                </div>
                            </div>

                            <div class="post item">
                                <img class="lazyOwl" src="images/news-img3.jpg" alt="">
                                <div class="detail">
                                    <img src="images/news-dr1.jpg" alt="">
                                    <h4><a href="news-detail.html">Research Center</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                                    <span><i class="icon-clock3"></i> Mar 28, 2016</span>
                                    <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 0
                                                                            Comments</a></span>
                                </div>
                            </div>

                            <div class="post item">
                                <img class="lazyOwl" src="images/news-img4.jpg" alt="">
                                <div class="detail">
                                    <img src="images/news-dr2.jpg" alt="">
                                    <h4><a href="news-detail.html">Child Birth</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                                    <span><i class="icon-clock3"></i> Mar 15, 2016</span>
                                    <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 0
                                                                                Comments</a></span>
                                </div>
                            </div>

                            <div class="post item">
                                <img class="lazyOwl" src="images/news-img5.jpg" alt="">
                                <div class="detail">
                                    <img src="images/news-dr2.jpg" alt="">
                                    <h4><a href="news-detail.html">Special Treatment</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                                    <span><i class="icon-clock3"></i> Mar 04, 2016</span>
                                    <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i>
                                                                                    11 Comments</a></span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>



    </div>
</div>
<!--End Latest News-->


<!--Start Fun Facts-->

<div class="fun-facts counter-iconic" id="counters">
    <div class="row">

        <div class="col-md-3">
            <div class="counter">
                <span class="number quantity-counter1 quantity-counter highlight">10</span>
                <span class="what-do">Prêmios</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="counter">
                <span class="number quantity-counter2 quantity-counter highlight">186</span>
                <span class="what-do">Clientes Satisfeitos</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="counter">
                <span class="number quantity-counter3 quantity-counter highlight">25</span>
                <span class="what-do">Clientes Atendidos</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="counter">
                <span class="number quantity-counter4 quantity-counter highlight">355</span>
                <span class="what-do">Em Produção</span>
            </div>
        </div>

    </div>
</div>
<!--End Fun Facts-->

<!--Start Testimonials-->
<div class="patients-testi dark-back">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="main-title main-title2">
                    <h2><span>O que nossos Clientes dizem</span> Sobre Nós</h2>
                </div>
            </div>
        </div>

        <div id="testimonials">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="span12">

                            <div id="owl-demo2" class="owl-carousel">

                                <div class="testi-sec">
                                    <img src="images/testimonial-img1.jpg" alt="">
                                    <div class="height10"></div>
                                    <span class="name">Elebana Front</span>
                                    <span class="patient">Heart Patient</span>
                                    <div class="height30"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. vitae
                                        felis pretium, euismod ipsum nec, placerat turpis. Aenean eu gravida arcu,
                                        et consectetur orci Quisque posuere dolor in malesuada fermentum.</p>
                                    <div class="height35"></div>


                                </div>
                                <div class="testi-sec">
                                    <img src="images/testimonial-img2.jpg" alt="">
                                    <div class="height10"></div>
                                    <span class="name">Johny Bravo</span>
                                    <span class="patient">Hair Patient</span>
                                    <div class="height30"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. vitae
                                        felis pretium, euismod ipsum nec, placerat turpis. Aenean eu gravida arcu,
                                        et consectetur Quisque posuere dolor in malesuada fermentum sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>



                                </div>
                                <div class="testi-sec">
                                    <img src="images/testimonial-img3.jpg" alt="">
                                    <div class="height10"></div>
                                    <span class="name">Rubica Noi</span>
                                    <span class="patient">Skin Patient</span>
                                    <div class="height30"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. vitae
                                        felis pretium, euismod ipsum nec, placerat turpis. Aenean eu gravida arcu,
                                        et consectetur orci Quisque posuere dolor in malesuada fermentum.</p>
                                    <div class="height35"></div>

                                </div>


                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


<!--End Testimonials-->

</div>
<!--End Content-->



<?php include_once "footer.php"; ?>

</body>

</html>