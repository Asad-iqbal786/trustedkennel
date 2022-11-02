<footer class="footer " style="border-top: 1px solid #D9D9D9;">
	<div class="footer-top section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-footer about">
						<div class="logo w-100 pt-2">
							<a href="index.html"><img src="{{asset('frontend/images/logo_final.png')}}" alt="#"></a>
						</div>
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-footer links">
						<h4>QUICK LINKS</h4>
						<ul>
							<li><a href="#">FIND A PUPPY</a></li>
							<li><a href="#">FIND A KENNEL</a></li>
							<li><a href="#">BREED QUESTIONNAIRE</a></li>
							<li><a href="#">RESCUE</a></li>
							<li><a href="#">DONATE</a></li>
								@if(Auth::guard('admin')->check())
									<li><a href="{{route('vendorDashboard')}}">kennel Dashboard</a></li>
									<li><a href="{{route('logoutvendor')}}">Logout</a></li>
									<a class="dropdown-item" href="{{route('logoutvendor')}}">kennel </a>
								@else
									<li><a href="{{route('loginPage')}}">kennel Login</a></li>
								@endif

								{{-- +15148858210 --}}
						
								@auth
									<li><a href="{{route('userIndex')}}">User Dashboard</a></li>
									<li><a href="{{route('addEditApplication')}}">Application</a></li>
									<li><a href="{{route('logout')}}">User Logout</a></li>
								@endauth

								@guest

									<li><a href="{{route('login')}}">Login</a></li>
								
								@endguest
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-footer links">
						<h4>ABOUT</h4>
						<ul>
							<li><a href="#">OUR STORY</a></li>
							<li><a href="#">WHY WE STAND OUT</a></li>
							<li><a href="#">NEWS</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">POLICIES</a></li>
							<li><a href="#">GET IN TOUCH</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-footer social">
						<h4>CONTACTS</h4>
						<div class="contact">
							<ul>
								<li>501 ELIZABETH DR,</li>
								<li>BEACONSFIELD, QC, H9W6C5, CANADA</li>
								<li>E-MAIL: </li>
								<li>INFO@TRUSTEDKENNELS.COM</li>
								<li>+1-514-885-8210</li>
								<li>INFO@TRUSTEDKENNELS.COM</li>
							</ul>
						</div>
						<ul>
							<li><a href="#">
								<img src="{{asset('frontend/images/fa.png')}}" alt="#" style="width: 29px;">
							</a></li>
							<li><a href="#">
								<img src="{{asset('frontend/images/in.png')}}" alt="#" style="width: 29px;">
							</a></li>
							<li><a href="#">
								<img src="{{asset('frontend/images/tw.png')}}" alt="#" style="width: 29px;">
							</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright bg-dark">
		<div class="container">
			<div class="inner">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="left">
							<p>Copyright © 2022 <a href="" target="_blank">webguro.com</a>  -  All Rights Reserved.</p>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="right">
							<img src="{{asset('frontend/images/payments.png')}}" alt="#">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>