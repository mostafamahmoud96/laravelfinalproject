@extends('app')
@section ('content')
		<header id="head" class="secondary">
            <div class="container">
                    <h1>Contact Us</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
                </div>
    </header>
	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						
						<form class="modal-content animate" action="form.php" method="post" enctype="multipart/form-data">

							<div class="container">
								
								<label for="uname"><b>Email</b></label>
								<input type="text" placeholder="Enter Email" name="email" required>
						
								<label for="phone"><b>phone</b></label>
								<input type="number" placeholder="Enter phone" name="phone" required>
						  
								<label for="psw"><b>Subject</b></label>
								<input type="text" placeholder="Enter subject" name="psw" required> 
						
								<div class="form-group">
									<label style="padding-bottom:9px"> Your Message</label>
									<textarea class="form-control" id="message" placeholder="Write you message here..." style="height:130px; width: 46%;"></textarea>
								</div>

								<div class="container-login100-form-btn conbtn">
									<button class="login100-form-btn lbtn">
										Send message
									</button>
								</div>
								  
								<!-- <button type="submit" name="submit">Login</button> -->
								
							  </div>
						  
							  <div class="cancle" style="background-color:#f1f1f1; height: 50px;"></div>
							
							</form>
					       </div>
				
							<div class="col-md-4 con-info">
								<h2 class="section-title">Office Address</h2>
								<div class="contact-info">
									<h5>Address</h5>
									<p>5th Street, Carl View - United States</p>
									
									<h5>Email</h5> 
									<p>info@webthemez.com</p>
									
									<h5>Phone</h5> 
									<p>+09 123 1234 123</p> <br><br>
									
								</div>
							
							<a href="#"><img src="assets/images/map2.png" width="300" height="175" class="im-info"></a>
						</div> 						
					</div>
				</div>
			</div>
	<!-- /container -->

			@endsection