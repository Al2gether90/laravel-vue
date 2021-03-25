@extends('layouts.main')

@section('content')
    <!-- CAROUSEL ================================================== -->
    <section class="carousel carousel-fade slide home-slider" id="c-slide" data-ride="carousel" data-interval="4500"
             data-pause="false">
        <ol class="carousel-indicators">
            <li data-target="#c-slide" data-slide-to="0" class="active"></li>
            <li data-target="#c-slide" data-slide-to="1" class=""></li>
            <li data-target="#c-slide" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active"
                 style="background: url(http://www.wowthemes.net/demo/calypso/img/demo/bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 fadein scaleInv anim_1">
                            <div class="fadein scaleInv anim_2">
                                <h1 class="carouselText1 animated fadeInUpBig">Welcome to <span class="colortext">Calypso</span>
                                </h1>
                            </div>
                            <div class="fadein scaleInv anim_1">
                                <p class="carouselText2 animated fadeInLeft">
                                    MultiPurpose Template
                                </p>
                            </div>
                            <div class="fadein scaleInv anim_2">
                                <p class="carouselText3">
                                    <i class="icon-ok"></i> Bootstrap 3.2.0 + Compatible
                                </p>
                            </div>
                            <div class="fadein scaleInv anim_3">
                                <p class="carouselText3">
                                    <i class="icon-ok"></i> Responsive Layouts
                                </p>
                            </div>
                            <div class="fadein scaleInv anim_4">
                                <p class="carouselText3">
                                    <i class="icon-ok"></i> Beautiful Animation Effects
                                </p>
                            </div>
                            <div class="fadein scaleInv anim_5">
                                <p class="carouselText3">
                                    <i class="icon-ok"></i> Top Notch Support
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center fadein scaleInv anim_2">
                            <div class="text-center">
                                <div class="fadein scaleInv anim_3">
                                    <img src="http://www.wowthemes.net/demo/calypso/img/demo/slide1-3.png" alt=""
                                         class="slide1-3 animated rollIn">
                                </div>
                                <div class="fadein scaleInv anim_8">
                                    <img src="http://www.wowthemes.net/demo/calypso/img/demo/slide1-1.png" alt=""
                                         class="slide1-1 animated rollIn">
                                </div>
                                <div class="fadein scaleInv anim_5">
                                    <img src="http://www.wowthemes.net/demo/calypso/img/demo/slide1-2.png" alt=""
                                         class="slide1-2 animated rollIn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background: url(http://www.wowthemes.net/demo/calypso/img/demo/slide1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 animated fadeInUp notransition">
                            <img src="http://www.wowthemes.net/demo/calypso/img/demo/desktop3.png" alt=""
                                 style="width:90%;">
                        </div>
                        <div class="col-md-6 animated fadeInDown  notransition topspace30 text-right">
                            <div class="car-highlight1 animated fadeInLeftBig">
                                Add ANYTHING in Slider
                            </div>
                            <br>
                            <div class="car-highlight2 animated fadeInRightBig notransition">
                                Powerful Options
                            </div>
                            <br>
                            <div class="car-highlight3 animated fadeInUpBig notransition">
                                Video, Audio, Text, Iframes etc
                            </div>
                            <br>
                            <div class="car-highlight4 animated flipInX notransition">
                                Any HTML5 code you wish
                            </div>
                            <br>
                            <div class="car-highlight5 animated rollIn notransition">
                                Slider with <span class="font100">Total Control</span><br>
                                <span class="font100" style="font-size:20px;">Embed Practically</span> Anything<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background: url(http://www.wowthemes.net/demo/calypso/img/demo/slide3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <br>
                            <br>
                            <div class="animated fadeInDownBig notransition">
                                <span class="car-largetext">Vivid Skins <span class="font300">&amp; Three</span> Layouts</span><br>
                            </div>
                            <br>
                            <br>
                            <div class="car-widecircle animated fadeInLeftBig notransition">
                                <span>Wide</span>
                            </div>
                            <div class="car-middlecircle animated fadeInUpBig notransition">
                                <span>Boxed</span>
                            </div>
                            <div class="car-smallcircle animated fadeInRightBig notransition">
                                <span>Narrow</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.carousel-inner -->
        <a class="left carousel-control animated fadeInLeft" href="#c-slide" data-slide="prev"><i
                class="icon-angle-left"></i></a>
        <a class="right carousel-control animated fadeInRight" href="#c-slide" data-slide="next"><i
                class="icon-angle-right"></i></a>
    </section>
    <!-- /.carousel end-->

    <!-- /.wrapsemibox start-->
    <div class="wrapsemibox">
        <div class="semiboxshadow text-center">
            <img src="img/shp.png" class="img-responsive" alt="">
        </div>
        <!-- INTRO NOTE
================================================== -->
        <section class="intro-note topspace10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Introducing Calypso, <span class="colortext">powerful</span> HTML5 template</h1>
                        <p>
                            Highly-professional & modern website template created for you and your business
                            prosperity. <br />
                            Calypso has all the flexibility and features needed for building a top-notch business
                            website.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.intro-note end-->
        <!-- SERVICE BOXES
================================================== -->
        <section class="service-box topspace30">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center animated fadeInLeftNow notransition">
                        <div class="icon-box-top">
                            <i class="fontawesome-icon medium circle-white center icon-rocket"></i>
                            <h1>Powerful & Beautiful</h1>
                            <p>
                                Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset
                                nec lacus.
                            </p>
                            <p class="fontupper">
                                <a href="#" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center animated fadeInLeftNow notransition">
                        <div class="icon-box-top">
                            <i class="fontawesome-icon medium circle-white center icon-cogs"></i>
                            <h1>Fresh & Modern</h1>
                            <p>
                                Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset
                                nec lacus.
                            </p>
                            <p class="fontupper">
                                <a href="#" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center animated fadeInRightNow notransition">
                        <div class="icon-box-top active">
                            <i class="fontawesome-icon medium circle-white center icon-microphone"></i>
                            <h1>Clean Coded</h1>
                            <p>
                                Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset
                                nec lacus.
                            </p>
                            <p class="fontupper">
                                <a href="#" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center animated fadeInRightNow notransition">
                        <div class="icon-box-top">
                            <i class="fontawesome-icon medium circle-white center icon-trophy"></i>
                            <h1>Winning Theme</h1>
                            <p>
                                Lorem ipsum dolor sit adipiscing elit. Praesent tempus eleifend risus ut congue eset
                                nec lacus.
                            </p>
                            <p class="fontupper">
                                <a href="#" class="readmore">Read More <i class="icon-double-angle-right"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.service-box end-->
        <!-- RECENT WORK
================================================== -->
        <section class="home-portfolio bgarea topspace30">
            <div class="bgarea-semitransparent">
                <div class="container">
                    <h1 class="small text-center animated fadeInLeftNow notransition">FEATURED WORK</h1>
                    <p class="animated fadeInRightNow notransition text-center topspace20">
                        Calypso offers multiple layouts and ways of displaying your content in a manner that best
                        suits for you and <br>
                        your customer. Make beautiful and eye catching site with Calypso today!
                    </p>
                    <br />
                    <div class="row">
                        <div class="col-md-6 animated fadeInLeftNow notransition">
                            <div class="carousel carousel-fade slide carousel-featuredwork"
                                 id="carousel-featuredwork">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-featuredwork" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-featuredwork" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-featuredwork" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner" style="margin-top:-20px;">
                                    <div class="item active">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/desktop3.png"
                                             alt="">
                                    </div>
                                    <div class="item">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/slide1-1.png"
                                             alt="">
                                    </div>
                                    <div class="item">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/desktop2.png"
                                             alt="">
                                    </div>
                                </div>
                                <!-- /.carousel-inner -->
                            </div>
                        </div>
                        <div class="col-md-6 animated fadeInRightNow notransition">
                            <ul class="icons">
                                <li>
                                    <h4><i class="icon-magic"></i>Winning Template Awards</h4>
                                    <p>
                                        Suspendisse nisl sapien, mattis ut libero ut, placerat eleifend urna.
                                        Quisque commodo.
                                    </p>
                                </li>
                                <li>
                                    <h4><i class="icon-heart"></i>Love at first sight with App</h4>
                                    <p>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                        inceptos himenaeos. Duis consectetur venenatis ante in adipiscing.
                                    </p>
                                </li>
                                <li>
                                    <h4><i class="icon-twitter"></i>Top Social Media</h4>
                                    <p>
                                        Maecenas tempus purus vitae magna posuere tempor. Aliquam sed augue justo.
                                        Etiam pellentesque purus sed tincidunt dignissim.
                                    </p>
                                </li>
                                <li>
                                    <h4><i class="icon-leaf"></i>Professional modern Theme</h4>
                                    <p>
                                        Donec commodo euismod sem, eu vehicula dui malesuada rutrum. Cras lobortis.
                                    </p>
                                </li>
                                <li>
                                    <h4><i class="icon-cog"></i>Best choice for your Web</h4>
                                    <p>
                                        Quisque tempor convallis est ac viverra. Cras dictum arcu leo, commodo
                                        rhoncus turpis convallis ac. Praesent sapien nulla lobortis quis sapien eu.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.recent-work end-->
        <!-- FEATURES
================================================== -->
        <section class="home-features topspace30">
            <div class="container animated fadeInUpNow notransition">
                <h1 class="small text-center">WHAT THEY SAY</h1>
                <div class="br-hr type_short">
				<span class="br-hr-h">
				<i class="icon-pencil"></i>
				</span>
                </div>
                <div id="cbp-qtrotator" class="cbp-qtrotator">
                    <div class="cbp-qtcontent">
                        <img src="http://wowthemes.net/demo/biscaya/img/demo/avatar.jpg" alt="">
                        <blockquote>
                            <p class="bigquote">
                                <i class="icon-quote-left colortext quoteicon"></i> Lorem ipsum dolor sit adipiscing
                                elit. Praesent tempus eleifend risus ut congue eset nec lacus. Lorem ipsum dolor sit
                                adipiscing elit. Praesent tempus eleifend risus ut congue eset nec lacus. Praesent
                                dignissim sem sapien, a vulputate enim auctor vitae. Duis non lorem porta,
                                adipiscing eros sit amet, tempor sem.
                            </p>
                            <footer>John Doe / Owner of <a href="#">calypso.com</a></footer>
                        </blockquote>
                    </div>
                    <div class="cbp-qtcontent">
                        <img src="http://wowthemes.net/demo/biscaya/img/demo/avatar.jpg" alt="">
                        <blockquote>
                            <p class="bigquote">
                                <i class="icon-quote-left colortext quoteicon"></i> Lorem ipsum dolor sit adipiscing
                                elit. Praesent tempus eleifend risus ut congue eset nec lacus. Lorem ipsum dolor sit
                                adipiscing elit. Praesent tempus eleifend risus ut congue eset nec lacus. Praesent
                                dignissim sem sapien, a vulputate enim auctor vitae. Duis non lorem porta,
                                adipiscing eros sit amet, tempor sem.
                            </p>
                            <footer>Pino Caruso / Director of <a href="#">hisweb.com</a></footer>
                        </blockquote>
                    </div>
                </div>
                <br />
                <div class="col-md-10 col-md-offset-1 animated slidea notransition">
                    <div class="row">
                        <div class="col-md-4">
                            <h4><i class="icon icon-microphone">
                                </i> A Playground for Web</h4>
                            <div class="bottomspace30">
                                Trigger ideas: quickly experiment with site colors &amp; patterns, try out web
                                typography and much more.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4><i class="icon icon-anchor">
                                </i> Great Project for Clients</h4>
                            <div class="bottomspace30">
                                Trigger ideas: quickly experiment with site colors &amp; patterns, try out web
                                typography and much more.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4><i class="icon icon-user">
                                </i> Ready to Use Template</h4>
                            Trigger ideas: quickly experiment with site colors &amp; patterns, try out web
                            typography and much more. <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h4><i class="icon icon-pushpin">
                                </i> New Modern Functions</h4>
                            Trigger ideas: quickly experiment with site colors &amp; patterns, try out web
                            typography and much more. <br>
                        </div>
                        <div class="col-md-4">
                            <h4><i class="icon icon-cogs">
                                </i> Top Notch Support</h4>
                            Trigger ideas: quickly experiment with site colors &amp; patterns, try out web
                            typography and much more. <br>
                        </div>
                        <div class="col-md-4">
                            <h4><i class="icon icon-leaf">
                                </i> Awesome Animations</h4>
                            <div class="bottomspace30">
                                Trigger ideas: quickly experiment with site colors &amp; patterns, try out web
                                typography and much more.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.home-features end-->
        <section class="grayarea recent-projects-home topspace30 animated fadeInUpNow notransition">
            <div class="container">
                <div class="row">
                    <h1 class="small text-center topspace0">LATEST PROJECTS</h1>
                    <p class="animated fadeInRightNow notransition text-center topspace20">
                        Calypso offers multiple layouts and ways of displaying your content in a manner that best
                        suits for you and <br>
                        your customer. Make beautiful and eye catching site with Calypso today!
                    </p>
                    <div class="text-center smalltitle">
                    </div>
                    <div class="col-md-12">
                        <div class="list_carousel text-center">
                            <div class="carousel_nav">
                                <a class="prev" id="car_prev" href="#"><span>prev</span></a>
                                <a class="next" id="car_next" href="#"><span>next</span></a>
                            </div>
                            <div class="clearfix">
                            </div>
                            <ul id="carousel-projects">
                                <!--featured-projects 1-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase1.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption">
                                                <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                <a data-gal="prettyPhoto[gallery1]"
                                                   href="http://www.wowthemes.net/demo/calypso/img/demo/showcase1.jpg"
                                                   title="La Chaux De Fonds"><i
                                                        class="icon-zoom-in captionicons"></i></a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Trains</a></h1>
                                        <p>
                                            Lore ipsum
                                        </p>
                                    </div>
                                </li>
                                <!--featured-projects 2-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase2.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption">
                                                <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                <a data-gal="prettyPhoto[gallery1]"
                                                   href="http://www.wowthemes.net/demo/calypso/img/demo/showcase2.jpg"
                                                   title="La Chaux De Fonds"><i
                                                        class="icon-zoom-in captionicons"></i></a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Automobiles</a></h1>
                                        <p>
                                            Jura mountains
                                        </p>
                                    </div>
                                </li>
                                <!--featured-projects 3-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase3.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption">
                                                <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                <a data-gal="prettyPhoto[gallery1]"
                                                   href="http://www.wowthemes.net/demo/calypso/img/demo/showcase3.jpg"
                                                   title="La Chaux De Fonds"><i
                                                        class="icon-zoom-in captionicons"></i></a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Biscaya</a></h1>
                                        <p>
                                            Clio sorevins
                                        </p>
                                    </div>
                                </li>
                                <!--featured-projects 4-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase4.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption">
                                                <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                <a data-gal="prettyPhoto[gallery1]"
                                                   href="http://www.wowthemes.net/demo/calypso/img/demo/showcase4.jpg"
                                                   title="La Chaux De Fonds"><i
                                                        class="icon-zoom-in captionicons"></i></a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Serenity</a></h1>
                                        <p>
                                            Tabiscum rocens
                                        </p>
                                    </div>
                                </li>
                                <!--featured-projects 5-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase1.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption">
                                                <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                <a data-gal="prettyPhoto[gallery1]"
                                                   href="http://www.wowthemes.net/demo/calypso/img/demo/showcase1.jpg"
                                                   title="La Chaux De Fonds"><i
                                                        class="icon-zoom-in captionicons"></i></a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">BizLeaders</a></h1>
                                        <p>
                                            Larius trano
                                        </p>
                                    </div>
                                </li>
                                <!--featured-projects 6-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase2.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption">
                                                <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                <a data-gal="prettyPhoto[gallery1]"
                                                   href="http://www.wowthemes.net/demo/calypso/img/demo/showcase2.jpg"
                                                   title="La Chaux De Fonds"><i
                                                        class="icon-zoom-in captionicons"></i></a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Salma</a></h1>
                                        <p>
                                            Vobiscum atens
                                        </p>
                                    </div>
                                </li>
                                <!--featured-projects 7-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase3.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption">
                                                <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                <a data-gal="prettyPhoto[gallery1]"
                                                   href="http://www.wowthemes.net/demo/calypso/img/demo/showcase3.jpg"
                                                   title="La Chaux De Fonds"><i
                                                        class="icon-zoom-in captionicons"></i></a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">RetroDoe</a></h1>
                                        <p>
                                            Oliya verder
                                        </p>
                                    </div>
                                </li>
                                <!--featured-projects 8-->
                                <li>
                                    <div class="boxcontainer">
                                        <img src="http://www.wowthemes.net/demo/calypso/img/demo/showcase4.jpg"
                                             alt="">
                                        <div class="roll">
                                            <div class="wrapcaption">
                                                <a href="projectdetail.html"><i class="icon-link captionicons"></i></a>
                                                <a data-gal="prettyPhoto[gallery1]"
                                                   href="http://www.wowthemes.net/demo/calypso/img/demo/showcase4.jpg"
                                                   title="La Chaux De Fonds"><i
                                                        class="icon-zoom-in captionicons"></i></a>
                                            </div>
                                        </div>
                                        <h1><a href="projectdetail.html">Chaux Fonds</a></h1>
                                        <p>
                                            Diva menthol
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.recent-projects-home end-->
        <!-- BEGIN CALL TO ACTION PANEL
================================================== -->
        <section class="container animated fadeInDownNow notransition topspace40">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <p class="bigtext">
                            Praesent <span class="fontpacifico colortext">WowThemes</span> sapien, a vulputate enim
                            auctor vitae
                        </p>
                        <p>
                            Duis non lorem porta, adipiscing eros sit amet, tempor sem. Donec nunc arcu, semper a
                            tempus et, consequat
                        </p>
                    </div>
                    <div class="text-center topspace20">
                        <a href="#" class="buttonblack"><i class="icon-shopping-cart"></i>&nbsp; get theme</a>
                        <a href="#" class="buttoncolor"><i class="icon-link"></i>&nbsp; learn more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /. end call to action-->
    </div>
    <!-- /.wrapsemibox end-->
@endsection

@section('scripts')
    <script>
        /* ---------------------------------------------------------------------- */
        /*	Carousel
        /* ---------------------------------------------------------------------- */
        $(window).load(function () {
            $('#carousel-projects').carouFredSel({
                responsive: true,
                items: {
                    width: 200,
                    height: 295,
                    visible: {
                        min: 1,
                        max: 4,
                    },
                },
                width: '200px',
                height: '295px',
                auto: true,
                circular: true,
                infinite: false,
                prev: {
                    button: '#car_prev',
                    key: 'left',
                },
                next: {
                    button: '#car_next',
                    key: 'right',
                },
                swipe: {
                    onMouse: true,
                    onTouch: true,
                },
                scroll: {
                    easing: '',
                    duration: 1200,
                },
            });
        });
    </script>
    <script>
        //CALL TESTIMONIAL ROTATOR
        $(function () {
            /*
            - how to call the plugin:
            $( selector ).cbpQTRotator( [options] );
            - options:
            {
                // default transition speed (ms)
                speed : 700,
                // default transition easing
                easing : 'ease',
                // rotator interval (ms)
                interval : 8000
            }
            - destroy:
            $( selector ).cbpQTRotator( 'destroy' );
            */
            $('#cbp-qtrotator').cbpQTRotator();
        });
    </script>
    <script>
        //CALL PRETTY PHOTO
        $(document).ready(function () {
            $('a[data-gal^=\'prettyPhoto\']').
                prettyPhoto({ social_tools: '', animation_speed: 'normal', theme: 'dark_rounded' });
        });
    </script>
    <script>
        //MASONRY
        $(document).ready(function () {
            var $container = $('#content');
            $container.imagesLoaded(function () {
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false,
                    },
                });
            });
            $('#filter a').click(function (event) {
                $('a.selected').removeClass('selected');
                var $this = $(this);
                $this.addClass('selected');
                var selector = $this.attr('data-filter');
                $container.isotope({
                    filter: selector,
                });
                return false;
            });
        });
    </script>
    <script>
        //ROLL ON HOVER
        $(function () {
            $('.roll').css('opacity', '0');
            $('.roll').hover(function () {
                    $(this).stop().animate({
                        opacity: .8,
                    }, 'slow');
                },
                function () {
                    $(this).stop().animate({
                        opacity: 0,
                    }, 'slow');
                });
        });
    </script>
@endsection