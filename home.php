<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE-edge"/>
	<title>Personal Website</title>

	 <link rel="stylesheet" href="./style.css">
	 <link rel="manifest" href="manifest.webmanifest">
     <link rel="apple-touch-icon" href="images/r-192.png">

</head>
		
	<body>
		<div>
			<br>
		</div>
		
		<header>
			<div class= "logo-container">
				<a href="./home.php"><img src="images/rja.png" alt="logo"></a>
			</div>
			<nav>
				<ul class ="nav-links">
					<div class="dropdown">
					<a href="./home.php";><button class="dropbtn" id="current"; >Me<i class="fa fa-caret-down"></i> </button>
						<div class="dropdown-content">
							<a href="#skills"> Skillset </a>
							<a href="#Music">Music</a>
							<a href="#Movies">Movies</a>
							<a href= "#Contact">Contact</a>	
						</div>
					</div>
 					<li ><a class="nav-link" href="gallery.php">Gallery</a></li>
 					<li ><a class="nav-link" href="logout.php">Log-out</a></li>
 				</ul>

			</nav>
			
		</header>

		<main>
			<section class="presentation">
				<div class="introduction">
					<div class="intro-text">
						<h1 style="text-align: center;">Roselyn Joy Aquino</h1>
						<p>
							21 years of age. <br>
							 A student of Bachelor of Science in Information Technology Major in Web Developing <br> at Laguna State Polytechnic University.
							<br> Photographer wannabe. 
						</p>
						<br>
						<p> One of my hobbies is taking photos. Even I don't have a DSLR, and I just have a smartphone with mediocre camera, I still use it to capture moments. </p>
					</div>
					
				</div>
					<!---<img src="./captured/sky3.jpg">-->
					<div class="slider">
						<div class="slides">

					<input type="radio" name="radio-btn" id="radio1">
					<input type="radio" name="radio-btn" id="radio2">
					<input type="radio" name="radio-btn" id="radio3">
					<input type="radio" name="radio-btn" id="radio4">
					<input type="radio" name="radio-btn" id="radio5">

							<div class="slide first">
								<img src="./images/1-min.jpg" alt="">
							</div>
							<div class="slide">
								<img src="./images/2-min.jpg" alt="">
							</div>
							<div class="slide">
								<img src="./images/6-min.jpg" alt="">
							</div>
							<div class="slide">
								<img src="./images/9-min.jpg" alt="">
							</div>
							<div class="slide">
								<img src="images/4-min.jpg" alt="">
							</div>

								<div class="navigation-auto">
									<div class="auto-btn1"></div>
									<div class="auto-btn2"></div>
									<div class="auto-btn3"></div>
									<div class="auto-btn4"></div>
									<div class="auto-btn5"></div>
								</div>
						</div>
					
						<div class="navigation-manual">
							<label for="radio1" class="manual-btn"></label>
							<label for="radio2" class="manual-btn"></label>
							<label for="radio3" class="manual-btn"></label>
							<label for="radio4" class="manual-btn"></label>
							<label for="radio5" class="manual-btn"></label>
						</div>
		
				</div>


			</section>

<!---social media link--->

		<section id="skills">
			<div class="headerskills">
					<br>
				<h1>Skillset</h1> <br>
				<h3>Programming</h3>
					<div class="container">
						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<img src="./images/html.png" class="skill-icon">
								</div>
								<h3> HTML 5 </h3>
						</div>
						<progress id="p"  value="50" max="100"> </progress>
						<label for="p" id="label">50%</label>
						</div>

						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<img src="./images/csharp.png" class="skill-icon">
								</div>
								<h3> C# </h3>
						</div>
						<progress id="p"  value="60" max="100"> </progress>
						<label for="p" id="label">60%</label>
						</div>

						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<img src="./images/java.png"class="skill-icon">
								</div>
								<h3> Java</h3>
						</div>
						<progress id="p"  value="40" max="100"> 40% </progress>
						<label for="p" id="label">40%</label>
						</div>
					</div>
				</div>

				<div class="headerskills">
				<h3>Multimedia/Design</h3>
					<div class="container">
						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<img src="./images/photoshop.png" class="skill-icon">
								</div>
								<h3> Photoshop </h3>
						</div>
						<progress id="p"  value="60" max="100"></progress>
						<label for="p" id="label">60%</label>
						</div>

						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<img src="./images/lr.png" class="skill-icon">
								</div>
								<h3> Lightroom </h3>
						</div>
						<progress id="p"  value="60" max="100"></progress>
						<label for="p" id="label">60%</label>
						</div>

						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<img src="./images/sony.png"class="skill-icon">
								</div>
								<h3> Sony Vegas </h3>
						</div>
						
						<progress id="p" value="50" max="100"></progress>
						<label for="p" id="label">50%</label>
						</div>
					</div>
				</div>

		</section>
