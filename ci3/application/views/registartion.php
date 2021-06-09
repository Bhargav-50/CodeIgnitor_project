	<!-- sign up-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Create your account</h3>  
			<div class="login-body">
				<form action="#" method="post">
					<input type="text" class="user" name="uname" placeholder="Enter your Name" required="">
					<input type="text" class="user" name="email" placeholder="Enter your email" required="">
					<input type="password" name="pass" class="lock" placeholder="Password" required="">
                    <input type="text" name="mobile" placeholder="Your Mobile Number" required="">
					<input type="submit"  value="Sign Up ">
				</form>
			</div>  
			<h6>Already have an account? <a href="<?php  echo base_url(); ?>mycontroller/signin">Login Now »</a> </h6>  
		</div>
	</div>
	<!-- //sign up-page --> 