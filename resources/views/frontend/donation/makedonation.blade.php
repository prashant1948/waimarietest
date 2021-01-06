@extends('frontend.layouts.app')
@section('content')
    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Donation
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner-area ash-white-bg pdb80 empty-header">
        <div class="container">

            <div class="urgent-causes pdb20">

                @foreach($donations as $donation)

                <p>
               {!! $donation->content !!}
           </p>

                    @endforeach

            </div>


            {{--<div class="urgent-causes pdt20">--}}
                {{--<h3>--}}
                    {{--Bequests – Leave a lasting legacy in your community!--}}

                {{--</h3>--}}

                {{--<p>--}}
                    {{--Waimarie is committed to providing relevant, cost effective, easily accessible services to the local community.  By leaving a gift in your will, you will be supporting your local community and ensuring ongoing access to much needed community resources. You will be enhancing community well-being and helping make South East Hamilton a more integrated, vibrant and resilient place, with residents who are engaged, empowered, informed, and respectful of each other.--}}
                {{--</p>--}}

                {{--<p>--}}
                    {{--If you would like more information about how to leave a bequest to Waimarie please contact us.--}}
                {{--</p>--}}

            {{--</div>--}}
        </div>
    </section>


    <div class="donate-page-content pdb90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading section-padding">
                        <h2><span>our contribution as</span>
                            RELIEF FOR NEEDY</h2>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-7">
                    <div class="donate-form">

                        <form action="{{route('make.payment')}}"
                              method="post" class="form-newsletter">
                            @csrf

                                                        <div class="single-input-box single-input-boxs">
                            <input class="form-control" placeholder="YOUR DONATION AMOUNT* ......."
                            type="number" name="donationamount" id="donationamount">
                            </div>
                            <div class="comment-box pdt5">
                            <h4>PERSONAL INFO</h4>
                            <div class="row">
                            <div class="col-sm-6 name-parent">
                            <div class="single-input-box">
                            <input class="form-control" placeholder="YOUR FIRST NAME* ......." type="text" name="firstname" required="required">
                            </div>
                            </div>
                            <div class="col-sm-6 email-parent">
                            <div class="single-input-box">
                            <input class="form-control" placeholder="YOUR SECOND NAME ......." type="text" name="secondname">
                            </div>
                            </div>
                            </div>
                            <div class="single-input-box">
                            <input class="form-control" placeholder="YOUR EMAIL ......." type="text" name="email">
                            </div>
                            <div class="single-input-box">
                            <input class="form-control" placeholder="YOUR PHONE NUMBER* ......."
                            type="number" name="phone" required="required">
                            </div>
                            <div class="single-input-box">
                            <textarea class="form-control" name="message" placeholder="YOUR MESSAGE ......."></textarea>
                            </div>
                            </div>
                            <div class="payment-method pdt20 pointer-none">
                            <h4>PAYMENT METHOD</h4>
                            <div class="donate-item one-time">
                            <input type="radio" checked>
                            <label for="pay-pal-payment">PAY-PAL</label>
                            </div>
                            <div class="clear"></div>
                            </div>

                            <button type="submit" class="sune-btn orange-bg" onclick="return IsEmpty();">DONATE <i class="fa fa-heart"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">

                    @foreach($donationformdetails as $donationformdetail)

                    <div class="causes-detial">
                            <img src={{asset($donationformdetail->image->path)}} class="img-responsive" alt="causes">

                        <div class="causes-header pdt20">
                            <h4 class=" pdb10">{!! $donationformdetail->title !!}</h4>
                            <p>
                                {!! $donationformdetail->content !!}
                            </p>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="share-social-media">
                                        <span>SHARE ON:</span>
                                        <ul class="colorfull-social-icon ">
                                            <li><a href="#" class="facebook-icon"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter-icon"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="google-icon"><i class="fa fa-google"></i></a></li>
                                            <li><a href="#" class="linked-icon"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.causes-detial-->
                        @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection