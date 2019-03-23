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
<!--Start Site-body-->
    <div class="site-body" style="margin-bottom: -341px; min-height: 757px;">
        <div class="hero" data-scrollax-parent="true">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2" data-scrollax="properties: { 'translateY': '50px' }" style="transform: translateZ(0px) translateY(-26.7503px);">
                        <div class="hero__title">
                            <h2>WHO WE ARE</h2>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-1">
                        <div class="hero__desc">
                            <p>  Born out of the ambition of its founders to channel their experience in IT and the corporate sector into a                                     major entrepreneurial project in the year 2009, today Bianco e Nero Technology leads a group of businesses                                      developing digital solutions.Still today, the key elements of Bianco e Nero’s winning formula are robust                                       technological skills and business enthusiasm enriched over time by the contributions of creative talent.
                            </p>
                            <a class="button two-cols__expand">See more</a>
                        </div>



                        <div class="hero__image">
                            <div class="image-container image-container--loaded">
                                <div data-src="tech/application/files/image/app-view.jpg" class="image lazy lazy--animate  lazy--loaded" style="padding-top: 104.112%; background-image: url(&quot;application/files/image/app-view.jpg&quot;);"></div>
                                <span class="image-container__border image-container__border--1"></span>
                                <span class="image-container__border image-container__border--2"></span>
                                <span class="image-container__border image-container__border--3"></span>
                                <span class="image-container__border image-container__border--4"></span>
                            </div>

                            <noscript>
                                <img src="application/files/image/app-view.jpg" alt="itpreception019_9281020.jpg"/>
                            </noscript>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="link-blocks">
            <h2 class="sr-only">Explore pages here.</h2>
            <div class="container">
                <div class="link-blocks__list">
                    <div class="link-block">
                        <div class="link-block__wrapper">
                            <noscript>
                                <img src="application/files/cache/e50bb719ed347ed7d8a921c37067cce7.jpg" alt="1.jpg"/>
                            </noscript>


                            <div class="image-container image-container--loaded">
                                <span class="link-block__image lazy lazy--animate lazy--loaded" data-src="application/files/cache/e50bb719ed347ed7d8a921c37067cce7.jpg" style="background-image: url(&quot;application/files/cache/e50bb719ed347ed7d8a921c37067cce7.jpg&quot;);"></span>
                                <span class="image-container__border image-container__border--1"></span>
                                <span class="image-container__border image-container__border--2"></span>
                                <span class="image-container__border image-container__border--3"></span>
                                <span class="image-container__border image-container__border--4"></span>
                            </div>

                            <div class="link-block__overlay">
                                <div class="align">
                                    <div class="align__vertical align__vertical--middle">
                                        <p>
                        <span>
                            Explore
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <h3 class="link-block__title">
                                Brands        </h3>

                            <a class="link-block__overlay-link" href="brands.html">Brands</a>    </div>
                    </div>

                    <div class="link-block">
                        <div class="link-block__wrapper">
                            <noscript>
                                <img src="application/files/cache/6536baf7c23a9d5094c043b5940ad4df.jpg" alt="TOD-Nightlife--Music-Awards-2016_107_7187134.jpg"/>
                            </noscript>


                            <div class="image-container image-container--loaded">
                                <span class="link-block__image lazy lazy--animate lazy--loaded" data-src="application/files/cache/6536baf7c23a9d5094c043b5940ad4df.jpg" style="background-image: url(&quot;application/files/cache/6536baf7c23a9d5094c043b5940ad4df.jpg&quot;);"></span>
                                <span class="image-container__border image-container__border--1"></span>
                                <span class="image-container__border image-container__border--2"></span>
                                <span class="image-container__border image-container__border--3"></span>
                                <span class="image-container__border image-container__border--4"></span>
                            </div>

                            <div class="link-block__overlay">
                                <div class="align">
                                    <div class="align__vertical align__vertical--middle">
                                        <p>
                        <span>
                            Explore
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <h3 class="link-block__title">
                                Events        </h3>

                            <a class="link-block__overlay-link" href="events.html">Events</a>    </div>
                    </div>

                    <div class="link-block">
                        <div class="link-block__wrapper">
                            <noscript>
                                <img src="application/files/cache/86efa0774acc0c9ccbfad3a6e1be3feb.jpg" alt="3.jpg"/>
                            </noscript>


                            <div class="image-container image-container--loaded">
                                <span class="link-block__image lazy lazy--animate lazy--loaded" data-src="application/files/cache/86efa0774acc0c9ccbfad3a6e1be3feb.jpg" style="background-image: url(&quot;application/files/cache/86efa0774acc0c9ccbfad3a6e1be3feb.jpg&quot;);"></span>
                                <span class="image-container__border image-container__border--1"></span>
                                <span class="image-container__border image-container__border--2"></span>
                                <span class="image-container__border image-container__border--3"></span>
                                <span class="image-container__border image-container__border--4"></span>
                            </div>

                            <div class="link-block__overlay">
                                <div class="align">
                                    <div class="align__vertical align__vertical--middle">
                                        <p>
                        <span>
                            Explore
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <h3 class="link-block__title">
                                Advertising        </h3>

                            <a class="link-block__overlay-link" href="services.html">Advertising</a>    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="divisions">
            <div class="divisions__container">
                <div class="divisions__wrapper">
                    <div class="container">

                        <div class="row">
                            <div class="col-sm-3">
                                <h2 class="divisions__title">
                                    Division's Reach
                                    <span>Per month</span>
                                </h2>
                            </div>
                            <div class="col-sm-9">




                                <ul class="divisions__links">

                                    <li class="col-md-4 col-sm-6 divisions__links__item ">
                                        <div class="divisions__links__item__wrapper">
                                            <div class="divisions__links__item__wrapper__inner">
                                                <h3 class="divisions__links__title">
                                                    ITP Consumer                    </h3>
                                                <p class="divisions__links__reach">
                                                    10.6m                        </p>

                                                <p class="divisions__links__item__help"><span class="dash"></span> Explore</p>
                                                <a class="divisions__links__link" title="ITP Consumer" href="divisions/itp-consumer.html"></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-md-4 col-sm-6 divisions__links__item ">
                                        <div class="divisions__links__item__wrapper">
                                            <div class="divisions__links__item__wrapper__inner">
                                                <h3 class="divisions__links__title">
                                                    ITP Business                    </h3>
                                                <p class="divisions__links__reach">
                                                    1.6m                        </p>

                                                <p class="divisions__links__item__help"><span class="dash"></span> Explore</p>
                                                <a class="divisions__links__link" title="ITP Business" href="divisions/itp-business.html"></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-md-4 col-sm-6 divisions__links__item ">
                                        <div class="divisions__links__item__wrapper">
                                            <div class="divisions__links__item__wrapper__inner">
                                                <h3 class="divisions__links__title">
                                                    ITP Live                    </h3>
                                                <p class="divisions__links__reach">
                                                    33.4m                        </p>

                                                <p class="divisions__links__item__help"><span class="dash"></span> Explore</p>
                                                <a class="divisions__links__link" title="ITP Live" href="divisions/itp-live.html"></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-md-4 col-sm-6 divisions__links__item ">
                                        <div class="divisions__links__item__wrapper">
                                            <div class="divisions__links__item__wrapper__inner">
                                                <h3 class="divisions__links__title">
                                                    ITP India                    </h3>
                                                <p class="divisions__links__reach">
                                                    157k                        </p>

                                                <p class="divisions__links__item__help"><span class="dash"></span> Explore</p>
                                                <a class="divisions__links__link" title="ITP India" href="divisions/itp-india.html"></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-md-4 col-sm-6 divisions__links__item ">
                                        <div class="divisions__links__item__wrapper">
                                            <div class="divisions__links__item__wrapper__inner">
                                                <h3 class="divisions__links__title">
                                                    ITP Promedia                    </h3>
                                                <p class="divisions__links__reach">
                                                    287k                        </p>

                                                <p class="divisions__links__item__help"><span class="dash"></span> Explore</p>
                                                <a class="divisions__links__link" title="ITP Promedia" href="divisions/promedia.html"></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-md-4 col-sm-6 divisions__links__item ">
                                        <div class="divisions__links__item__wrapper">
                                            <div class="divisions__links__item__wrapper__inner">
                                                <h3 class="divisions__links__title">
                                                    ITP Customer                    </h3>
                                                <p class="divisions__links__reach">
                                                    800k                        </p>

                                                <p class="divisions__links__item__help"><span class="dash"></span> Explore</p>
                                                <a class="divisions__links__link" title="ITP Customer" href="divisions/itp-customer.html"></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-md-4 col-sm-6 divisions__links__item divisions__links__item--small">
                                        <div class="divisions__links__item__wrapper">
                                            <div class="divisions__links__item__wrapper__inner">
                                                <h3 class="divisions__links__title">
                                                    ITP Ignite                    </h3>

                                                <p class="divisions__links__item__help"><span class="dash"></span> Explore</p>
                                                <a class="divisions__links__link" title="ITP Ignite" href="divisions/itp-ignite.html"></a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>

                        <div class="divisions__score">
                            <div class="divisions__score__number">46.7m</div>
                            <p>Total Reach</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="push" style="height: 341px;"></div> <!-- Push div for making fixed footer -->
    </div>
    <!--End Site-body-->
<?php include "includes/footer.php"?>