@extends('layouts.default')



@section('content')
    <div id="page"><!-- column -->
        <div class="position_content" id="page_position_content">
            <div class="clearfix colelem" id="ppu19590"><!-- group -->
                <div class="clearfix grpelem" id="pu19590"><!-- column -->
                    <div class=" colelem" id="u19590"><!-- simple frame --></div>
                    <div class="rounded-corners fadeIn clearfix colelem" id="u19558-4"><!-- content -->
                        <p>{{ $post->title }}</p>
                    </div>
                    <div class="clearfix colelem" id="pu22625"><!-- group -->
                        <div class="grpelem" id="u22625"><!-- custom html -->
                            <i class="fa fa-clock-o "></i>
                        </div>
                        <div class="clearfix grpelem" id="u19573-4"><!-- content -->
                            <p>{{ $post->published_at }}</p>
                        </div>
                        <div class="grpelem" id="u22627"><!-- custom html -->
                            <i class="fa fa-user  "></i>
                        </div>
                        <div class="clearfix grpelem" id="u19574-4"><!-- content -->
                            <p>{{ $post->author->name }}</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix grpelem" id="pu20218"><!-- column -->
                    <div class="clearfix colelem" id="u20218"><!-- group -->
                        <div class="clearfix grpelem" id="u20220"><!-- group -->
                            <div class="grpelem" id="u22621"><!-- custom html -->
                                <i class="fa fa-newspaper-o "></i>
                            </div>
                        </div>
                        <div class="fadeIn clearfix grpelem" id="u20221-4"><!-- content -->
                            <p>Recent Articles</p>
                        </div>
                    </div>
                    <div class="clearfix colelem" id="u20219"><!-- column -->
                        <div class="clearfix colelem" id="pu20226"><!-- group -->
                            <div class="museBGSize grpelem" id="u20226"><!-- simple frame --></div>
                            <div class="clearfix grpelem" id="pu20223-4"><!-- column -->
                                <div class="clearfix colelem" id="u20223-4"><!-- content -->
                                    <p>What is Ultrasound?</p>
                                </div>
                                <a class="nonblock nontext MuseLinkActive clearfix colelem" id="u20229-4"
                                    href="sample-article-page.html"><!-- content -->
                                    <p>Read More&nbsp; &gt;</p>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix colelem" id="pu20227"><!-- group -->
                            <div class="museBGSize grpelem" id="u20227"><!-- simple frame --></div>
                            <div class="clearfix grpelem" id="pu20224-4"><!-- column -->
                                <div class="clearfix colelem" id="u20224-4"><!-- content -->
                                    <p>Duis autem vel eum iriure dolor in hendrerit.</p>
                                </div>
                                <a class="nonblock nontext MuseLinkActive clearfix colelem" id="u20230-4"
                                    href="sample-article-page.html"><!-- content -->
                                    <p>Read More&nbsp; &gt;</p>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix colelem" id="pu20228"><!-- group -->
                            <div class="museBGSize grpelem" id="u20228"><!-- simple frame --></div>
                            <div class="clearfix grpelem" id="pu20225-4"><!-- column -->
                                <div class="clearfix colelem" id="u20225-4"><!-- content -->
                                    <p>Duis autem vel eum iriure dolor in hendrerit.</p>
                                </div>
                                <a class="nonblock nontext MuseLinkActive clearfix colelem" id="u20231-4"
                                    href="sample-article-page.html"><!-- content -->
                                    <p>Read More&nbsp; &gt;</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix colelem" id="ppu19561-4"><!-- group -->
                <div class="clearfix grpelem" id="pu19561-4"><!-- column -->
                    <div class="clearfix colelem" id="u19561-4"><!-- content -->
                        <p>{!! $post->content !!}</p>
                    </div>
                    <div class="clearfix colelem" id="pu19613"><!-- group -->
                        <div class="grpelem" id="u19613"><!-- simple frame --></div>
                        <div class="clearfix grpelem" id="u19612-4"><!-- content -->
                            <p>{{ $post->excerpt }}</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix grpelem" id="pu19592"><!-- column -->
                    <div class="clearfix colelem" id="u19592"><!-- group -->
                        <div class="clearfix grpelem" id="u19593"><!-- group -->
                            <div class="grpelem" id="u22623"><!-- custom html -->
                                <i class="fa fa-play  "></i>
                            </div>
                        </div>
                        <div class="fadeIn clearfix grpelem" id="u19594-4"><!-- content -->
                            <p>Video</p>
                        </div>
                    </div>
                    <div class="colelem" id="u19610"><!-- custom html -->

                        <iframe class="actAsDiv" width="335" height="325"
                            src="http://www.youtube.com/embed/iQkLUu_cdNs?autoplay=0&loop=0&showinfo=0&theme=dark&color=red&controls=1&modestbranding=1&start=0&fs=1&iv_load_policy=3&wmode=transparent&rel=0"
                            frameborder="0" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
            <div class="clearfix colelem" id="pu19614"><!-- group -->
                <div class="museBGSize grpelem" id="u19614"><!-- simple frame --></div>
                <div class="clearfix grpelem" id="pu19616-4"><!-- column -->
                    <div class="fadeIn clearfix colelem" id="u19616-4"><!-- content -->
                        <p>About Author: Dr. Bailey Doe</p>
                    </div>
                    <div class="clearfix colelem" id="u19617-4"><!-- content -->
                        <p>Dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                    </div>
                </div>
            </div>
            <div class="browser_width colelem" id="u19531-bw">
                <div id="u19531"><!-- simple frame --></div>
            </div>
            <div class="verticalspacer"></div>
            <div class="browser_width colelem" id="u17154-bw">
                <div id="u17154"><!-- group -->
                    <div class="clearfix" id="u17154_align_to_page">
                        <div class="clearfix grpelem" id="pu17172-4"><!-- column -->
                            <div class="clearfix colelem" id="u17172-4"><!-- content -->
                                <p>About Us</p>
                            </div>
                            <div class="clearfix colelem" id="u17156-4"><!-- content -->
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam
                                </p>
                            </div>
                        </div>
                        <div class="clearfix grpelem" id="pu17173-4"><!-- column -->
                            <div class="clearfix colelem" id="u17173-4"><!-- content -->
                                <p>Our Hospital</p>
                            </div>
                            <div class="clearfix colelem" id="u17157-10"><!-- content -->
                                <p>- Medical Services</p>
                                <p>- Patient Guides</p>
                                <p>- Find Doctor</p>
                                <p>- News</p>
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
                                    <p>info@mail.com</p>
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
                            <img class="block" id="u17182_img" src="images/heart2886.png" alt=""
                                width="29" height="26" />
                        </div>
                        <div class="clearfix grpelem" id="u17181-5"><!-- content -->
                            <p><span id="u17181">M</span>EDICAL</p>
                        </div>
                        <div class="clearfix grpelem" id="u17163-5"><!-- content -->
                            <p id="u17163-2">Copyright © 2015 Mani All rights reserved.</p>
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
    <!-- Other scripts -->
@endsection
