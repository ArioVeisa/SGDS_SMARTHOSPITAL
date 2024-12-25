<!DOCTYPE html>
<html class="html" lang="en-US">

<head>

    <script type="text/javascript">
        if (typeof Muse == "undefined") window.Muse = {};
        window.Muse.assets = {
            "required": ["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "webpro.js", "musewpslideshow.js",
                "jquery.museoverlay.js", "touchswipe.js", "jquery.watch.js", "jquery.musepolyfill.bgsize.js",
                "museredirect.js", "about.css"
            ],
            "outOfDate": []
        };
    </script>

    <script src="scripts/museredirect.js?3899419633" type="text/javascript"></script>

    <script type="text/javascript">
        Muse.Redirect.redirect('desktop', 'tablet/about.html', 'phone/about.html');
    </script>

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="generator" content="2015.0.2.310" />
    <title>About</title>
    <link media="only screen and (max-device-width: 370px)" rel="alternate" href="http://www.com/phone/about.html" />
    <link media="only screen and (max-device-width: 960px)" rel="alternate" href="http://www.com/tablet/about.html" />
    <!-- CSS -->
    {{-- <link rel="stylesheet" type="text/css" href="css/site_global.css?206135255"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?44074231"/>
  <link rel="stylesheet" type="text/css" href="css/about.css?4007821676" id="pagesheet"/>

   --}}


    @vite('resources/css/site_global.css')
    @vite('resources/css/master_a-master.css')
    @vite('resources/css/about.css')
    @vite('resources/js/app.js')


    <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_about.css?3841042240"/>
  <![endif]-->
    <!-- Other scripts -->
    <script type="text/javascript">
        document.documentElement.className += ' js';
        var __adobewebfontsappname__ = "muse";
    </script>
    <!-- JS includes -->
    <script type="text/javascript">
        document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') +
            '//webfonts.creativecloud.com/raleway:n7,n4,n3,n8,n6:all;open-sans:n6:all.js" type="text/javascript">\x3C/script>'
        );
    </script>
    <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->
    <!--custom head HTML-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/wow/1.0.3/wow.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.1/animate.min.css">
</head>

