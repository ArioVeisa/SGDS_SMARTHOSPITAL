<!DOCTYPE html>
<html class="html" lang="en-US">

<head>
    <script type="text/javascript">
        if (typeof Muse == "undefined") window.Muse = {};
        window.Muse.assets = {
            required: [
                "jquery-1.8.3.min.js",
                "museutils.js",
                "jquery.musemenu.js",
                "webpro.js",
                "musewpslideshow.js",
                "jquery.museoverlay.js",
                "touchswipe.js",
                "jquery.watch.js",
                "jquery.musepolyfill.bgsize.js",
                "museredirect.js",
                "jquery.scrolleffects.js",
                "index.css",
            ],
            outOfDate: [],
        };
    </script>

    <script src="scripts/museredirect.js?3899419633" type="text/javascript"></script>

    <script type="text/javascript">
        Muse.Redirect.redirect(
            "desktop",
            "tablet/index.html",
            "phone/index.html"
        );
    </script>

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="generator" content="2015.0.2.310" />
    <title>Home</title>
    <link media="only screen and (max-device-width: 370px)" rel="alternate" href="http://www.com/phone/index.html" />
    <link media="only screen and (max-device-width: 960px)" rel="alternate" href="http://www.com/tablet/index.html" />

    <!-- CSS -->
    {{-- <link rel="stylesheet" type="text/css" href="css/site_global.css?206135255" />
    <link rel="stylesheet" type="text/css" href="css/master_a-master.css?44074231" />
    <link rel="stylesheet" type="text/css" href="css/index.css?34817620" id="pagesheet" /> --}}

    @vite('resources/css/site_global.css')
    @vite('resources/css/master_a-master.css')
    @vite('resources/css/index.css')
    @vite('resources/js/app.js')

    <!--[if lt IE 9]>
      <link
        rel="stylesheet"
        type="text/css"
        href="css/iefonts_index.css?4185930165"
      />
    <![endif]-->
    <!-- Other scripts -->
    <script type="text/javascript">
        document.documentElement.className += " js";
        var __adobewebfontsappname__ = "muse";
    </script>
    <!-- JS includes -->
    <script type="text/javascript">
        document.write(
            '\x3Cscript src="' +
            (document.location.protocol == "https:" ? "https:" : "http:") +
            '//webfonts.creativecloud.com/raleway:n7,n4,n5,n6:all;open-sans:n4,i4,n6:all.js" type="text/javascript">\x3C/script>'
        );
    </script>
    <!--[if lt IE 9]>
      <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
    <![endif]-->
    <!--custom head HTML-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/wow/1.0.3/wow.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.1/animate.min.css" />
</head>

