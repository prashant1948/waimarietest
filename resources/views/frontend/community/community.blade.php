@extends('frontend.layouts.app')
@section('content')
    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>COMMUNITY GARDEN</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


<div class="causes-detail-body mt100 pdb90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="causes-detial">
                            {{--<img src="{{asset('assets/waimariedemo/images/waimarie/community-garden-1.jpg')}}" class="img-responsive" alt="causes">--}}
                        {{--<div class="causes-barfiller-item">--}}
                            {{--<div class="raised">--}}
                                {{--Friday--}}
                                {{--<span>9:30am – 12:30pm</span>--}}
                            {{--</div>--}}

                            {{--<div class="clear"></div>--}}

                        {{--</div>--}}
                        {{--<div class="">--}}
                            {{--<h3>Community Garden Group</h3>--}}
                            {{--<p>--}}
                                {{--After a very productive morning in the garden we enjoy a shared lunch prepared by our cook volunteers using produce from our community garden.--}}

                                {{--The community garden provides the community with a source of exercise, friendship, stimulation and relaxation.--}}
                            {{--</p>--}}
{{--<p>--}}
                                {{--Do you want to join the community garden group? complete the contact form <a href="https://docs.google.com/forms/d/e/1FAIpQLSfOYNrC6JisAdzESJxpAxmtdqSPzf3JQC7fgo4brGiMdUpH0A/viewform" target="_blank" class="active orange">(click here)</a>  we will contact you within a week.--}}
{{--</p>--}}
                        {{--</div>--}}
                    {{--</div><!--/.causes-detial-->--}}


                    {{--<div class="causes-detial-text pdt20">--}}
                        {{--<h4>Waimarie Community Gardens – History--}}
                        {{--</h4>--}}
{{--<p>Waimarie: Hamilton East Community House was officially opened on 7 December 2001.--}}

{{--</p>--}}

                        {{--<div class="row">--}}
                                {{--<div class="col-md-6">--}}
                        {{--<div class="pdb30 pdt20">--}}
                            {{--<img src="{{asset('assets/waimariedemo/images/waimarie/community-garden-2.jpg')}}" class="img-responsive" alt="causes">--}}
                        {{--</div>--}}
                                {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="pdb30 pdt20">--}}
                                    {{--<img src="{{asset('assets/waimariedemo/images/waimarie/community-garden-3.jpg')}}" class="img-responsive" alt="causes">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<p>We use organic Permaculture (Permanent Agriculture) gardening methods using lots of locally source recycled materials, organic principles, companion planting, rotational cropping, mulching, making our own compost, worm farming and the like.--}}
                        {{--</p>--}}

                        {{--<p>--}}
                            {{--In 2001 there were no gardens at all, just some scrubby conifers, the totara tree out the front and a few mangled bushes here and there. The guys chopped down old conifers along the boundary of the house and we began the first planting – creating a front garden and planting feijoa trees. Members of the public donated a variety of plants including red hot pokers, day lilies, hebes and irises.--}}
                        {{--</p>--}}

                        {{--<div class="row">--}}
{{--<div class="col-md-8">--}}
{{--<p>We wrote to HCC (Parks and Gardens) to ask for permission to created Community Gardens on the site next door known as the Symmington Reserve. The Symmington Reserve was bequeathed to the HCC in perpetuity after the death of the two Symmington sisters. The large wooden villa was removed and the site remained as a passive recreation area for many years.  On the 8th February 2002 we received a favourable reply from Janet Sexton to say we could create our gardens “at the grace and favour of Council, granted on a trial basis for one year after which it will be reviewed.” There were some conditions attached such as not removing any trees or erecting any structures on the reserve. On 25 July 2003 Janet gave further approval to continue the Gardens and by this time we had taken over the entire maintenance of the Reserve including weeding the boundary edges, mowing and removal of any plant pests. We decide to take over the boundary edges to avoid spraying and maintain our organic principles and practices.</p>--}}
{{--</div>--}}

                        {{--<div class="col-md-4">--}}
                            {{--<div class="image">--}}
                                {{--<img src="{{asset('assets/waimariedemo/images/waimarie/community-garden-4.jpg')}}" class="img-responsive" alt="causes">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row pdt20">--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="image">--}}
                                    {{--<img src="{{asset('assets/waimariedemo/images/waimarie/community-garden-5.jpg')}}" class="img-responsive" alt="causes">--}}
                                {{--</div>--}}
                                {{--<div class="image">--}}
                                    {{--<img src="{{asset('assets/waimariedemo/images/waimarie/community-garden-6.jpg')}}" class="img-responsive" alt="causes">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-md-8">--}}
                                {{--<p>--}}
                                    {{--Since then we have slowly developed the garden sourcing funding from Envirofund (Hamilton City Council) and pub charities for special projects (Lion Foundation for the irrigation system, Trust Waikato for the garden shed).  We have also built up a list of suppliers for sourcing free recycled materials such as timber, felt and other materials. Members of the public have donated timber, bricks, plants, woolen carpet and under felt, bulbs and other bits and pieces. Garden plots were built first and later we developed the herb spirals, orchard area, paved circle, bird boxes and so on.--}}
                                {{--</p>--}}
                                {{--<p>--}}
                                    {{--The philosophy behind the Waimarie Community Gardens is a belief in the therapeutic benefits of contact with nature.  Organic and Permaculture methods work with nature to create a sustainable healthy garden ecosystem. We believe that the social benefits of gathering together to garden, prepare and eat a meal together at the end of the morning promotes health and well being. New skills are learnt informally in situ. Many of the gardeners are recovering from mental illness. Over time we have observed gardeners grow in confidence from learning new skills, meeting new people and developing friendships. Many benefit from improved and healthier lifestyles. Some gardeners create their own garden plots at home and/or move into paid employment.--}}
                                {{--</p>--}}
                                {{--<p>--}}
                                    {{--Garden produce is used for healthy communal lunches and surplus crops are taken home by the gardeners. Sometimes members of the community make donations for vegetables.  Vegetables are also sometimes given to people in need.--}}
                                {{--</p>--}}
                            {{--</div>--}}

                        {{--</div>--}}


                    {{--</div>--}}


                    {{--<p class="pdt40 funders-text">Jane Landman (Co-ordinator –Waimarie: Hamilton East Community House) 15 March, 2005--}}

                    {{--</p>--}}
                        <div class="row pdb40">

                            <div class="tz-gallery text-center">

                                <div class="row">

                                    @foreach($commimage as $commimg)
                                        <div class="col-sm-6 col-md-4">
                                            <a class="lightbox" href="{{asset($commimg->image->path)}}">
                                                <img src="{{asset($commimg->image->path)}}" alt="{{$commimg->title}}" class="img-gallery">
                                            </a>
                                        </div>
                                    @endforeach

                                </div>

                            </div>
                        </div>

                        @foreach($comdetails as $comdetail)
                        <p>
                            {!! $comdetail->content !!}
                        </p>
                            @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection