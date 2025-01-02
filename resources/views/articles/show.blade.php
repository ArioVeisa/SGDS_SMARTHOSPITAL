@extends('layouts.default')



@section('content')
    <div id="page"><!-- column -->
        <div class="position_content">
            <div class="clearfix colelem"><!-- group -->
                <div class="clearfix grpelem"><!-- column -->
                    <div class=" colelem">
                        <img src="{{ $post->banner_url }}" alt="" width="800" height="400">
                    </div>
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
                <div class="museBGSize grpelem">
                    <img src="{{ asset('images/profiles.png') }}" width="110" height="110" alt="Gambar">
                </div>
                
                <div class="clearfix grpelem" id="pu19616-4"><!-- column -->
                    <div class="fadeIn clearfix colelem" id="u19616-4"><!-- content -->
                        <p>{{ $post->author->name }}</p>
                    </div>
                    <div class="clearfix colelem" id="u19617-4"><!-- content -->
                        <p>{!! $post->author->bio !!}</p>
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
