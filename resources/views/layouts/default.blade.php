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
    @vite('resources/css/index.css')
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
            <main>
                @include('includes.header')
                @yield('content')
                @include('includes.footer')
            </main>
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
