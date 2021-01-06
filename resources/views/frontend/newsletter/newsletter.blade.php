@extends('frontend.layouts.app')

@section('content')
    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Newsletter
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (session()->has('success'))
        <div class="alert alert-success">
            @if(is_array(session('success')))
                <ul>
                    @foreach (session('success') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @else
                {{ session('success') }}
            @endif
        </div>
    @endif


    <section class="partner-area pdb80">
        <div class="container">

            <div class="section-heading section-padding pdb55 pages-style-heading">
                <h1>Subscribe to Waimarie news
                </h1>
                <p>* indicates required
                </p>
            </div>

            <form action="{{route('newsletter.newsletterrequest')}}" method="post" class="form-newsletter">
                @csrf
                <div class="row">
                    <div class="email-parent">
                        <div class="single-input-box">
                            <input type="email" id="email" required="required" name="email" class="form-control" placeholder="EMAIL ADDRESS* .......">
                        </div>
                    </div>
                    <div class="name-parent">
                        <div class="single-input-box">
                            <input type="text" id="firstname" required="required" name="firstname" class="form-control" placeholder="FIRST NAME* .......">
                        </div>
                    </div>
                    <div class="name-parent">
                        <div class="single-input-box">
                            <input type="text" id="lastname" name="secondname" class="form-control" placeholder="LAST NAME .......">
                        </div>
                    </div>

                    <div class="categorie-filter pdt10">
                        <h4>YOU ARE</h4>
                        <div class="checkbox-item">
                            <input value="Community member" id="community-member" name="communitycheck" type="checkbox">
                            <label for="community-member">Community member</label><br>
                            <input value="Organisation / Partner" id="organisation-partner" name="organisationcheck" type="checkbox">
                            <label for="organisation-partner">Organisation / Partner</label><br>
                            <input value="Volunteer" id="volunteer" name="volunteercheck" type="checkbox">
                            <label for="volunteer">Volunteer</label><br>
                            <input value="Funder" id="funder" name="fundercheck" type="checkbox">
                            <label for="funder">Funder</label><br>
                        </div>
                    </div>

                    <input type="submit" value="SUBSCRIBE" class="sune-btn" id="submitButton">

                    <div class="col-lg-12 text-center">
                        <div id="alert-msg" class="alert-msg text-center"></div>
                    </div>

                </div>

            </form>


        </div>
    </section>

    <section class="partner-area pdb80 ash-white-bg">

    <div class="container pdt10">
        <div class="banner-title">
            <h2>Newsletter PDF's
            </h2>
        </div>

        @foreach($downloadspdfs as $downloadspdf)
            <iframe src="downloads/{{$downloadspdf->path}}"
                    frameborder="0" width="100%" height="400px"></iframe>
            <p class="section-heading">
                {!! $downloadspdf->title !!}
            </p>
        @endforeach

<div class="row">
    <div class="banner-title">
        <h2>Newsletter Images
        </h2>
    </div>
        @foreach($downloadsimages as $downloadsimage)

            <div class="tz-gallery">

                <div class="row">

                    <div class="service-carousel">
                            <div class="col-md-4" style="width: 100%">
                                <a class="lightbox" href="downloads/{{($downloadsimage->path)}}">
                                    <img src="downloads/{{($downloadsimage->path)}}" alt="{{$downloadsimage->title}}"
                                         class="img-responsive">
                                </a>
                                <p class="section-heading">
                                    {!! $downloadsimage->title !!}
                                </p>
                            </div>
                    </div>
                </div>

                {{--</div>--}}
            </div>


            @endforeach
    </div>
</div>

    </section>


    {{--<div class="container">--}}
        {{--<iframe src="{!! $downloadspdf !!}" frameborder="0" width="100%" height="400px"></iframe>--}}
    {{--</div>--}}
    {{--<section class="partner-area ash-white-bg pdb80">--}}
        {{--<div class="container">--}}

            {{--<div class="section-heading section-padding pdb55 pages-style-heading">--}}
                {{--<h1>Newsletter Archived--}}
                {{--</h1>--}}
            {{--</div>--}}

            {{--<div class="row">--}}
                {{--<div class="col-sm-6 col-md-4">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<img src="" alt="Newsletter Archive">--}}
                        {{--<div class="caption">--}}
                            {{--<h3>Term 3' 19 newletter</h3>--}}
                            {{--<p>P1</p>--}}
                            {{--<p><a href="http://waimarieham.wainet.org/wp-content/uploads/2019/07/Waimarie-newsletter-T3-19-P1-1.pdf" class="btn btn-primary" role="button">Button</a>--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}

        {{--</div>--}}

    {{--</section>--}}
@endsection