<body>
    <div class="rounded-corners clearfix" id="page">
        <!-- column -->
        <'div class="position_content" id="page_position_content">
            <div class="browser_width" id="u22267-bw">
                <div class="pinned-colelem" id="u22267"><!-- simple frame --></div>
            </div>
            <a class="nonblock nontext Button anim_swing rounded-corners clearfix pinned-colelem" id="buttonu17284"
                href="{{ route('login') }}"><!-- container box -->
                <div class="clearfix grpelem" id="u17285-4">
                    <!-- content -->
                    <p>Login Or Register</p>
                </div>
            </a>
            <div class="clearfix pinned-colelem" id="u17377">
                <!-- group -->
                <div class="clip_frame grpelem" id="u17287">
                    <!-- image -->
                    <img class="block" id="u17287_img" src="{{ asset('storage/images/heart2886.png') }}" alt=""
                        width="35" height="31" />
                </div>
                <div class="clearfix grpelem" id="u17283-5">
                    <!-- content -->
                    <p><span id="u17283">H</span>EALTHTIX</p>
                </div>
            </div>
            <div class="infocontact">
                <div class="pinned-colelem" id="u22249">
                    <!-- custom html -->
                    <i class="fa fa-phone"></i>
                </div>
                <div class="clearfix pinned-colelem" id="u17220-4">
                    <!-- content -->
                    <p>1-811-234-5678</p>
                </div>
                <div class="pinned-colelem" id="u22251">
                    <!-- custom html -->
                    <i class="fa fa-fax"></i>
                </div>
                <div class="clearfix pinned-colelem" id="u17221-4">
                    <!-- content -->
                    <p>1-811-234-5679</p>
                </div>
                <div class="pinned-colelem" id="u22253">
                    <!-- custom html -->
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="clearfix pinned-colelem" id="u17222-4">
                    <!-- content -->
                    <p>info@mail.com</p>
                </div>
            </div>
            <div class="navber">
                <div class="browser_width" id="u17226-bw">
                    <div class="pinned-colelem" id="u17226"><!-- simple frame --></div>
                </div>
                <nav class="MenuBar clearfix pinned-colelem" id="menuu17227">
                    <!-- horizontal box -->
                    <div class="MenuItemContainer clearfix grpelem" id="u17228">
                        <!-- vertical box -->
                        <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem"
                            id="u17229" href="{{ url('/') }}"><!-- horizontal box -->
                            <div class="MenuItemLabel NoWrap clearfix grpelem" id="u17230-4">
                                <!-- content -->
                                <p>Home</p>
                            </div>
                        </a>
                    </div>
                    <div class="MenuItemContainer clearfix grpelem" id="u17270">
                        <!-- vertical box -->
                        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u17271"
                            href="{{ url('about') }}"><!-- horizontal box -->
                            <div class="MenuItemLabel NoWrap clearfix grpelem" id="u17274-4">
                                <!-- content -->
                                <p>About</p>
                            </div>
                        </a>
                    </div>
                    <div class="MenuItemContainer clearfix grpelem" id="u17263">
                        <!-- vertical box -->
                        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u17264"
                            href="articles.html"><!-- horizontal box -->
                            <div class="MenuItemLabel NoWrap clearfix grpelem" id="u17267-4">
                                <!-- content -->
                                <p>Article</p>
                            </div>
                        </a>
                    </div>
                </nav>
            </div>
            <div class="pinned-colelem" id="u22257">
                <!-- custom html -->
                <i class="fa fa-facebook"></i>
            </div>
            <div class="pinned-colelem" id="u22259">
                <!-- custom html -->
                <i class="fa fa-instagram"></i>
            </div>
            <div class="pinned-colelem" id="u22261">
                <!-- custom html -->
                <i class="fa fa-google-plus"></i>
            </div>
            <div class="pinned-colelem" id="u22263">
                <!-- custom html -->
                <i class="fa fa-twitter"></i>
            </div>
            <div class="pinned-colelem" id="u22265">
                <!-- custom html -->
                <i class="fa fa-pinterest"></i>
            </div>

            <div class="SlideShowWidget clearfix align_parts_to_page mse_pre_init" id="slideshowu75">
                <!-- none box -->
                <div class="popup_anchor" id="u81popup">
                    <div class="SlideShowContentPanel clearfix" id="u81">
                        <!-- stack box -->
                        <div class="SSSlide clip_frame grpelem" id="u17425">
                            <!-- image -->
                            <img class="ImageInclude" id="u17425_img" data-src="images/1920%20x%20890.jpg"
                                src="images/blank.gif" alt="" data-width="1370" data-height="635" />
                        </div>
                    </div>
                </div>
                <div class="popup_anchor" id="u88-4popup">
                    <div class="SSPreviousButton clearfix" id="u88-4">
                        <!-- content -->
                        <p id="u88-2">&lt;</p>
                    </div>
                </div>
                <div class="popup_anchor" id="u80-4popup">
                    <div class="SSNextButton clearfix" id="u80-4">
                        <!-- content -->
                        <p id="u80-2">&gt;</p>
                    </div>
                </div>
            </div>
            <div class="clearfix colelem" id="pu17297">
                <!-- group -->
                <div class="browser_width grpelem" id="u17297-bw">
                    <div id="u17297"><!-- simple frame --></div>
                </div>
                <div class="clearfix grpelem" id="u16122">
                    <!-- group -->
                    <div class="grpelem" id="u22296">
                        <!-- custom html -->
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="clearfix grpelem" id="pu12031-4">
                        <!-- column -->
                        <div class="rounded-corners fadeIn clearfix colelem" id="u12031-4">
                            <!-- content -->
                            <p>Welcome to Healthtix</p>
                        </div>
                        <div class="clearfix colelem" id="u16139-10">
                            <!-- content -->
                            <p>"Your trusted partner for healthcare solutions. Find doctors, book appointments, and access health resources with ease."</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix colelem" id="pu16661">
                <!-- group -->
                <div class="browser_width grpelem" id="u16661-bw">
                    <div id="u16661">
                        <!-- column -->
                        <div class="clearfix" id="u16661_align_to_page">
                            <div class="clearfix colelem" id="ppu16395">
                                <!-- group -->
                                <div class="clearfix grpelem" id="pu16395">
                                    <!-- column -->
                                    <div class="clearfix colelem" id="u16395">
                                        <!-- group -->
                                        <div class="clearfix grpelem" id="u16397">
                                            <!-- group -->
                                            <div class="grpelem" id="u22299">
                                                <!-- custom html -->
                                                <i class="fa fa-user-md"></i>
                                            </div>
                                        </div>
                                        <div class="rounded-corners clearfix grpelem" id="u16393-4">
                                            <!-- content -->
                                            <p>Health Care</p>
                                        </div>
                                    </div>
                                    <div class="clearfix colelem" id="u16391">
                                        <!-- group -->
                                        <div class="clearfix grpelem" id="u16392-4">
                                            <!-- content -->
                                            <p>Keep yourself fully informed with the latest developments on different types of diseases, emerging outbreaks, and the preventive health measures being taken across the globe to protect communities and improve overall public health</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix grpelem" id="ppu16417-4">
                                    <!-- column -->
                                    <div class="clearfix colelem" id="pu16417-4">
                                        <!-- group -->
                                        <div class="fadeIn clearfix grpelem" id="u16417-4">
                                            <!-- content -->
                                            <p>New Health Article</p>
                                        </div>
                                    </div>
                                    <div class="clearfix colelem" id="u18031-4">
                                        <!-- content -->
                                        <p>Stay up-to-date with the most current information regarding various diseases, global outbreaks, and essential health prevention measures being implemented around the world to ensure public safety and well-being.</p>
                                    </div>
                                    <div class="clearfix colelem" id="pu16421">
                                        <!-- group -->
                                        <div class="fadeIn rounded-corners grpelem" id="u16421">
                                            <!-- simple frame -->
                                        </div>
                                        <div class="fadeIn rounded-corners grpelem" id="u18806">
                                            <!-- simple frame -->
                                        </div>
                                        <div class="fadeIn rounded-corners grpelem" id="u18807">
                                            <!-- simple frame -->
                                        </div>
                                        <div class="fadeIn rounded-corners grpelem" id="u18808">
                                            <!-- simple frame -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix colelem" id="pu16422-4">
                                <!-- group -->
                                <div class="clearfix grpelem" id="u16422-4">
                                    <!-- content -->
                                    <p>Consultation</p>
                                </div>
                                <div class="clearfix grpelem" id="u16471-4">
                                    <!-- content -->
                                    <p>Dental Health</p>
                                </div>
                                <div class="clearfix grpelem" id="u16475-4">
                                    <p>Vaccination</p>
                                </div>
                                <div class="clearfix grpelem" id="u16483-4">
                                    <!-- content -->
                                    <p>Health Check Up</p>
                                </div>
                            </div>
                            <div class="clearfix colelem" id="pu16579">
                                <!-- group -->
                                <div class="clearfix grpelem" id="u16579">
                                    <!-- group -->
                                    <div class="clearfix grpelem" id="u16581">
                                        <!-- group -->
                                        <div class="grpelem" id="u22304">
                                            <!-- custom html -->
                                            <i class="fa fa-newspaper-o"></i>
                                        </div>
                                    </div>
                                    <div class="rounded-corners clearfix grpelem" id="u16582-4">
                                        <!-- content -->
                                        <p>Recent Articles</p>
                                    </div>
                                </div>
                                <div class="fadeIn clearfix grpelem" id="u22314-4">
                                    <!-- content -->
                                    <p>Government Health Program</p>
                                </div>
                            </div>
                            <div class="clearfix colelem" id="pmakeanappointment">
                                <!-- group -->
                                <a class="anchor_item grpelem" id="makeanappointment"></a>
                                <div class="clearfix grpelem" id="u16580">
                                    <!-- column -->
                                    <div class="clearfix colelem" id="pu16588">
                                        <!-- group -->
                                        <div class="museBGSize grpelem" id="u16588">
                                            <!-- simple frame -->
                                        </div>
                                        <div class="clearfix grpelem" id="pu16584-4">
                                            <!-- column -->
                                            <div class="clearfix colelem" id="u16584-4">
                                                <!-- content -->
                                                <p>Is it important to maintain a healthy diet?</p>
                                            </div>
                                            <a class="nonblock nontext clearfix colelem" id="u18532-4"
                                                href="sample-article-page.html"><!-- content -->
                                                <p>Read More&nbsp; &gt;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix colelem" id="pu18539">
                                        <!-- group -->
                                        <div class="museBGSize grpelem" id="u18539">
                                            <!-- simple frame -->
                                        </div>
                                        <div class="clearfix grpelem" id="pu18538-4">
                                            <!-- column -->
                                            <div class="clearfix colelem" id="u18538-4">
                                                <!-- content -->
                                                <p>Is exercise important for health?</p>
                                            </div>
                                            <a class="nonblock nontext clearfix colelem" id="u18537-4"
                                                href="sample-article-page.html"><!-- content -->
                                                <p>Read More&nbsp; &gt;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix colelem" id="pu18542">
                                        <!-- group -->
                                        <div class="museBGSize grpelem" id="u18542">
                                            <!-- simple frame -->
                                        </div>
                                        <div class="clearfix grpelem" id="pu18541-4">
                                            <!-- column -->
                                            <div class="clearfix colelem" id="u18541-4">
                                                <!-- content -->
                                                <p>The number of COVID-19 cases is rising at an alarming rate.</p>
                                            </div>
                                            <a class="nonblock nontext clearfix colelem" id="u18540-4"
                                                href="sample-article-page.html"><!-- content -->
                                                <p>Read More&nbsp; &gt;</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="browser_width grpelem" id="u16999-bw">
                    <div id="u16999"><!-- simple frame --></div>
                </div>
                <div class="browser_width grpelem" id="u17000-bw">
                    <div class="museBGSize" id="u17000">
                        <!-- group -->
                        <div class="clearfix" id="u17000_align_to_page">
                            <div class="clearfix grpelem" id="pu17001">
                                <!-- column -->
                                <div class="colelem" id="u17001">
                                    <!-- custom html -->
                                    <span class="u17001">40</span>
                                </div>
                                <div class="clearfix colelem" id="u17006-4">
                                    <!-- content -->
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                            <div class="clearfix grpelem" id="pu17009">
                                <!-- column -->
                                <div class="colelem" id="u17009">
                                    <!-- custom html -->

                                    <span class="u17009">8000</span>
                                </div>
                                <div class="clearfix colelem" id="u17011-4">
                                    <!-- content -->
                                    <p>People Like Us</p>
                                </div>
                            </div>
                            <div class="clearfix grpelem" id="pu17012">
                                <!-- column -->
                                <div class="colelem" id="u17012">
                                    <!-- custom html -->

                                    <span class="u17012">87</span>
                                </div>
                                <div class="clearfix colelem" id="u17014-4">
                                    <!-- content -->
                                    <p>Our Professional Doctor</p>
                                </div>
                            </div>
                            <div class="clearfix grpelem" id="pu17018">
                                <!-- column -->
                                <div class="colelem" id="u17018">
                                    <!-- custom html -->

                                    <span class="u17018">600</span>
                                </div>
                                <div class="clearfix colelem" id="u17020-4">
                                    <!-- content -->
                                    <p>Patients Satisfied</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="PamphletWidget clearfix grpelem" id="pamphletu22316">
                    <!-- none box -->
                    <div class="popup_anchor" id="u22317popup">
                        <div class="ContainerGroup clearfix" id="u22317">
                            <!-- stack box -->
                            <div class="Container clearfix grpelem" id="u22329">
                                <!-- group -->
                                <div class="clearfix grpelem" id="pu22333">
                                    <!-- column -->
                                    <div class="rounded-corners colelem" id="u22333">
                                        <!-- simple frame -->
                                    </div>
                                    <div class="rounded-corners colelem" id="u22337">
                                        <!-- simple frame -->
                                    </div>
                                </div>
                                <div class="clearfix grpelem" id="pu22332-4">
                                    <!-- column -->
                                    <div class="clearfix colelem" id="u22332-4">
                                        <!-- content -->
                                        <p>Maternity Care</p>
                                    </div>
                                    <div class="clearfix colelem" id="u22339-4">
                                        <!-- content -->
                                        <p>
                                            Maternity care refers to the healthcare services provided to women during pregnancy, childbirth, and the postpartum period.
                                        </p>
                                    </div>
                                    <div class="clearfix colelem" id="u22330-4">
                                        <!-- content -->
                                        <p>August 02, 2024 - October 31, 2024</p>
                                    </div>
                                    <div class="clearfix colelem" id="u22334-4">
                                        <!-- content -->
                                        <p>Read More&nbsp; &gt;</p>
                                    </div>
                                    <div class="clearfix colelem" id="u22338-4">
                                        <!-- content -->
                                        <p>Influenza Vaccine</p>
                                    </div>
                                    <div class="clearfix colelem" id="u22335-4">
                                        <!-- content -->
                                        <p>
                                            The influenza vaccine, commonly known as the flu shot, is a vaccine designed to protect against the seasonal influenza virus.
                                        </p>
                                    </div>
                                    <div class="clearfix colelem" id="u22336-4">
                                        <!-- content -->
                                        <p>December 02, 2024 - December 31, 2024</p>
                                    </div>
                                    <div class="clearfix colelem" id="u22331-4">
                                        <!-- content -->
                                        <p>Read More&nbsp; &gt;</p>
                                    </div>
                                </div>
                            </div>
                            <div class="Container invi clearfix grpelem" id="u22318">
                                <!-- group -->
                                <div class="clearfix grpelem" id="pu22327">
                                    <!-- column -->
                                    <div class="rounded-corners colelem" id="u22327">
                                        <!-- simple frame -->
                                    </div>
                                    <div class="rounded-corners colelem" id="u22324">
                                        <!-- simple frame -->
                                    </div>
                                </div>
                                <div class="clearfix grpelem" id="pu22323-4">
                                    <!-- column -->
                                    <div class="clearfix colelem" id="u22323-4">
                                        <!-- content -->
                                        <p>Health &amp; Beauty Acupuncture Packages.</p>
                                    </div>
                                    <div class="clearfix colelem" id="u22325-4">
                                        <!-- content -->
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam
                                        </p>
                                    </div>
                                    <div class="clearfix colelem" id="u22322-4">
                                        <!-- content -->
                                        <p>Valid: July 02, 2015 - July 31, 2015</p>
                                    </div>
                                    <div class="clearfix colelem" id="u22326-4">
                                        <!-- content -->
                                        <p>Read More&nbsp; &gt;</p>
                                    </div>
                                    <div class="clearfix colelem" id="u22328-6">
                                        <!-- content -->
                                        <p>Health Check-Ups at Hospital</p>
                                        <p>Packages</p>
                                    </div>
                                    <div class="clearfix colelem" id="u22319-4">
                                        <!-- content -->
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam
                                        </p>
                                    </div>
                                    <div class="clearfix colelem" id="u22320-4">
                                        <!-- content -->
                                        <p>Valid: July 02, 2015 - July 31, 2015</p>
                                    </div>
                                    <div class="clearfix colelem" id="u22321-4">
                                        <!-- content -->
                                        <p>Read More&nbsp; &gt;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="SlideShowWidget clearfix grpelem" id="slideshowu22353">
                    <div class="popup_anchor" id="u22363-4popup">
                        <div class="SSPreviousButton clearfix" id="u22363-4">
                            <!-- content -->
                            <p>&lt;</p>
                        </div>
                    </div>
                    <div class="popup_anchor" id="u22368-4popup">
                        <div class="SSNextButton clearfix" id="u22368-4">
                            <!-- content -->
                            <p>&gt;</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="verticalspacer"></div>
            <div class="browser_width colelem" id="u17154-bw">
                <div id="u17154">
                    <!-- group -->
                    <div class="clearfix" id="u17154_align_to_page">
                        <div class="clearfix grpelem" id="pu17172-4">
                            <!-- column -->
                            <div class="clearfix colelem" id="u17172-4">
                                <!-- content -->
                                <p>About Us</p>
                            </div>
                            <div class="clearfix colelem" id="u17156-4">
                                <!-- content -->
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam
                                </p>
                            </div>
                        </div>
                        <div class="clearfix grpelem" id="pu17173-4">
                            <!-- column -->
                            <div class="clearfix colelem" id="u17173-4">
                                <!-- content -->
                                <p>Our Hospital</p>
                            </div>
                            <div class="clearfix colelem" id="u17157-10">
                                <!-- content -->
                                <p>- Medical Services</p>
                                <p>- Patient Guides</p>
                                <p>- Find Doctor</p>
                                <p>- News</p>
                            </div>
                        </div>
                        <div class="clearfix grpelem" id="pu17162-4">
                            <!-- column -->
                            <div class="clearfix colelem" id="u17162-4">
                                <!-- content -->
                                <p>Our Info</p>
                            </div>
                            <div class="clearfix colelem" id="pu22429">
                                <!-- group -->
                                <div class="grpelem" id="u22429">
                                    <!-- custom html -->
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="clearfix grpelem" id="u17158-4">
                                    <!-- content -->
                                    <p>999&nbsp; Street Ca 70079</p>
                                </div>
                            </div>
                            <div class="clearfix colelem" id="pu22431">
                                <!-- group -->
                                <div class="grpelem" id="u22431">
                                    <!-- custom html -->
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="clearfix grpelem" id="u17159-4">
                                    <!-- content -->
                                    <p>1-811-234-5678</p>
                                </div>
                            </div>
                            <div class="clearfix colelem" id="pu22433">
                                <!-- group -->
                                <div class="grpelem" id="u22433">
                                    <!-- custom html -->
                                    <i class="fa fa-fax"></i>
                                </div>
                                <div class="clearfix grpelem" id="u17160-4">
                                    <!-- content -->
                                    <p>1-811-234-5679</p>
                                </div>
                            </div>
                            <div class="clearfix colelem" id="pu22435">
                                <!-- group -->
                                <div class="grpelem" id="u22435">
                                    <!-- custom html -->
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="clearfix grpelem" id="u17161-4">
                                    <!-- content -->
                                    <p>info@mail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="browser_width colelem" id="u17155-bw">
                <div id="u17155">
                    <!-- group -->
                    <div class="clearfix" id="u17155_align_to_page">
                        <div class="clip_frame grpelem" id="u17182">
                            <!-- image -->
                            <img class="block" id="u17182_img" src="{{ asset('storage/images/heart2886.png') }}"
                                alt="" width="29" height="26" />
                        </div>
                        <div class="clearfix grpelem" id="u17181-5">
                            <!-- content -->
                            <p><span id="u17181">H</span>EALTHTIX</p>
                        </div>
                        <div class="clearfix grpelem" id="u17163-5">
                            <!-- content -->
                            <p id="u17163-2">Copyright © 2024 Kelompokq 4.</p>
                            <p id="u17163-3">&nbsp;</p>
                        </div>
                        <div class="grpelem" id="u17322">
                            <!-- custom html -->
                            <script>
                                $(".fadeInUp").addClass("wow fadeInUp");
                                $(".fadeInDown").addClass("wow fadeInDown");
                                $(".fadeInLeft").addClass("wow fadeInLeft");
                                $(".fadeInRight").addClass("wow fadeInRight");
                                $(".fadeIn").addClass("wow fadeIn");
                                $(".zoomIn").addClass("wow zoomIn");
                            </script>

                            <script>
                                new WOW().init();
                            </script>
                        </div>
                        <div class="grpelem" id="u22268">
                            <!-- custom html -->
                            <i class="fa fa-facebook"></i>
                        </div>
                        <div class="grpelem" id="u22270">
                            <!-- custom html -->
                            <i class="fa fa-instagram"></i>
                        </div>
                        <div class="grpelem" id="u22272">
                            <!-- custom html -->
                            <i class="fa fa-google-plus"></i>
                        </div>
                        <div class="grpelem" id="u22274">
                            <!-- custom html -->
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="grpelem" id="u22276">
                            <!-- custom html -->
                            <i class="fa fa-pinterest"></i>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <div class="preload_images">
        <img class="preload" src="{{ asset('images/u16827-17-r.png') }}" alt="" />
        <img class="preload" src="{{ asset('images/u16827-17-m.png') }}" alt="" />
        <img class="preload" src="{{ asset('images/u16827-17-fs.png') }}" alt="" />
    </div>
    <!-- JS includes -->
    <script type="text/javascript">
        if (document.location.protocol != "https:")
            document.write(
                '\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>'
            );
    </script>
    <script type="text/javascript">
        window.jQuery ||
            document.write(
                '\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>'
            );
    </script>
    <script src="scripts/museutils.js?275725342" type="text/javascript"></script>
    <script src="scripts/jquery.musemenu.js?4042164668" type="text/javascript"></script>
    <script src="scripts/webpro.js?3883484123" type="text/javascript"></script>
    <script src="scripts/musewpslideshow.js?360574455" type="text/javascript"></script>
    <script src="scripts/jquery.museoverlay.js?342093292" type="text/javascript"></script>
    <script src="scripts/touchswipe.js?4218319045" type="text/javascript"></script>
    <script src="scripts/jquery.scrolleffects.js?206645848" type="text/javascript"></script>
    <script src="scripts/jquery.watch.js?3999102769" type="text/javascript"></script>
    <script src="scripts/jquery.musepolyfill.bgsize.js?185257658" type="text/javascript"></script>
    <!-- Other scripts -->
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            try {
                (function() {
                    var a = {},
                        b = function(a) {
                            if (a.match(/^rgb/))
                                return (
                                    (a = a
                                        .replace(/\s+/g, "")
                                        .match(/([\d\,]+)/gi)[0]
                                        .split(",")),
                                    (parseInt(a[0]) << 16) +
                                    (parseInt(a[1]) << 8) +
                                    parseInt(a[2])
                                );
                            if (a.match(/^\#/)) return parseInt(a.substr(1), 16);
                            return 0;
                        };
                    (function() {
                        $('link[type="text/css"]').each(function() {
                            var b = ($(this).attr("href") || "").match(
                                /\/?css\/([\w\-]+\.css)\?(\d+)/
                            );
                            b && b[1] && b[2] && (a[b[1]] = b[2]);
                        });
                    })();
                    (function() {
                        $("body").append(
                            '<div class="version" style="display:none; width:1px; height:1px;"></div>'
                        );
                        for (
                            var c = $(".version"), d = 0; d < Muse.assets.required.length;

                        ) {
                            var f = Muse.assets.required[d],
                                g = f.match(/([\w\-\.]+)\.(\w+)$/),
                                k = g && g[1] ? g[1] : null,
                                g = g && g[2] ? g[2] : null;
                            switch (g.toLowerCase()) {
                                case "css":
                                    k = k.replace(/\W/gi, "_").replace(/^([^a-z])/gi, "_$1");
                                    c.addClass(k);
                                    var g = b(c.css("color")),
                                        h = b(c.css("background-color"));
                                    g != 0 || h != 0 ?
                                        (Muse.assets.required.splice(d, 1),
                                            "undefined" != typeof a[f] &&
                                            (g != a[f] >>> 24 || h != (a[f] & 16777215)) &&
                                            Muse.assets.outOfDate.push(f)) :
                                        d++;
                                    c.removeClass(k);
                                    break;
                                case "js":
                                    k.match(/^jquery-[\d\.]+/gi) && typeof $ != "undefined" ?
                                        Muse.assets.required.splice(d, 1) :
                                        d++;
                                    break;
                                default:
                                    throw Error("Unsupported file type: " + g);
                            }
                        }
                        c.remove();

                    })();
                })();
                /* body */
                Muse.Utils.transformMarkupToFixBrowserProblemsPreInit(); /* body */
                Muse.Utils.prepHyperlinks(true); /* body */
                Muse.Utils.initWidget(".MenuBar", function(elem) {
                    return $(elem).museMenu();
                }); /* unifiedNavBar */
                Muse.Utils.initWidget("#slideshowu75", function(elem) {
                    $(elem).data(
                        "widget",
                        new WebPro.Widget.ContentSlideShow(elem, {
                            heroFitting: "fillFrameProportionally",
                            autoPlay: true,
                            displayInterval: 7000,
                            slideLinkStopsSlideShow: false,
                            transitionStyle: "fading",
                            lightboxEnabled_runtime: false,
                            shuffle: false,
                            transitionDuration: 500,
                            enableSwipe: true,
                            elastic: "fullWidth",
                            resumeAutoplay: true,
                            resumeAutoplayInterval: 3000,
                            playOnce: false,
                            autoActivate_runtime: false,
                        })
                    );
                }); /* #slideshowu75 */
                $("#slideshowu75").registerPositionScrollEffect([{
                        in: [-Infinity, 161],
                        speed: [null, 1]
                    },
                    {
                        in: [161, Infinity],
                        speed: [null, 0]
                    },
                ]); /* scroll effect */
                Muse.Utils.resizeHeight(); /* resize height */
                Muse.Utils.initWidget("#widgetu16822", function(elem) {
                    new WebPro.Widget.Form(elem, {
                        validationEvent: "submit",
                        errorStateSensitivity: "high",
                        fieldWrapperClass: "fld-grp",
                        formSubmittedClass: "frm-sub-st",
                        formErrorClass: "frm-subm-err-st",
                        formDeliveredClass: "frm-subm-ok-st",
                        notEmptyClass: "non-empty-st",
                        focusClass: "focus-st",
                        invalidClass: "fld-err-st",
                        requiredClass: "fld-err-st",
                        ajaxSubmit: true,
                    });
                }); /* #widgetu16822 */
                Muse.Utils.initWidget("#pamphletu17023", function(elem) {
                    new WebPro.Widget.ContentSlideShow(elem, {
                        contentLayout_runtime: "stack",
                        event: "click",
                        deactivationEvent: "none",
                        autoPlay: false,
                        displayInterval: 3000,
                        transitionStyle: "vertical",
                        transitionDuration: 1500,
                        hideAllContentsFirst: false,
                        shuffle: false,
                        enableSwipe: true,
                        resumeAutoplay: true,
                        resumeAutoplayInterval: 3000,
                        playOnce: false,
                        autoActivate_runtime: false,
                    });
                }); /* #pamphletu17023 */
                Muse.Utils.initWidget("#pamphletu22316", function(elem) {
                    new WebPro.Widget.ContentSlideShow(elem, {
                        contentLayout_runtime: "stack",
                        event: "click",
                        deactivationEvent: "none",
                        autoPlay: false,
                        displayInterval: 7000,
                        transitionStyle: "horizontal",
                        transitionDuration: 1000,
                        hideAllContentsFirst: false,
                        shuffle: false,
                        enableSwipe: true,
                        resumeAutoplay: true,
                        resumeAutoplayInterval: 3000,
                        playOnce: false,
                        autoActivate_runtime: false,
                    });
                }); /* #pamphletu22316 */
                Muse.Utils.initWidget("#slideshowu22353", function(elem) {
                    $(elem).data(
                        "widget",
                        new WebPro.Widget.ContentSlideShow(elem, {
                            autoPlay: true,
                            displayInterval: 6000,
                            slideLinkStopsSlideShow: false,
                            transitionStyle: "fading",
                            lightboxEnabled_runtime: false,
                            shuffle: false,
                            transitionDuration: 1500,
                            enableSwipe: true,
                            elastic: "off",
                            resumeAutoplay: true,
                            resumeAutoplayInterval: 3000,
                            playOnce: false,
                            autoActivate_runtime: false,
                        })
                    );
                }); /* #slideshowu22353 */
                Muse.Utils.fullPage("#page"); /* 100% height page */
                Muse.Utils.showWidgetsWhenReady(); /* body */
                Muse.Utils.transformMarkupToFixBrowserProblems(); /* body */
            } catch (e) {
                if (e && "function" == typeof e.notify) e.notify();
                else Muse.Assert.fail("Error calling selector function:" + e);
            }
        });
    </script> --}}

    <!--HTML Widget code-->

    <script type="text/javascript">
        // t: current time, b: begInnIng value, c: change In value, d: duration
        jQuery.easing["jswing"] = jQuery.easing["swing"];

        jQuery.extend(jQuery.easing, {
            def: "easeOutQuad",
            swing: function(x, t, b, c, d) {
                //alert(jQuery.easing.default);
                return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
            },
            easeInQuad: function(x, t, b, c, d) {
                return c * (t /= d) * t + b;
            },
            easeOutQuad: function(x, t, b, c, d) {
                return -c * (t /= d) * (t - 2) + b;
            },
            easeInOutQuad: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t + b;
                return (-c / 2) * (--t * (t - 2) - 1) + b;
            },
            easeInCubic: function(x, t, b, c, d) {
                return c * (t /= d) * t * t + b;
            },
            easeOutCubic: function(x, t, b, c, d) {
                return c * ((t = t / d - 1) * t * t + 1) + b;
            },
            easeInOutCubic: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t + b;
                return (c / 2) * ((t -= 2) * t * t + 2) + b;
            },
            easeInQuart: function(x, t, b, c, d) {
                return c * (t /= d) * t * t * t + b;
            },
            easeOutQuart: function(x, t, b, c, d) {
                return -c * ((t = t / d - 1) * t * t * t - 1) + b;
            },
            easeInOutQuart: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t * t + b;
                return (-c / 2) * ((t -= 2) * t * t * t - 2) + b;
            },
            easeInQuint: function(x, t, b, c, d) {
                return c * (t /= d) * t * t * t * t + b;
            },
            easeOutQuint: function(x, t, b, c, d) {
                return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
            },
            easeInOutQuint: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t * t * t + b;
                return (c / 2) * ((t -= 2) * t * t * t * t + 2) + b;
            },
            easeInSine: function(x, t, b, c, d) {
                return -c * Math.cos((t / d) * (Math.PI / 2)) + c + b;
            },
            easeOutSine: function(x, t, b, c, d) {
                return c * Math.sin((t / d) * (Math.PI / 2)) + b;
            },
            easeInOutSine: function(x, t, b, c, d) {
                return (-c / 2) * (Math.cos((Math.PI * t) / d) - 1) + b;
            },
            easeInExpo: function(x, t, b, c, d) {
                return t == 0 ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
            },
            easeOutExpo: function(x, t, b, c, d) {
                return t == d ? b + c : c * (-Math.pow(2, (-10 * t) / d) + 1) + b;
            },
            easeInOutExpo: function(x, t, b, c, d) {
                if (t == 0) return b;
                if (t == d) return b + c;
                if ((t /= d / 2) < 1) return (c / 2) * Math.pow(2, 10 * (t - 1)) + b;
                return (c / 2) * (-Math.pow(2, -10 * --t) + 2) + b;
            },
            easeInCirc: function(x, t, b, c, d) {
                return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
            },
            easeOutCirc: function(x, t, b, c, d) {
                return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
            },
            easeInOutCirc: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1)
                    return (-c / 2) * (Math.sqrt(1 - t * t) - 1) + b;
                return (c / 2) * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
            },
            easeInElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d) == 1) return b + c;
                if (!p) p = d * 0.3;
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                return (
                    -(
                        a *
                        Math.pow(2, 10 * (t -= 1)) *
                        Math.sin(((t * d - s) * (2 * Math.PI)) / p)
                    ) + b
                );
            },
            easeOutElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d) == 1) return b + c;
                if (!p) p = d * 0.3;
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                return (
                    a *
                    Math.pow(2, -10 * t) *
                    Math.sin(((t * d - s) * (2 * Math.PI)) / p) +
                    c +
                    b
                );
            },
            easeInOutElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d / 2) == 2) return b + c;
                if (!p) p = d * (0.3 * 1.5);
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                if (t < 1)
                    return (
                        -0.5 *
                        (a *
                            Math.pow(2, 10 * (t -= 1)) *
                            Math.sin(((t * d - s) * (2 * Math.PI)) / p)) +
                        b
                    );
                return (
                    a *
                    Math.pow(2, -10 * (t -= 1)) *
                    Math.sin(((t * d - s) * (2 * Math.PI)) / p) *
                    0.5 +
                    c +
                    b
                );
            },
            easeInBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c * (t /= d) * t * ((s + 1) * t - s) + b;
            },
            easeOutBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b;
            },
            easeInOutBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                if ((t /= d / 2) < 1)
                    return (c / 2) * (t * t * (((s *= 1.525) + 1) * t - s)) + b;
                return (
                    (c / 2) * ((t -= 2) * t * (((s *= 1.525) + 1) * t + s) + 2) + b
                );
            },
            easeInBounce: function(x, t, b, c, d) {
                return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b;
            },
            easeOutBounce: function(x, t, b, c, d) {
                if ((t /= d) < 1 / 2.75) {
                    return c * (7.5625 * t * t) + b;
                } else if (t < 2 / 2.75) {
                    return c * (7.5625 * (t -= 1.5 / 2.75) * t + 0.75) + b;
                } else if (t < 2.5 / 2.75) {
                    return c * (7.5625 * (t -= 2.25 / 2.75) * t + 0.9375) + b;
                } else {
                    return c * (7.5625 * (t -= 2.625 / 2.75) * t + 0.984375) + b;
                }
            },
            easeInOutBounce: function(x, t, b, c, d) {
                if (t < d / 2)
                    return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * 0.5 + b;
                return (
                    jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * 0.5 +
                    c * 0.5 +
                    b
                );
            },
        });
    </script>

    <script type="text/javascript">
        $(function() {
            var u17001span = $("span.u17001"),
                initialvalue = u17001span.text();
            u17001span.text("0");
            $(window).scroll(function() {
                if ($(this).scrollTop() > 1000) {
                    u17001span.prop("Counter", 0).animate({
                        Counter: initialvalue
                    }, {
                        duration: 3200,
                        easing: "linear",
                        step: function(now) {
                            u17001span.text(Math.ceil(now));
                        },
                    });
                    return;
                }
            });
        });
    </script>

    <script type="text/javascript">
        // t: current time, b: begInnIng value, c: change In value, d: duration
        jQuery.easing["jswing"] = jQuery.easing["swing"];

        jQuery.extend(jQuery.easing, {
            def: "easeOutQuad",
            swing: function(x, t, b, c, d) {
                //alert(jQuery.easing.default);
                return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
            },
            easeInQuad: function(x, t, b, c, d) {
                return c * (t /= d) * t + b;
            },
            easeOutQuad: function(x, t, b, c, d) {
                return -c * (t /= d) * (t - 2) + b;
            },
            easeInOutQuad: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t + b;
                return (-c / 2) * (--t * (t - 2) - 1) + b;
            },
            easeInCubic: function(x, t, b, c, d) {
                return c * (t /= d) * t * t + b;
            },
            easeOutCubic: function(x, t, b, c, d) {
                return c * ((t = t / d - 1) * t * t + 1) + b;
            },
            easeInOutCubic: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t + b;
                return (c / 2) * ((t -= 2) * t * t + 2) + b;
            },
            easeInQuart: function(x, t, b, c, d) {
                return c * (t /= d) * t * t * t + b;
            },
            easeOutQuart: function(x, t, b, c, d) {
                return -c * ((t = t / d - 1) * t * t * t - 1) + b;
            },
            easeInOutQuart: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t * t + b;
                return (-c / 2) * ((t -= 2) * t * t * t - 2) + b;
            },
            easeInQuint: function(x, t, b, c, d) {
                return c * (t /= d) * t * t * t * t + b;
            },
            easeOutQuint: function(x, t, b, c, d) {
                return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
            },
            easeInOutQuint: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t * t * t + b;
                return (c / 2) * ((t -= 2) * t * t * t * t + 2) + b;
            },
            easeInSine: function(x, t, b, c, d) {
                return -c * Math.cos((t / d) * (Math.PI / 2)) + c + b;
            },
            easeOutSine: function(x, t, b, c, d) {
                return c * Math.sin((t / d) * (Math.PI / 2)) + b;
            },
            easeInOutSine: function(x, t, b, c, d) {
                return (-c / 2) * (Math.cos((Math.PI * t) / d) - 1) + b;
            },
            easeInExpo: function(x, t, b, c, d) {
                return t == 0 ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
            },
            easeOutExpo: function(x, t, b, c, d) {
                return t == d ? b + c : c * (-Math.pow(2, (-10 * t) / d) + 1) + b;
            },
            easeInOutExpo: function(x, t, b, c, d) {
                if (t == 0) return b;
                if (t == d) return b + c;
                if ((t /= d / 2) < 1) return (c / 2) * Math.pow(2, 10 * (t - 1)) + b;
                return (c / 2) * (-Math.pow(2, -10 * --t) + 2) + b;
            },
            easeInCirc: function(x, t, b, c, d) {
                return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
            },
            easeOutCirc: function(x, t, b, c, d) {
                return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
            },
            easeInOutCirc: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1)
                    return (-c / 2) * (Math.sqrt(1 - t * t) - 1) + b;
                return (c / 2) * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
            },
            easeInElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d) == 1) return b + c;
                if (!p) p = d * 0.3;
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                return (
                    -(
                        a *
                        Math.pow(2, 10 * (t -= 1)) *
                        Math.sin(((t * d - s) * (2 * Math.PI)) / p)
                    ) + b
                );
            },
            easeOutElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d) == 1) return b + c;
                if (!p) p = d * 0.3;
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                return (
                    a *
                    Math.pow(2, -10 * t) *
                    Math.sin(((t * d - s) * (2 * Math.PI)) / p) +
                    c +
                    b
                );
            },
            easeInOutElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d / 2) == 2) return b + c;
                if (!p) p = d * (0.3 * 1.5);
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                if (t < 1)
                    return (
                        -0.5 *
                        (a *
                            Math.pow(2, 10 * (t -= 1)) *
                            Math.sin(((t * d - s) * (2 * Math.PI)) / p)) +
                        b
                    );
                return (
                    a *
                    Math.pow(2, -10 * (t -= 1)) *
                    Math.sin(((t * d - s) * (2 * Math.PI)) / p) *
                    0.5 +
                    c +
                    b
                );
            },
            easeInBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c * (t /= d) * t * ((s + 1) * t - s) + b;
            },
            easeOutBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b;
            },
            easeInOutBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                if ((t /= d / 2) < 1)
                    return (c / 2) * (t * t * (((s *= 1.525) + 1) * t - s)) + b;
                return (
                    (c / 2) * ((t -= 2) * t * (((s *= 1.525) + 1) * t + s) + 2) + b
                );
            },
            easeInBounce: function(x, t, b, c, d) {
                return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b;
            },
            easeOutBounce: function(x, t, b, c, d) {
                if ((t /= d) < 1 / 2.75) {
                    return c * (7.5625 * t * t) + b;
                } else if (t < 2 / 2.75) {
                    return c * (7.5625 * (t -= 1.5 / 2.75) * t + 0.75) + b;
                } else if (t < 2.5 / 2.75) {
                    return c * (7.5625 * (t -= 2.25 / 2.75) * t + 0.9375) + b;
                } else {
                    return c * (7.5625 * (t -= 2.625 / 2.75) * t + 0.984375) + b;
                }
            },
            easeInOutBounce: function(x, t, b, c, d) {
                if (t < d / 2)
                    return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * 0.5 + b;
                return (
                    jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * 0.5 +
                    c * 0.5 +
                    b
                );
            },
        });
    </script>

    <script type="text/javascript">
        $(function() {
            var u17009span = $("span.u17009"),
                initialvalue = u17009span.text();
            u17009span.text("0");
            $(window).scroll(function() {
                if ($(this).scrollTop() > 1000) {
                    u17009span.prop("Counter", 0).animate({
                        Counter: initialvalue
                    }, {
                        duration: 3200,
                        easing: "linear",
                        step: function(now) {
                            u17009span.text(Math.ceil(now));
                        },
                    });
                    return;
                }
            });
        });
    </script>

    <script type="text/javascript">
        // t: current time, b: begInnIng value, c: change In value, d: duration
        jQuery.easing["jswing"] = jQuery.easing["swing"];

        jQuery.extend(jQuery.easing, {
            def: "easeOutQuad",
            swing: function(x, t, b, c, d) {
                //alert(jQuery.easing.default);
                return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
            },
            easeInQuad: function(x, t, b, c, d) {
                return c * (t /= d) * t + b;
            },
            easeOutQuad: function(x, t, b, c, d) {
                return -c * (t /= d) * (t - 2) + b;
            },
            easeInOutQuad: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t + b;
                return (-c / 2) * (--t * (t - 2) - 1) + b;
            },
            easeInCubic: function(x, t, b, c, d) {
                return c * (t /= d) * t * t + b;
            },
            easeOutCubic: function(x, t, b, c, d) {
                return c * ((t = t / d - 1) * t * t + 1) + b;
            },
            easeInOutCubic: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t + b;
                return (c / 2) * ((t -= 2) * t * t + 2) + b;
            },
            easeInQuart: function(x, t, b, c, d) {
                return c * (t /= d) * t * t * t + b;
            },
            easeOutQuart: function(x, t, b, c, d) {
                return -c * ((t = t / d - 1) * t * t * t - 1) + b;
            },
            easeInOutQuart: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t * t + b;
                return (-c / 2) * ((t -= 2) * t * t * t - 2) + b;
            },
            easeInQuint: function(x, t, b, c, d) {
                return c * (t /= d) * t * t * t * t + b;
            },
            easeOutQuint: function(x, t, b, c, d) {
                return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
            },
            easeInOutQuint: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t * t * t + b;
                return (c / 2) * ((t -= 2) * t * t * t * t + 2) + b;
            },
            easeInSine: function(x, t, b, c, d) {
                return -c * Math.cos((t / d) * (Math.PI / 2)) + c + b;
            },
            easeOutSine: function(x, t, b, c, d) {
                return c * Math.sin((t / d) * (Math.PI / 2)) + b;
            },
            easeInOutSine: function(x, t, b, c, d) {
                return (-c / 2) * (Math.cos((Math.PI * t) / d) - 1) + b;
            },
            easeInExpo: function(x, t, b, c, d) {
                return t == 0 ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
            },
            easeOutExpo: function(x, t, b, c, d) {
                return t == d ? b + c : c * (-Math.pow(2, (-10 * t) / d) + 1) + b;
            },
            easeInOutExpo: function(x, t, b, c, d) {
                if (t == 0) return b;
                if (t == d) return b + c;
                if ((t /= d / 2) < 1) return (c / 2) * Math.pow(2, 10 * (t - 1)) + b;
                return (c / 2) * (-Math.pow(2, -10 * --t) + 2) + b;
            },
            easeInCirc: function(x, t, b, c, d) {
                return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
            },
            easeOutCirc: function(x, t, b, c, d) {
                return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
            },
            easeInOutCirc: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1)
                    return (-c / 2) * (Math.sqrt(1 - t * t) - 1) + b;
                return (c / 2) * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
            },
            easeInElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d) == 1) return b + c;
                if (!p) p = d * 0.3;
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                return (
                    -(
                        a *
                        Math.pow(2, 10 * (t -= 1)) *
                        Math.sin(((t * d - s) * (2 * Math.PI)) / p)
                    ) + b
                );
            },
            easeOutElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d) == 1) return b + c;
                if (!p) p = d * 0.3;
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                return (
                    a *
                    Math.pow(2, -10 * t) *
                    Math.sin(((t * d - s) * (2 * Math.PI)) / p) +
                    c +
                    b
                );
            },
            easeInOutElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d / 2) == 2) return b + c;
                if (!p) p = d * (0.3 * 1.5);
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                if (t < 1)
                    return (
                        -0.5 *
                        (a *
                            Math.pow(2, 10 * (t -= 1)) *
                            Math.sin(((t * d - s) * (2 * Math.PI)) / p)) +
                        b
                    );
                return (
                    a *
                    Math.pow(2, -10 * (t -= 1)) *
                    Math.sin(((t * d - s) * (2 * Math.PI)) / p) *
                    0.5 +
                    c +
                    b
                );
            },
            easeInBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c * (t /= d) * t * ((s + 1) * t - s) + b;
            },
            easeOutBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b;
            },
            easeInOutBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                if ((t /= d / 2) < 1)
                    return (c / 2) * (t * t * (((s *= 1.525) + 1) * t - s)) + b;
                return (
                    (c / 2) * ((t -= 2) * t * (((s *= 1.525) + 1) * t + s) + 2) + b
                );
            },
            easeInBounce: function(x, t, b, c, d) {
                return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b;
            },
            easeOutBounce: function(x, t, b, c, d) {
                if ((t /= d) < 1 / 2.75) {
                    return c * (7.5625 * t * t) + b;
                } else if (t < 2 / 2.75) {
                    return c * (7.5625 * (t -= 1.5 / 2.75) * t + 0.75) + b;
                } else if (t < 2.5 / 2.75) {
                    return c * (7.5625 * (t -= 2.25 / 2.75) * t + 0.9375) + b;
                } else {
                    return c * (7.5625 * (t -= 2.625 / 2.75) * t + 0.984375) + b;
                }
            },
            easeInOutBounce: function(x, t, b, c, d) {
                if (t < d / 2)
                    return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * 0.5 + b;
                return (
                    jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * 0.5 +
                    c * 0.5 +
                    b
                );
            },
        });
    </script>

    <script type="text/javascript">
        $(function() {
            var u17012span = $("span.u17012"),
                initialvalue = u17012span.text();
            u17012span.text("0");
            $(window).scroll(function() {
                if ($(this).scrollTop() > 1000) {
                    u17012span.prop("Counter", 0).animate({
                        Counter: initialvalue
                    }, {
                        duration: 3200,
                        easing: "linear",
                        step: function(now) {
                            u17012span.text(Math.ceil(now));
                        },
                    });
                    return;
                }
            });
        });
    </script>

    <script type="text/javascript">
        // t: current time, b: begInnIng value, c: change In value, d: duration
        jQuery.easing["jswing"] = jQuery.easing["swing"];

        jQuery.extend(jQuery.easing, {
            def: "easeOutQuad",
            swing: function(x, t, b, c, d) {
                //alert(jQuery.easing.default);
                return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
            },
            easeInQuad: function(x, t, b, c, d) {
                return c * (t /= d) * t + b;
            },
            easeOutQuad: function(x, t, b, c, d) {
                return -c * (t /= d) * (t - 2) + b;
            },
            easeInOutQuad: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t + b;
                return (-c / 2) * (--t * (t - 2) - 1) + b;
            },
            easeInCubic: function(x, t, b, c, d) {
                return c * (t /= d) * t * t + b;
            },
            easeOutCubic: function(x, t, b, c, d) {
                return c * ((t = t / d - 1) * t * t + 1) + b;
            },
            easeInOutCubic: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t + b;
                return (c / 2) * ((t -= 2) * t * t + 2) + b;
            },
            easeInQuart: function(x, t, b, c, d) {
                return c * (t /= d) * t * t * t + b;
            },
            easeOutQuart: function(x, t, b, c, d) {
                return -c * ((t = t / d - 1) * t * t * t - 1) + b;
            },
            easeInOutQuart: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t * t + b;
                return (-c / 2) * ((t -= 2) * t * t * t - 2) + b;
            },
            easeInQuint: function(x, t, b, c, d) {
                return c * (t /= d) * t * t * t * t + b;
            },
            easeOutQuint: function(x, t, b, c, d) {
                return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
            },
            easeInOutQuint: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1) return (c / 2) * t * t * t * t * t + b;
                return (c / 2) * ((t -= 2) * t * t * t * t + 2) + b;
            },
            easeInSine: function(x, t, b, c, d) {
                return -c * Math.cos((t / d) * (Math.PI / 2)) + c + b;
            },
            easeOutSine: function(x, t, b, c, d) {
                return c * Math.sin((t / d) * (Math.PI / 2)) + b;
            },
            easeInOutSine: function(x, t, b, c, d) {
                return (-c / 2) * (Math.cos((Math.PI * t) / d) - 1) + b;
            },
            easeInExpo: function(x, t, b, c, d) {
                return t == 0 ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
            },
            easeOutExpo: function(x, t, b, c, d) {
                return t == d ? b + c : c * (-Math.pow(2, (-10 * t) / d) + 1) + b;
            },
            easeInOutExpo: function(x, t, b, c, d) {
                if (t == 0) return b;
                if (t == d) return b + c;
                if ((t /= d / 2) < 1) return (c / 2) * Math.pow(2, 10 * (t - 1)) + b;
                return (c / 2) * (-Math.pow(2, -10 * --t) + 2) + b;
            },
            easeInCirc: function(x, t, b, c, d) {
                return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
            },
            easeOutCirc: function(x, t, b, c, d) {
                return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
            },
            easeInOutCirc: function(x, t, b, c, d) {
                if ((t /= d / 2) < 1)
                    return (-c / 2) * (Math.sqrt(1 - t * t) - 1) + b;
                return (c / 2) * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
            },
            easeInElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d) == 1) return b + c;
                if (!p) p = d * 0.3;
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                return (
                    -(
                        a *
                        Math.pow(2, 10 * (t -= 1)) *
                        Math.sin(((t * d - s) * (2 * Math.PI)) / p)
                    ) + b
                );
            },
            easeOutElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d) == 1) return b + c;
                if (!p) p = d * 0.3;
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                return (
                    a *
                    Math.pow(2, -10 * t) *
                    Math.sin(((t * d - s) * (2 * Math.PI)) / p) +
                    c +
                    b
                );
            },
            easeInOutElastic: function(x, t, b, c, d) {
                var s = 1.70158;
                var p = 0;
                var a = c;
                if (t == 0) return b;
                if ((t /= d / 2) == 2) return b + c;
                if (!p) p = d * (0.3 * 1.5);
                if (a < Math.abs(c)) {
                    a = c;
                    var s = p / 4;
                } else var s = (p / (2 * Math.PI)) * Math.asin(c / a);
                if (t < 1)
                    return (
                        -0.5 *
                        (a *
                            Math.pow(2, 10 * (t -= 1)) *
                            Math.sin(((t * d - s) * (2 * Math.PI)) / p)) +
                        b
                    );
                return (
                    a *
                    Math.pow(2, -10 * (t -= 1)) *
                    Math.sin(((t * d - s) * (2 * Math.PI)) / p) *
                    0.5 +
                    c +
                    b
                );
            },
            easeInBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c * (t /= d) * t * ((s + 1) * t - s) + b;
            },
            easeOutBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b;
            },
            easeInOutBack: function(x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                if ((t /= d / 2) < 1)
                    return (c / 2) * (t * t * (((s *= 1.525) + 1) * t - s)) + b;
                return (
                    (c / 2) * ((t -= 2) * t * (((s *= 1.525) + 1) * t + s) + 2) + b
                );
            },
            easeInBounce: function(x, t, b, c, d) {
                return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b;
            },
            easeOutBounce: function(x, t, b, c, d) {
                if ((t /= d) < 1 / 2.75) {
                    return c * (7.5625 * t * t) + b;
                } else if (t < 2 / 2.75) {
                    return c * (7.5625 * (t -= 1.5 / 2.75) * t + 0.75) + b;
                } else if (t < 2.5 / 2.75) {
                    return c * (7.5625 * (t -= 2.25 / 2.75) * t + 0.9375) + b;
                } else {
                    return c * (7.5625 * (t -= 2.625 / 2.75) * t + 0.984375) + b;
                }
            },
            easeInOutBounce: function(x, t, b, c, d) {
                if (t < d / 2)
                    return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * 0.5 + b;
                return (
                    jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * 0.5 +
                    c * 0.5 +
                    b
                );
            },
        });
    </script>

    <script type="text/javascript">
        $(function() {
            var u17018span = $("span.u17018"),
                initialvalue = u17018span.text();
            u17018span.text("0");
            $(window).scroll(function() {
                if ($(this).scrollTop() > 1000) {
                    u17018span.prop("Counter", 0).animate({
                        Counter: initialvalue
                    }, {
                        duration: 3200,
                        easing: "linear",
                        step: function(now) {
                            u17018span.text(Math.ceil(now));
                        },
                    });
                    return;
                }
            });
        });
    </script>
</body>

</html>
