@extends('frontend.layouts.app')
@section('content')

	<section class="banner-area causes-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner-title">
						<h1>Contact
						</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<span class="messages-text active orange"> {!! Session::has('msg') ? Session::get("msg") : '' !!} </span>

	<div class="donate-page-content pdb90">
		<div class="container">

			<div class="row">
				<div class="col-md-5">
					<div class="pdt80 pdb40">
						<h3>We'd love to hear from you</h3>
					</div>

					<div class="donate-form">
						<form action="{{route('contact.contactrequest')}}"
							  method="post" class="form-newsletter">
							@csrf
							<div class="forms">

								<input type="text" name="name" autocomplete="off" required/>
								<label for="name" class="label-name">
			<span class="content-name">
				Name
			</span>
								</label>

							</div>

							<div class="forms">

								<input type="number" name="phonenumber" autocomplete="off" required/>
								<label for="number" class="label-name">
			<span class="content-name">
				Phone Number
			</span>
								</label>

							</div>


							<div class="forms">

								<input type="text" name="email" autocomplete="off"/>
								<label for="email" class="label-name">
			<span class="content-name">
				Email(Optional)
			</span>
								</label>

							</div>


							<div class="comment-box  pdt20">
								<div class="single-input-box">
									<textarea class="form-control" name="message" placeholder="YOUR MESSAGE ......." required></textarea>
								</div>

							</div>

							<button type="submit" class="sune-btn orange-bg fl-right">SUBMIT</button>

						</form>



					</div>

				</div>
<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="pdt80 pdb40">
						<h3>Reach out to us directly</h3>
					</div>

					<div class="row">
						<div class="col-md-6">
					<div class="collection-rate">
						<div class="fund">
							<div class="icon">
								<i class="ion-ios-location"></i>
							</div>
							<div class="text">
								<span>53 Wellington St, <br>Hamilton East 3216 </span>
							</div>
						</div>
					</div>
						</div>

						<div class="col-md-6">
							<div class="collection-rate pdt8">
								<div class="fund">
									<div class="icon">
										<i class="ion-ios-telephone"></i>
									</div>
									<div class="text">
										<span>(07) 858 3453</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="map-responsive">
						<iframe src="https://maps.google.com/maps?q=%2053%20Wellington%20St%2C%20Hamilton%20East%203216%20&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				<div class="col-md-1"></div>

			</div>
		</div>
		</div>
	</div>

@endsection