<body>

    <div class="rounded-corners clearfix" id="page"><!-- column -->
        <div class="position_content" id="page_position_content">
            <div class="browser_width" id="u22267-bw">
                <div class="pinned-colelem" id="u22267"><!-- simple frame --></div>
            </div>
            <a class="nonblock nontext Button clearfix pinned-colelem" id="buttonu17284"
                href="{{ route('login') }}"><!-- container box -->
                <div class="clearfix grpelem" id="u17285-4"><!-- content -->
                    <p>Login Or Register</p>
                </div>
            </a>
            <div class="clearfix pinned-colelem" id="u17377"><!-- group -->
                <div class="clip_frame grpelem" id="u17287"><!-- image -->
                    <img class="block" id="u17287_img" src="{{ asset('storage/images/heart2886.png') }}" alt=""
                        width="35" height="31" />
                </div>
                <div class="clearfix grpelem" id="u17283-5"><!-- content -->
                    <p><span id="u17283">H</span>EALTHTIX</p>
                </div>
            </div>
            <div class="pinned-colelem" id="u22249"><!-- custom html -->
                <i class="fa fa-phone"></i>
            </div>
            <div class="clearfix pinned-colelem" id="u17220-4"><!-- content -->
                <p>1-811-234-5678</p>
            </div>
            <div class="pinned-colelem" id="u22251"><!-- custom html -->
                <i class="fa fa-fax"></i>
            </div>
            <div class="clearfix pinned-colelem" id="u17221-4"><!-- content -->
                <p>1-811-234-5679</p>
            </div>
            <div class="pinned-colelem" id="u22253"><!-- custom html -->
                <i class="fa fa-envelope"></i>
            </div>
            <div class="clearfix pinned-colelem" id="u17222-4"><!-- content -->
                <p>info@mail.com</p>
            </div>
            <div class="browser_width" id="u17226-bw">
                <div class="pinned-colelem" id="u17226"><!-- simple frame --></div>
            </div>
            <nav class="MenuBar clearfix pinned-colelem" id="menuu17227"><!-- horizontal box -->
                <div class="MenuItemContainer clearfix grpelem" id="u17228"><!-- vertical box -->
                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u17229"
                        href="{{ url('/') }}"><!-- horizontal box -->
                        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u17230-4"><!-- content -->
                            <p>Home</p>
                        </div>
                    </a>
                </div>
                <div class="MenuItemContainer clearfix grpelem" id="u17270"><!-- vertical box -->
                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem"
                        id="u17271" href="{{ url('about') }}"><!-- horizontal box -->
                        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u17274-4"><!-- content -->
                            <p>About</p>
                        </div>
                    </a>
                </div>
                <div class="MenuItemContainer clearfix grpelem" id="u17263"><!-- vertical box -->
                    <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u17264"
                        href="services.html"><!-- horizontal box -->
                        <div class="MenuItemLabel NoWrap clearfix grpelem" id="u17267-4"><!-- content -->
                            <p>Article</p>
                        </div>
                    </a>
                </div>

            </nav>
            <div class="pinned-colelem" id="u22257"><!-- custom html -->
                <i class="fa fa-facebook"></i>
            </div>
            <div class="pinned-colelem" id="u22259"><!-- custom html -->
                <i class="fa fa-instagram"></i>
            </div>
            <div class="pinned-colelem" id="u22261"><!-- custom html -->
                <i class="fa fa-google-plus"></i>
            </div>
            <div class="pinned-colelem" id="u22263"><!-- custom html -->
                <i class="fa fa-twitter"></i>
            </div>
            <div class="pinned-colelem" id="u22265"><!-- custom html -->
                <i class="fa fa-pinterest"></i>
            </div>
            <div class="browser_width colelem" id="u17812-bw">
                <div class="museBGSize" id="u17812"><!-- group -->
                    <div class="clearfix" id="u17812_align_to_page">
                        <div class="clearfix grpelem" id="u18013-4"><!-- content -->
                            <p>About Healthtix</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix colelem" id="pu18019-4"><!-- group -->
                <div class="rounded-corners fadeIn clearfix grpelem" id="u18019-4"><!-- content -->
                    <p>Our Vision</p>
                </div>
                <div class="fadeIn clearfix grpelem" id="u18038-4"><!-- content -->
                    <p>Our Mission</p>
                </div>
            </div>
            <div class="clearfix colelem" id="pu18021-4"><!-- group -->
                <div class="clearfix grpelem" id="u18021-4"><!-- content -->
                    <p>To empower individuals with reliable and accessible health information, fostering a healthier
                        global community through education, awareness, and prevention.</p>
                </div>
                <div class="clearfix grpelem" id="pu22446"><!-- column -->
                    <div class="colelem" id="u22446"><!-- custom html -->
                        <i class="fa fa-check "></i>
                    </div>
                    <div class="colelem" id="u22448"><!-- custom html -->
                        <i class="fa fa-check "></i>
                    </div>
                    <div class="colelem" id="u22450"><!-- custom html -->
                        <i class="fa fa-check "></i>
                    </div>
                </div>
                <div class="clearfix grpelem" id="pu18039-4"><!-- column -->
                    <div class="clearfix colelem" id="u18039-4"><!-- content -->
                        <p>To provide up-to-date, evidence-based health articles that help people make informed
                            decisions about their well-being</p>
                    </div>
                    <div class="clearfix colelem" id="u18042-4"><!-- content -->
                        <p>To be a trusted source for health information, encouraging a proactive approach to personal
                            and public health</p>
                    </div>
                    <div class="clearfix colelem" id="u18044-4"><!-- content -->
                        <p>To raise public awareness about emerging health challenges and promote preventive measures
                        </p>
                    </div>
                </div>
            </div>
            <div class="clearfix colelem" id="pu18049"><!-- group -->
                <div class="browser_width grpelem" id="u18049-bw">
                    <div id="u18049"><!-- simple frame --></div>
                </div>
                <div class="browser_width grpelem" id="u18050-bw">
                    <div class="museBGSize" id="u18050"><!-- group -->
                        <div class="clearfix" id="u18050_align_to_page">
                        </div>
                    </div>
                </div>
                <div class="fadeIn clearfix grpelem" id="u18054-6"><!-- content -->
                    <p>Your Source for</p>
                </div>
                <div class="fadeIn clearfix grpelem" id="u18056-4"><!-- content -->
                    <p><span id="u18054-2">Health News</span></p>
                </div>
            </div>
            <div class="fadeIn clearfix colelem" id="u18080-4"><!-- content -->
                <p><span>A Trusted Guide to Understanding Global Health Conditions</span></p>
            </div>
            <div class="clearfix colelem" id="pu18077-4"><!-- group -->
                <div class="clearfix grpelem" id="u18077-4"><!-- content -->
                    <p>At Healthtix, we understand that navigating through the vast amount of health information
                        can be overwhelming. That’s why our team of health experts and writers is dedicated to providing
                        clear, accessible, and accurate content about various diseases and health conditions from around
                        the world. Whether you're seeking to understand a specific illness, its symptoms, treatment
                        options, or the latest research, we are here to guide you with reliable and up-to-date
                        information that can help you make informed decisions about your health.</p>
                </div>
            </div>
            <div class="clearfix colelem" id="pu17959"><!-- group -->

                <div class="verticalspacer"></div>
                <div class="browser_width colelem" id="u17154-bw">
                    <div id="u17154"><!-- group -->
                        <div class="clearfix" id="u17154_align_to_page">
                            <div class="clearfix grpelem" id="pu17172-4"><!-- column -->
                                <div class="clearfix colelem" id="u17172-4"><!-- content -->
                                    <p>About Us</p>
                                </div>
                                <div class="clearfix colelem" id="u17156-4"><!-- content -->
                                    <p>Healthtix, we are committed to providing reliable, clear, and accessible
                                        information on various diseases and health conditions from around the world. Our
                                        team of experts delivers up-to-date, evidence-based content to help you
                                        understand illnesses, their symptoms, treatments, and preventive measures, so
                                        you can make informed decisions about your health and well-being</p>
                                </div>
                            </div>
                            <div class="clearfix grpelem" id="pu17162-4"><!-- column -->
                                <div class="clearfix colelem" id="u17162-4"><!-- content -->
                                    <p>Our Info</p>
                                </div>
                                <div class="clearfix colelem" id="pu22429"><!-- group -->
                                    <div class="grpelem" id="u22429"><!-- custom html -->
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="clearfix grpelem" id="u17158-4"><!-- content -->
                                        <p>999&nbsp; Street Ca 70079</p>
                                    </div>
                                </div>
                                <div class="clearfix colelem" id="pu22431"><!-- group -->
                                    <div class="grpelem" id="u22431"><!-- custom html -->
                                        <i class="fa fa-phone "></i>
                                    </div>
                                    <div class="clearfix grpelem" id="u17159-4"><!-- content -->
                                        <p>1-811-234-5678</p>
                                    </div>
                                </div>
                                <div class="clearfix colelem" id="pu22433"><!-- group -->
                                    <div class="grpelem" id="u22433"><!-- custom html -->
                                        <i class="fa fa-fax "></i>
                                    </div>
                                    <div class="clearfix grpelem" id="u17160-4"><!-- content -->
                                        <p>1-811-234-5679</p>
                                    </div>
                                </div>
                                <div class="clearfix colelem" id="pu22435"><!-- group -->
                                    <div class="grpelem" id="u22435"><!-- custom html -->
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="clearfix grpelem" id="u17161-4"><!-- content -->
                                        <p>kelompok4@mail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="browser_width colelem" id="u17155-bw">
                    <div id="u17155"><!-- group -->
                        <div class="clearfix" id="u17155_align_to_page">
                            <div class="clip_frame grpelem" id="u17182"><!-- image -->
                                <img class="block" id="u17182_img" src="{{ asset('storage/images/heart2886.png') }}"
                                    alt="" width="29" height="26" />
                            </div>
                            <div class="clearfix grpelem" id="u17181-5"><!-- content -->
                                <p><span id="u17181">H</span>EALTHTIX</p>
                            </div>
                            <div class="clearfix grpelem" id="u17163-5"><!-- content -->
                                <p id="u17163-2">Copyright © 2024 Kelompok 4.</p>
                                <p id="u17163-3">&nbsp;</p>
                            </div>
                            <div class="grpelem" id="u17322"><!-- custom html -->
                                <script>
                                    $('.fadeInUp').addClass('wow fadeInUp');
                                    $('.fadeInDown').addClass('wow fadeInDown');
                                    $('.fadeInLeft').addClass('wow fadeInLeft');
                                    $('.fadeInRight').addClass('wow fadeInRight');
                                    $('.fadeIn').addClass('wow fadeIn');
                                    $('.zoomIn').addClass('wow zoomIn');
                                </script>

                                <script>
                                    new WOW().init();
                                </script>

                            </div>
                            <div class="grpelem" id="u22268"><!-- custom html -->
                                <i class="fa fa-facebook"></i>
                            </div>
                            <div class="grpelem" id="u22270"><!-- custom html -->
                                <i class="fa fa-instagram"></i>
                            </div>
                            <div class="grpelem" id="u22272"><!-- custom html -->
                                <i class="fa fa-google-plus"></i>
                            </div>
                            <div class="grpelem" id="u22274"><!-- custom html -->
                                <i class="fa fa-twitter"></i>
                            </div>
                            <div class="grpelem" id="u22276"><!-- custom html -->
                                <i class="fa fa-pinterest"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS includes -->
        <script type="text/javascript">
            if (document.location.protocol != 'https:') document.write(
                '\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>'
            );
        </script>
        <script type="text/javascript">
            window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
        </script>
        <script src="scripts/museutils.js?275725342" type="text/javascript"></script>
        <script src="scripts/jquery.musemenu.js?4042164668" type="text/javascript"></script>
        <script src="scripts/jquery.musepolyfill.bgsize.js?185257658" type="text/javascript"></script>
        <script src="scripts/jquery.watch.js?3999102769" type="text/javascript"></script>
        <script src="scripts/webpro.js?3883484123" type="text/javascript"></script>
        <script src="scripts/musewpslideshow.js?360574455" type="text/javascript"></script>
        <script src="scripts/jquery.museoverlay.js?342093292" type="text/javascript"></script>
        <script src="scripts/touchswipe.js?4218319045" type="text/javascript"></script>
        <!-- Other scripts -->
        {{-- <script type="text/javascript">
        $(document).ready(function() {
            try {
                (function() {
                    var a = {},
                        b = function(a) {
                            if (a.match(/^rgb/)) return a = a.replace(/\s+/g, "").match(/([\d\,]+)/gi)[0].split(
                                ","), (parseInt(a[0]) << 16) + (parseInt(a[1]) << 8) + parseInt(a[2]);
                            if (a.match(/^\#/)) return parseInt(a.substr(1), 16);
                            return 0
                        };
                    (function() {
                        $('link[type="text/css"]').each(function() {
                            var b = ($(this).attr("href") || "").match(
                                /\/?css\/([\w\-]+\.css)\?(\d+)/);
                            b && b[1] && b[2] && (a[b[1]] = b[2])
                        })
                    })();
                    (function() {
                        $("body").append(
                            '<div class="version" style="display:none; width:1px; height:1px;"></div>');
                        for (var c = $(".version"), d = 0; d < Muse.assets.required.length;) {
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
                                    g != 0 || h != 0 ? (Muse.assets.required.splice(d, 1), "undefined" !=
                                        typeof a[f] && (g != a[f] >>> 24 || h != (a[f] & 16777215)) &&
                                        Muse.assets.outOfDate.push(f)) : d++;
                                    c.removeClass(k);
                                    break;
                                case "js":
                                    k.match(/^jquery-[\d\.]+/gi) &&
                                        typeof $ != "undefined" ? Muse.assets.required.splice(d, 1) : d++;
                                    break;
                                default:
                                    throw Error("Unsupported file type: " + g);
                            }
                        }
                        c.remove();
                        if (Muse.assets.outOfDate.length || Muse.assets.required.length) c =
                            "Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",
                            (d = location && location.search && location.search.match && location.search
                                .match(/muse_debug/gi)) && Muse.assets.outOfDate.length && (c +=
                                "\nOut of date: " + Muse.assets.outOfDate.join(",")), d && Muse.assets
                            .required.length && (c += "\nMissing: " + Muse.assets.required.join(",")),
                            alert(c)
                    })()
                })();
                /* body */
                Muse.Utils.transformMarkupToFixBrowserProblemsPreInit(); /* body */
                Muse.Utils.prepHyperlinks(true); /* body */
                Muse.Utils.initWidget('.MenuBar', function(elem) {
                    return $(elem).museMenu();
                }); /* unifiedNavBar */
                Muse.Utils.resizeHeight() /* resize height */
                Muse.Utils.initWidget('#pamphletu22454', function(elem) {
                    new WebPro.Widget.ContentSlideShow(elem, {
                        contentLayout_runtime: 'stack',
                        event: 'click',
                        deactivationEvent: 'none',
                        autoPlay: false,
                        displayInterval: 3000,
                        transitionStyle: 'vertical',
                        transitionDuration: 1500,
                        hideAllContentsFirst: false,
                        shuffle: false,
                        enableSwipe: true,
                        resumeAutoplay: true,
                        resumeAutoplayInterval: 3000,
                        playOnce: false,
                        autoActivate_runtime: false
                    });
                }); /* #pamphletu22454 */
                Muse.Utils.fullPage('#page'); /* 100% height page */
                Muse.Utils.showWidgetsWhenReady(); /* body */
                Muse.Utils.transformMarkupToFixBrowserProblems(); /* body */
            } catch (e) {
                if (e && 'function' == typeof e.notify) e.notify();
                else Muse.Assert.fail('Error calling selector function:' + e);
            }
        });
    </script> --}}

        <!--HTML Widget code-->


        <script type="text/javascript">
            // t: current time, b: begInnIng value, c: change In value, d: duration
            jQuery.easing['jswing'] = jQuery.easing['swing'];

            jQuery.extend(jQuery.easing, {
                def: 'easeOutQuad',
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
                    if ((t /= d / 2) < 1) return c / 2 * t * t + b;
                    return -c / 2 * ((--t) * (t - 2) - 1) + b;
                },
                easeInCubic: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t + b;
                },
                easeOutCubic: function(x, t, b, c, d) {
                    return c * ((t = t / d - 1) * t * t + 1) + b;
                },
                easeInOutCubic: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
                    return c / 2 * ((t -= 2) * t * t + 2) + b;
                },
                easeInQuart: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t * t + b;
                },
                easeOutQuart: function(x, t, b, c, d) {
                    return -c * ((t = t / d - 1) * t * t * t - 1) + b;
                },
                easeInOutQuart: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
                    return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
                },
                easeInQuint: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t * t * t + b;
                },
                easeOutQuint: function(x, t, b, c, d) {
                    return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
                },
                easeInOutQuint: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
                    return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
                },
                easeInSine: function(x, t, b, c, d) {
                    return -c * Math.cos(t / d * (Math.PI / 2)) + c + b;
                },
                easeOutSine: function(x, t, b, c, d) {
                    return c * Math.sin(t / d * (Math.PI / 2)) + b;
                },
                easeInOutSine: function(x, t, b, c, d) {
                    return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b;
                },
                easeInExpo: function(x, t, b, c, d) {
                    return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
                },
                easeOutExpo: function(x, t, b, c, d) {
                    return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
                },
                easeInOutExpo: function(x, t, b, c, d) {
                    if (t == 0) return b;
                    if (t == d) return b + c;
                    if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
                    return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
                },
                easeInCirc: function(x, t, b, c, d) {
                    return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
                },
                easeOutCirc: function(x, t, b, c, d) {
                    return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
                },
                easeInOutCirc: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
                    return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
                },
                easeInElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d) == 1) return b + c;
                    if (!p) p = d * .3;
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
                },
                easeOutElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d) == 1) return b + c;
                    if (!p) p = d * .3;
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
                },
                easeInOutElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d / 2) == 2) return b + c;
                    if (!p) p = d * (.3 * 1.5);
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) /
                        p)) + b;
                    return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b;
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
                    if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
                    return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b;
                },
                easeInBounce: function(x, t, b, c, d) {
                    return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b;
                },
                easeOutBounce: function(x, t, b, c, d) {
                    if ((t /= d) < (1 / 2.75)) {
                        return c * (7.5625 * t * t) + b;
                    } else if (t < (2 / 2.75)) {
                        return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
                    } else if (t < (2.5 / 2.75)) {
                        return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
                    } else {
                        return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
                    }
                },
                easeInOutBounce: function(x, t, b, c, d) {
                    if (t < d / 2) return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * .5 + b;
                    return jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * .5 + c * .5 + b;
                }
            });
        </script>










        <script type="text/javascript">
            $(function() {
                var u17821span = $('span.u17821'),
                    initialvalue = u17821span.text();
                u17821span.text('0');
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 1000) {
                        u17821span
                            .prop('Counter', 0)
                            .animate({
                                'Counter': initialvalue
                            }, {
                                duration: 3200,
                                easing: 'linear',
                                step: function(now) {
                                    u17821span.text(Math.ceil(now));
                                }
                            });
                        return;
                    }
                });
            });
        </script>


        <script type="text/javascript">
            // t: current time, b: begInnIng value, c: change In value, d: duration
            jQuery.easing['jswing'] = jQuery.easing['swing'];

            jQuery.extend(jQuery.easing, {
                def: 'easeOutQuad',
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
                    if ((t /= d / 2) < 1) return c / 2 * t * t + b;
                    return -c / 2 * ((--t) * (t - 2) - 1) + b;
                },
                easeInCubic: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t + b;
                },
                easeOutCubic: function(x, t, b, c, d) {
                    return c * ((t = t / d - 1) * t * t + 1) + b;
                },
                easeInOutCubic: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
                    return c / 2 * ((t -= 2) * t * t + 2) + b;
                },
                easeInQuart: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t * t + b;
                },
                easeOutQuart: function(x, t, b, c, d) {
                    return -c * ((t = t / d - 1) * t * t * t - 1) + b;
                },
                easeInOutQuart: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
                    return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
                },
                easeInQuint: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t * t * t + b;
                },
                easeOutQuint: function(x, t, b, c, d) {
                    return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
                },
                easeInOutQuint: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
                    return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
                },
                easeInSine: function(x, t, b, c, d) {
                    return -c * Math.cos(t / d * (Math.PI / 2)) + c + b;
                },
                easeOutSine: function(x, t, b, c, d) {
                    return c * Math.sin(t / d * (Math.PI / 2)) + b;
                },
                easeInOutSine: function(x, t, b, c, d) {
                    return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b;
                },
                easeInExpo: function(x, t, b, c, d) {
                    return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
                },
                easeOutExpo: function(x, t, b, c, d) {
                    return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
                },
                easeInOutExpo: function(x, t, b, c, d) {
                    if (t == 0) return b;
                    if (t == d) return b + c;
                    if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
                    return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
                },
                easeInCirc: function(x, t, b, c, d) {
                    return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
                },
                easeOutCirc: function(x, t, b, c, d) {
                    return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
                },
                easeInOutCirc: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
                    return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
                },
                easeInElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d) == 1) return b + c;
                    if (!p) p = d * .3;
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
                },
                easeOutElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d) == 1) return b + c;
                    if (!p) p = d * .3;
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
                },
                easeInOutElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d / 2) == 2) return b + c;
                    if (!p) p = d * (.3 * 1.5);
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) /
                        p)) + b;
                    return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b;
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
                    if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
                    return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b;
                },
                easeInBounce: function(x, t, b, c, d) {
                    return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b;
                },
                easeOutBounce: function(x, t, b, c, d) {
                    if ((t /= d) < (1 / 2.75)) {
                        return c * (7.5625 * t * t) + b;
                    } else if (t < (2 / 2.75)) {
                        return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
                    } else if (t < (2.5 / 2.75)) {
                        return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
                    } else {
                        return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
                    }
                },
                easeInOutBounce: function(x, t, b, c, d) {
                    if (t < d / 2) return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * .5 + b;
                    return jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * .5 + c * .5 + b;
                }
            });
        </script>










        <script type="text/javascript">
            $(function() {
                var u17836span = $('span.u17836'),
                    initialvalue = u17836span.text();
                u17836span.text('0');
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 1000) {
                        u17836span
                            .prop('Counter', 0)
                            .animate({
                                'Counter': initialvalue
                            }, {
                                duration: 3200,
                                easing: 'linear',
                                step: function(now) {
                                    u17836span.text(Math.ceil(now));
                                }
                            });
                        return;
                    }
                });
            });
        </script>


        <script type="text/javascript">
            // t: current time, b: begInnIng value, c: change In value, d: duration
            jQuery.easing['jswing'] = jQuery.easing['swing'];

            jQuery.extend(jQuery.easing, {
                def: 'easeOutQuad',
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
                    if ((t /= d / 2) < 1) return c / 2 * t * t + b;
                    return -c / 2 * ((--t) * (t - 2) - 1) + b;
                },
                easeInCubic: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t + b;
                },
                easeOutCubic: function(x, t, b, c, d) {
                    return c * ((t = t / d - 1) * t * t + 1) + b;
                },
                easeInOutCubic: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
                    return c / 2 * ((t -= 2) * t * t + 2) + b;
                },
                easeInQuart: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t * t + b;
                },
                easeOutQuart: function(x, t, b, c, d) {
                    return -c * ((t = t / d - 1) * t * t * t - 1) + b;
                },
                easeInOutQuart: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
                    return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
                },
                easeInQuint: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t * t * t + b;
                },
                easeOutQuint: function(x, t, b, c, d) {
                    return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
                },
                easeInOutQuint: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
                    return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
                },
                easeInSine: function(x, t, b, c, d) {
                    return -c * Math.cos(t / d * (Math.PI / 2)) + c + b;
                },
                easeOutSine: function(x, t, b, c, d) {
                    return c * Math.sin(t / d * (Math.PI / 2)) + b;
                },
                easeInOutSine: function(x, t, b, c, d) {
                    return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b;
                },
                easeInExpo: function(x, t, b, c, d) {
                    return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
                },
                easeOutExpo: function(x, t, b, c, d) {
                    return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
                },
                easeInOutExpo: function(x, t, b, c, d) {
                    if (t == 0) return b;
                    if (t == d) return b + c;
                    if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
                    return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
                },
                easeInCirc: function(x, t, b, c, d) {
                    return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
                },
                easeOutCirc: function(x, t, b, c, d) {
                    return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
                },
                easeInOutCirc: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
                    return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
                },
                easeInElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d) == 1) return b + c;
                    if (!p) p = d * .3;
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
                },
                easeOutElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d) == 1) return b + c;
                    if (!p) p = d * .3;
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
                },
                easeInOutElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d / 2) == 2) return b + c;
                    if (!p) p = d * (.3 * 1.5);
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) /
                        p)) + b;
                    return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b;
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
                    if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
                    return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b;
                },
                easeInBounce: function(x, t, b, c, d) {
                    return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b;
                },
                easeOutBounce: function(x, t, b, c, d) {
                    if ((t /= d) < (1 / 2.75)) {
                        return c * (7.5625 * t * t) + b;
                    } else if (t < (2 / 2.75)) {
                        return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
                    } else if (t < (2.5 / 2.75)) {
                        return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
                    } else {
                        return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
                    }
                },
                easeInOutBounce: function(x, t, b, c, d) {
                    if (t < d / 2) return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * .5 + b;
                    return jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * .5 + c * .5 + b;
                }
            });
        </script>










        <script type="text/javascript">
            $(function() {
                var u17842span = $('span.u17842'),
                    initialvalue = u17842span.text();
                u17842span.text('0');
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 1000) {
                        u17842span
                            .prop('Counter', 0)
                            .animate({
                                'Counter': initialvalue
                            }, {
                                duration: 3200,
                                easing: 'linear',
                                step: function(now) {
                                    u17842span.text(Math.ceil(now));
                                }
                            });
                        return;
                    }
                });
            });
        </script>


        <script type="text/javascript">
            // t: current time, b: begInnIng value, c: change In value, d: duration
            jQuery.easing['jswing'] = jQuery.easing['swing'];

            jQuery.extend(jQuery.easing, {
                def: 'easeOutQuad',
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
                    if ((t /= d / 2) < 1) return c / 2 * t * t + b;
                    return -c / 2 * ((--t) * (t - 2) - 1) + b;
                },
                easeInCubic: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t + b;
                },
                easeOutCubic: function(x, t, b, c, d) {
                    return c * ((t = t / d - 1) * t * t + 1) + b;
                },
                easeInOutCubic: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
                    return c / 2 * ((t -= 2) * t * t + 2) + b;
                },
                easeInQuart: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t * t + b;
                },
                easeOutQuart: function(x, t, b, c, d) {
                    return -c * ((t = t / d - 1) * t * t * t - 1) + b;
                },
                easeInOutQuart: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
                    return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
                },
                easeInQuint: function(x, t, b, c, d) {
                    return c * (t /= d) * t * t * t * t + b;
                },
                easeOutQuint: function(x, t, b, c, d) {
                    return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
                },
                easeInOutQuint: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
                    return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
                },
                easeInSine: function(x, t, b, c, d) {
                    return -c * Math.cos(t / d * (Math.PI / 2)) + c + b;
                },
                easeOutSine: function(x, t, b, c, d) {
                    return c * Math.sin(t / d * (Math.PI / 2)) + b;
                },
                easeInOutSine: function(x, t, b, c, d) {
                    return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b;
                },
                easeInExpo: function(x, t, b, c, d) {
                    return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
                },
                easeOutExpo: function(x, t, b, c, d) {
                    return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
                },
                easeInOutExpo: function(x, t, b, c, d) {
                    if (t == 0) return b;
                    if (t == d) return b + c;
                    if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
                    return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
                },
                easeInCirc: function(x, t, b, c, d) {
                    return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
                },
                easeOutCirc: function(x, t, b, c, d) {
                    return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
                },
                easeInOutCirc: function(x, t, b, c, d) {
                    if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
                    return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
                },
                easeInElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d) == 1) return b + c;
                    if (!p) p = d * .3;
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
                },
                easeOutElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d) == 1) return b + c;
                    if (!p) p = d * .3;
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
                },
                easeInOutElastic: function(x, t, b, c, d) {
                    var s = 1.70158;
                    var p = 0;
                    var a = c;
                    if (t == 0) return b;
                    if ((t /= d / 2) == 2) return b + c;
                    if (!p) p = d * (.3 * 1.5);
                    if (a < Math.abs(c)) {
                        a = c;
                        var s = p / 4;
                    } else var s = p / (2 * Math.PI) * Math.asin(c / a);
                    if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) /
                        p)) + b;
                    return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b;
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
                    if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
                    return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b;
                },
                easeInBounce: function(x, t, b, c, d) {
                    return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b;
                },
                easeOutBounce: function(x, t, b, c, d) {
                    if ((t /= d) < (1 / 2.75)) {
                        return c * (7.5625 * t * t) + b;
                    } else if (t < (2 / 2.75)) {
                        return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
                    } else if (t < (2.5 / 2.75)) {
                        return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
                    } else {
                        return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
                    }
                },
                easeInOutBounce: function(x, t, b, c, d) {
                    if (t < d / 2) return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * .5 + b;
                    return jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * .5 + c * .5 + b;
                }
            });
        </script>










        <script type="text/javascript">
            $(function() {
                var u17860span = $('span.u17860'),
                    initialvalue = u17860span.text();
                u17860span.text('0');
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 1000) {
                        u17860span
                            .prop('Counter', 0)
                            .animate({
                                'Counter': initialvalue
                            }, {
                                duration: 3200,
                                easing: 'linear',
                                step: function(now) {
                                    u17860span.text(Math.ceil(now));
                                }
                            });
                        return;
                    }
                });
            });
        </script>

</body>

</html>
