<header>
    <div class="first-bar-area mobile-view">
        <div class="container">
         <div class="row">
             <div class="col-md-9">
              <div class="row info">
                  <div class="col-md-2">
                      <i class="ion-android-phone-portrait"></i>
                      <span>(07) 858 3453</span>
                  </div>
                  <div class="col-md-4">
                      <i class="ion-ios-location"></i>
                      <span>53 Wellington St, Hamilton East 3216 </span>
                  </div>
                  <div class="col-md-5">
                      <i class="ion-android-time"></i>
                      <span>Opening: Monday - Friday (9am to 4pm)</span>
                  </div>


              </div>
             </div>
             <div class="col-md-3">
                 <div class="social-icon padding-none padding-5 text-right">
                     <ul>
                         <li><a href="{{setting('facebook')}}" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                         <li><a href="{{setting('instragram')}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                         {{--<li><a href="{{setting('youtube')}}" target="_blank"><i class="fa fa-youtube-square"></i></a></li>--}}
                         {{--<li><a href="{{setting('vimeo')}}" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>--}}
                     </ul>
                 </div>
             </div>
         </div>
        </div>
    </div>

    <div class="top-bar-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        {{--<a href="index.html"><img src="{{asset('assets/waimariedemo/images/logo.jpg')}}" alt="logo" /></a>--}}
                        <a href="/">
                            <img src="{{asset(setting('logojpg'))}}" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                            <span class="logo-text">
                                {{setting('name')}}
                            </span>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="text-right">
                        <a href="/donate" class="doante-button orange-bg">
                            <span>MAKE A</span>
                            DONATION
                        </a>

                        <a href="/volunteer" class="doante-button logo-color">
                            <span>BECOME A</span>
                            VOLUNTEER
                        </a>
 </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-area ash-white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <nav id="easy-menu">
                        <div id="head-mobile">
                        </div>
                        <div class="button margin-none">
                            <i class="fa fa-bars"></i>
                        </div>

                        <ul class="menu-list">

                        @foreach(menus() as $menu)

                            <?php
                            $hasSub = !$menu->subMenus->isEmpty();
                            ?>

                            <li>
                                <a class="{{(strpos(Route::currentRouteName(), $menu->slug) != 'false') ? '' : 'active' }}"
                                   href="{{ url($menu->url) }}">{!! $menu->name !!}</a>

                                @if($hasSub=='True')

                                    <ul class="animenu__nav__child">
                                            @foreach($menu->subMenus as $childsubmenu)
                                            <li>
                                                    <a class=""
                                                       href="{{ url($childsubmenu->url) }}">{!! $childsubmenu->name !!}</a>
                                                </li>
                                        @endforeach
                                    </ul>

                                @endif


                            </li>


                            @endforeach
                        </ul>

                    </nav>
                </div>
                <div class="col-md-2">
                    <div class="text-right pdt15">



                        <button type="button" class="btn btn-default logo-color mobile-view lightbox" id="modal-click">
                            Programme Term 4 2020
                        </button>

                            <div class="top-search-input-wrap">
                                <i class="ion-android-close close-icon"></i>

                                    {{--<iframe src="http://waimarieham.wainet.org/wp-content/uploads/2020/10/Waimarie-schedule-term-4_2020.pdf" frameborder="0" width="100%" height="400px"></iframe>--}}

                                    <object type="application/pdf" data="http://waimarieham.wainet.org/wp-content/uploads/2020/10/Waimarie-schedule-term-4_2020.pdf" width="100%" height="100%" style="height: 100vh;">
                                        Programme 4</object>
                            </div>

                        </div><!--/.search-box -->
                    </div>
                </div>
            </div>
        </div>
</header>

{{--@push('scripts')--}}
    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function () {--}}
            {{--$('#select').chosen();--}}

        {{--});--}}

    {{--</script>--}}
{{--@endpush--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
