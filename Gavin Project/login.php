<?php 

	session_start();
	
	if(isset($_SESSION['userlogin'])){
		header("Location: index.php");
	}


?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> MealMap </title>
    <!--- Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--- Scroll reveal CDN ---->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	header>
        <div class="container">
            <nav class="nav">   
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="index.html" class="logo1"><img src="logo.png" alt=""> </a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="browse.html" class="nav-link">Browse</a>
                    </li>
                    <li class="nav-item">
                        <a href="nearme.html" class="nav-link">Near Me</a>
                    </li>
                    <li class="nav-item">
                        <a href="res.html" class="nav-link">My Reservations</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
	
	
	section class="hero" id="hero">
      <div class="container">
      </div>
  </section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="img/logo.png" class="brand_logo" alt="Programming Knowledge logo">
				</div>
			</div>	
			<div class="d-flex justify-content-center form_container">
				<form>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
						<input type="text" name="username" id="username" class="form-control input_user" required>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input type="password" name="password" id="password" class="form-control input_pass" required>
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
							<label class="custom-control-label" for="customControlInline">Remember me</label>
						</div>
					</div>
				
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="button" name="button" id="login" class="btn login_btn">Login</button> 
			</div>
			</form>
			<div class="mt-4">
				<div class="d-flex justify-content-center links">
					Don't have an account? <a href="registration.php" class="ml-2">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>


<footer>
        <div class="container">
           <div class="back-to-top">
               <a href="#hero"><i class="fas fa-chevron-up"></i></a>
           </div>
           <div class="footer-content">
               <div class="footer-content-about animate-top">
                <h4>About MealMap</h4>
                   <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                   <p>  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
               </div>
               <div class="footer-content-divider animate-bottom">
                   <div class="social-media">
                       <h4>Follow Along</h4>
                          <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                             </li>
                          </ul>
                      </div>
                      <div class="newsletter-container">
                        <h4>Newsletter</h4>
                        <form action="" class="newsletter-form">
                            <input type="text" class="newsletter-input" placeholder="Your email address ...">

                            <button class="newsletter-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                      </form>
                  </div>
              </div>
          </div>
    </footer>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var username = $('#username').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {username: username, password: password},
				success: function(data){
					alert(data);
					if($.trim(data) === "1"){
						setTimeout(' window.location.href =  "index.php"', 1000);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});

		});
	});
</script>
</body>
</html>
