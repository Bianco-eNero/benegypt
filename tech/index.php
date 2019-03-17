<?php include "includes/header.php"?>
    <link href="concrete/blocks/youtube/view.css" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="concrete/js/jquery.js"></script>
    <!--[if lt IE 9]><script type="text/javascript" src="concrete/js/ie/html5-shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script type="text/javascript" src="concrete/js/ie/respond.js"></script><![endif]-->
    <link href="concrete/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
    <script>
        if (navigator.userAgent.match(/IEMobile\/10\.0/)){
            var msViewportStyle = document.createElement('style');
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            );
            document.querySelector('head').appendChild(msViewportStyle);
        }
        //set cookie for site
        function setCookie(cname, cvalue) {
            var d = new Date();
            d.setTime(d.getTime() + 2160000000);
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
        }
    </script>

<?php include "includes/nav.php"?>
<!--Start Slider-->
    <div class="banner  division" id="banner" data-scrollax-parent="true">
        <!--start container of the slider-->
        <div class="banner__slides">
            <!--Start Slide no.1 -->
            <div class="banner__slide-main">
                <div class="banner__slide">
                    <noscript>
                        <img src="application/files/image/slider1.jpg" alt="M_14434_High.jpg"/>
                    </noscript>
                    <h1 class="banner__title" itemprop="name" data-scrollax="properties: { 'translateY': '40px' }">Business Software</h1>
                    <span class="banner__slide__image" style="background-image: url('application/files/image/slider1.jpg'); background-position:  ;"></span>
                    <div class="banner__wrapper equalHeightChildren" data-responsive-limit="767">
                        <div class="banner__wrapper__col">
                        </div>
                        <div class="banner__wrapper__col">
                            <div class="align">
                                <div class="align__vertical align__vertical--bottom">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Start Slide no.1 -->
            <!--Start Slide no.2 -->
            <div class="banner__slide-main">
                <div class="banner__slide">
                    <noscript>
                        <img src="application/files/cache/f8bc97545c0c0f5f7d98eb179d18704e.jpg" alt="M_14434_High.jpg"/>
                    </noscript>
                    <h1 class="banner__title" itemprop="name" data-scrollax="properties: { 'translateY': '40px' }">Web design and development</h1>
                    <span class="banner__slide__image" style="background-image: url('application/files/image/slider2.jpg'); background-position:  ;"></span>
                    <div class="banner__wrapper equalHeightChildren" data-responsive-limit="767">
                        <div class="banner__wrapper__col">
                        </div>
                        <div class="banner__wrapper__col">
                            <div class="align">
                                <div class="align__vertical align__vertical--bottom">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Start Slide no.2 -->
            <!--Start Slide no.3-->
            <div class="banner__slide-main">
                <div class="banner__slide">
                    <noscript>
                        <img src="application/files/cache/8de8b3bad5c615655b9b2e2f3e2694c1.jpg" alt="JaegerDubai 81_8982455.jpg"/>
                    </noscript>
                    <h1 class="banner__title" itemprop="name" data-scrollax="properties: { 'translateY': '40px' }">Mobile App </h1>
                    <span class="banner__slide__image" style="background-image: url('application/files/image/slider3.jpg'); background-position:  ;"></span>

                    <div class="banner__wrapper equalHeightChildren" data-responsive-limit="767">
                        <div class="banner__wrapper__col">
                        </div>
                        <div class="banner__wrapper__col">
                            <div class="align">
                                <div class="align__vertical align__vertical--bottom">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Slide no.3-->
            <!--Start Slide no.4-->
            <div class="banner__slide-main">
                <div class="banner__slide">
                    <noscript>
                        <img src="application/files/cache/a98d636656ba5e29f085d08dbd5d2231.jpg" alt="Sharjah Tourism 3.jpg"/>
                    </noscript>
                    <h1 class="banner__title" itemprop="name" data-scrollax="properties: { 'translateY': '40px' }">E-shopping</h1>
                    <span class="banner__slide__image" style="background-image: url('application/files/image/slider4.jpg'); background-position:  ;"></span>

                    <div class="banner__wrapper equalHeightChildren" data-responsive-limit="767">
                        <div class="banner__wrapper__col">
                        </div>
                        <div class="banner__wrapper__col">
                            <div class="align">
                                <div class="align__vertical align__vertical--bottom">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Slide no.4-->
            <!--Start Slide no.5-->
            <div class="banner__slide-main">
                <div class="banner__slide">
                    <noscript>
                        <img src="application/files/cache/a98d636656ba5e29f085d08dbd5d2231.jpg" alt="Sharjah Tourism 3.jpg"/>
                    </noscript>
                    <h1 class="banner__title" itemprop="name" data-scrollax="properties: { 'translateY': '40px' }">Digital Marketing </h1>
                    <span class="banner__slide__image" style="background-image: url('application/files/image/slider5.jpg'); background-position:  ;"></span>

                    <div class="banner__wrapper equalHeightChildren" data-responsive-limit="767">
                        <div class="banner__wrapper__col">
                        </div>
                        <div class="banner__wrapper__col">
                            <div class="align">
                                <div class="align__vertical align__vertical--bottom">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Slide no.5-->
        </div>
        <!--End container of the slider-->
        <div class="banner__sidebar"></div>
        <!--Start Banner Footer -->
        <!--Includes-> chervron| progress bar | Slider no.-->
        <div class="banner__footer">
            <div class="banner__footer__wrapper equalHeightChildren" data-responsive-limit="767">
                <div class="banner__footer__wrapper__col">
                    <div class="align">
                        <div class="align__vertical align__vertical--bottom">
                            <div class="banner__footer__buttons"></div>
                             <!--Start Progress-->
                            <div class="banner__progress">
                                <span class="banner__progress__bar"></span>
                            </div>
                            <!--End Progress-->
                        </div>
                    </div>
                </div>
                <div class="banner__footer__wrapper__col">
                    <div class="align">
                        <div class="align__vertical align__vertical--bottom">
                            <div class="banner__count">
                                001
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Banner Footer-->
    </div>
<!--End Slider-->


<?php include "includes/footer.php"?>