<div><br><br></div>
				<br><br><br><br><br><br><br><br><br><br><br><br>
		<section id="Music">
			<h1 style="text-align: center;"> Favorite Music</h1>
			<div class="headerskills">
					<br>
					<div class="container">
						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<a href="https://www.youtube.com/watch?v=mWRsgZuwf_8"><img src="./images/demons.jpg" class="album-icon"></a>
								</div>
								<h4> Demons - Imagine Dragons </h4>
						</div>
							
						</div>

						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<img src="./images/NeedYouNow.jpg" class="album-icon">
								</div>
								<a href="https://www.youtube.com/watch?v=eM213aMKTHg"><h4> Need You Now - Lady Antebellum</h4></a>
							</div>
						</div>

						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<a href="https://www.youtube.com/watch?v=psuRGfAaju4">	<img src="./images/Fireflies.jpg"class="album-icon"></a>
								</div>
								<h4> Fireflies - Owl City</h4>
							</div>
						</div>

						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<img src="./images/levitating.png" class="album-icon">
								</div>
								<a href="https://www.youtube.com/watch?v=TUVcZfQe-Kw"><h4> Levitating - Dua Lipa</h4></a>
							</div>
						</div>

						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<img src="./images/Traitor.jpg" class="album-icon">
								</div>
								<a href="https://www.youtube.com/watch?v=6tsu2oeZJgo"><h4> Traitor - Olivia Rodrigo </h4></a>
							</div>
						</div>

						<div class="skill-box">
							<div class="skill-title">
								<div class="img">
									<img src="./images/Arthur.jpg" class="album-icon">
								</div>
								<a href="https://www.youtube.com/watch?v=VoBxqnCi6rQ"><h4> Take All the Love - Arthur Nery </h4></a>
							</div>
						</div>



					</div>
				</div>

		</section>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		<section id="Movies">
			<h1 style="text-align: center;"> Favorite Movies</h1>
				<br>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/LHzwwYcrKks" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<br>
					<p style="text-align: center; font-size: 20px;"> Friendzone(2019) - starring Baifern Pimchanok & Naphat Siangsomboon ???</p>
				<br>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/TcMBFSGVi1c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<br>
					<p style="text-align: center; font-size: 20px;"> Avengers: Endgame (2019)</p>
				<br><br><br><br><br><br><br><br><br><br><br><br>
		</section>
				<br><br><br><br><br><br><br><br><br><br>
			<section id="Contact">
				<footer id="colophon" class="site-footer" role="contentinfo">
					  <div class="social-wrapper">
					  	<h5 style="text-align: center;"> Contact me in my socials!</h5>
					    <ul>
					      <li>
					        <a href="https://twitter.com/roselynxjoy" target="_blank">
					          <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png"alt="Twitter Logo" id="twitter-icon"></a>
					      </li>
					      <li>
					        <a href="https://www.instagram.com/itsrowslynjoy" target="_blank">
					          <img src="https://www.mchenryvillage.com/images/instagram-icon.png" alt="Instagram Logo" id="instagram-icon"></a>
					      </li>
					      <li>
					        <a href="https://www.facebook.com/rjlovesbooks" target="_blank">
					          <img src="http://www.iconarchive.com/download/i54037/danleech/simple/facebook.ico" alt="Facebook Logo" id="facebook-icon"></a>
					      </li>
					     
					    </ul>
					  </div>

  <nav class="footer-nav" role="navigation">
    <p>Copyright &copy; 2021-
      <?php echo date("Y"); ?> All rights reserved.</p>
  </nav>
</footer>
<!-- #colophon -->

			</section>



<script type="text/javascript">
	var counter = 1;
	setInterval(function(){
		document.getElementById('radio' + counter).checked = true;
		counter++;
		if(counter>5){
			counter = 1;
		}
	}, 5000);
</script>
				

		</main>


<script src="index.js"></script>
				

	</body>




</html>
