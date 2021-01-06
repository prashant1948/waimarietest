@extends('frontend.layouts.app')
@section('content')

	<section class="banner-area causes-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner-title">
						<h1>BECOME A VOLUNTEER
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
				<div class="col-md-6">
					<div class="pdt80 pdb40">
						<h3>Please fill the Form</h3>
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
									<textarea class="form-control" name="message" placeholder="WHY DO YOU WANT TO JOIN? ......." required></textarea>
								</div>

							</div>

							<button type="submit" class="sune-btn orange-bg fl-right">SUBMIT</button>

						</form>



					</div>

				</div>
				<div class="col-md-6">
					<div class="pdt80 pdb40">
						<h3>VOLUNTEERS</h3>
					</div>

					<img src="" alt="" class="img-responsive">

			</div>
		</div>
		</div>
	</div>

@endsection
