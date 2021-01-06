@extends('frontend.layouts.app')
@section('content')
    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Scholarships</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <section class="partner-area ash-white-bg pdb80" id="SAM – Sport, Music & Cultural Fund">
        <div class="container">


            <div class="section-heading section-padding">
               @foreach($scholarshipdescriptionsamfunds as $scholarshipdescriptionsamfund)
                <h2>
                    {!! $scholarshipdescriptionsamfund->title !!}
                    <span class="pdt20">                        {!! $scholarshipdescriptionsamfund->meta_description !!}
                    </span>
                </h2>
                   @endforeach
            </div>

            <div class="row pdb20">
            <div class="col-md-12">
                @foreach($samfunds as $samfund)
                    @if($loop->first)
                        <div id="image-1" class="tab-pane fade in active">
                            <img src="{{asset($samfund->image->path)}}" alt="shop item" class="img-responsive">
                        </div>
                    @endif
                @endforeach


                <div class="tz-gallery">

                    <div class="row">

                        <div class="service-carousel">
                            @foreach($samfunds as $samfund)
                                <div class="col-md-4" style="width: 100%">
                                    <a class="lightbox" href="{{asset($samfund->image->path)}}">
                                        <img src="{{asset($samfund->image->path)}}" alt="{{$samfund->title}}"
                                             class="img-gallery img-services">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{--</div>--}}
                </div>
                {{--@endif--}}

            </div>

            </div>

            <div class="urgent-causes pdb20">
                @foreach($scholarshipdescriptionsamfunds as $scholarshipdescriptionsamfund)

                <p>
    {!! $scholarshipdescriptionsamfund->content !!}
</p>
                    @endforeach

            </div>
        </div>
    </section>


        <section class="partner-area pdb80" id="Scholarships University of Waikato.">
        <div class="container">
            <div class="section-heading section-padding">
                @foreach($scholarshipdescriptionwaikatos as $scholarshipdescriptionwaikato)
                    <h2>
                        {!! $scholarshipdescriptionwaikato->title !!}
                        <span class="pdt20">                        {!! $scholarshipdescriptionwaikato->meta_description !!}
                    </span>
                    </h2>
                @endforeach
            </div>


            <div class="row pdb20">
                <div class="col-md-12">
                    @foreach($waikatos as $waikato)
                        @if($loop->first)
                            <div id="image-1" class="tab-pane fade in active">
                                <img src="{{asset($waikato->image->path)}}" alt="shop item" class="img-responsive">
                            </div>
                        @endif
                    @endforeach


                    <div class="tz-gallery">

                        <div class="row">

                            <div class="service-carousel">
                                @foreach($waikatos as $waikato)
                                    <div class="col-md-4" style="width: 100%">
                                        <a class="lightbox" href="{{asset($waikato->image->path)}}">
                                            <img src="{{asset($waikato->image->path)}}" alt="{{$waikato->title}}"
                                                 class="img-gallery img-services">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{--</div>--}}
                    </div>
                    {{--@endif--}}

                </div>

            </div>


            <div class="urgent-causes pdb20">
                @foreach($scholarshipdescriptionwaikatos as $scholarshipdescriptionwaikato)

                <p>
                    {!! $scholarshipdescriptionwaikato->content !!}
                </p>

                    @endforeach
            </div>

        </div>
    </section>
@endsection