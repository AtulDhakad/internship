<!DOCTYPE HTML>

<?php
include('./sendgrid/vendor/autoload.php');
$resmsg='';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_POST["submit"]) && $_POST["submit"]=='Send Message'){

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];;
    $subject =   $_POST["subject"];
    $message = $_POST["message"];

  $lonReqTest ='<body>
  <div style="width: 600px;margin: 0 auto;border: 1px solid #ccc;float: none; font-family:Arial, Helvetica, sans-serif;">
      <div style="background:#867478; display:inline-block; width:580px; padding:10px 10px;">
    <h1 style="float: left;color: #fff;margin: 0;padding: 0;font-size: 22px;text-transform: capitalize; margin-left: 175px;"><img style="color:#bc2024 !important; width: 189px;" src="https://raletta.in/images/logo.png" ></h1>
        </div>
        <div style="background:#fff; display:inline-block; width:560px; padding:20px;">
      <h3 style="text-align: center;" >Raletta Technology</h3>
      <hr>
    <div>
      <strong style="text-align: center;line-height: 26px;font-size: 15px;" >Full Name : </strong><span style="color:#666464;">'.$fname.' '.$lname.'</span><br>

     <strong style="text-align: center;line-height: 26px;font-size: 15px;" >Email Id: </strong><span style="color:#666464;">'.$email.'</span><br>
    <strong style="text-align: center;line-height: 26px;font-size: 15px;" >Subject : </strong><span style="color:#666464;">'.$subject.'</span><br>

     <strong style="text-align: center;line-height: 26px;font-size: 15px;" >Message : </strong><span style="color:#666464;">'.$message.'</span><br>

     <br><br>
         <div> <a style="background: #B70C30;
        width: 300px;
    color: white;

    border: 12px solid #B70C30;
    border-radius: 10px;
    letter-spacing: 2px;
    font-size: 20px;margin-left: 185px; text-decoration:none; " href="https://raletta.in/" target="_blank">GO TO WEBSITE</a> </div>

        </div>
       </div>

    </div>
</body>';


$key ="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";
$sendgridemail = new \SendGrid\Mail\Mail();
$sendgridemail->setFrom($email,"Raletta Technology");
$sendgridemail->setSubject($subject);
$sendgridemail->addTo('atul.vits02@gmail.com');//jobs@raletta.in
$sendgridemail->addContent("text/plain", "Raletta Technology");
$sendgridemail->addContent("text/html",$lonReqTest);
$sendgrid = new \SendGrid($key);
$testemai = $sendgrid->send($sendgridemail);

 if($testemai){

   $resmsg = "send email successfully";
 }else{

   $resmsg = "error message";
 }



  }

  }



?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Internship In Indore</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=">Internship In Indore by Raletta - Raletta Technology provides digital marketing, Content Writing, SEO, Software Testing, 2d animation, internship in Indore. Send your resume for internship and jobs in Indore." />
	<meta name="keywords" content=">Internship In Indore" />
	<meta name="author" content="Raletta.in" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- icon style -->

	<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body  data-spy="scroll" data-target=".navbar" data-offset="50">

	<div class="fh5co-loader"></div>

	<div id="page">
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
      <nav class="navbar navbar-inverse navbar-fixed-top">
              <ul class="nav navbar-nav" id="myTopnav" >
                <a href="#fh5co-about"><strong>AboutUs</strong></a>
                <a href="#fh5co-features"><strong>Internship Programs</strong></a>
                <a href="#fh5co-started"><strong>Hire Me</strong></a>
                <a href="#fh5co-consult"><strong>ContactUs</strong></a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                 <i class="fa fa-bars"></i>
              </ul>
        </nav>

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url(images/user-3.jpg);"></div>
							<h1><span>Internship in Indore by Raletta</span></h1>
							<h3><span>Digital Marketing / Software Testing / Content Writing / 2D Animation </span></h3>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="https://twitter.com/RalettaCS"><i class="icon-twitter2"></i></a></li>
									<li><a href="https://www.facebook.com/RalettaTechnology/"><i class="icon-facebook2"></i></a></li>
									<li><a href="https://www.linkedin.com/company/13241332/"><i class="icon-linkedin2"></i></a></li>
									<li><a href="https://www.instagram.com/raletta_"><i class="icon-instagram2"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>About Us</h2>
          <?php
          if($resmsg!=''){

            echo $resmsg;

          }

          ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Full Name:</span><span class="second-block">Raletta Technology</span></li>
						<li><span class="first-block">Phone:</span><span class="second-block">+91 8888839939</span></li>
						<li><span class="first-block">Email:</span><span class="second-block">jobs@raletta.in</span></li>
						<li><span class="first-block">Website:</span><span class="second-block">https://www.raletta.in</span></li>
						<li><span class="first-block">Address:</span><span class="second-block">142/2 GNT Market, MR6, Indore, India-452002</span></li>
					</ul>
				</div>
				<div class="col-md-8">
					<h2>Hello There!</h2>
					<p>We Make IT Happen.Raletta Technology is a premier dot com parent company which has diversified internet products under its umbrella.>
					<p>Browse through all vacant positions at Raletta, and pick the challenge that excites you the most. We are open for internships in following domains</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://twitter.com/RalettaCS"><i class="icon-twitter2"></i></a></li>
							<li><a href="https://www.facebook.com/RalettaTechnology"><i class="icon-facebook3"></i></a></li>
							<li><a href="https://www.linkedin.com/company/13241332/"><i class="icon-linkedin2"></i></a></li>
							<li><a href="https://www.instagram.com/raletta_"><i class="icon-instagram2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-resume" class="fh5co-bg-color">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Internship In Indore</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline">
						<li class="timeline-heading text-center animate-box">
							<!-- <div><h3>Our Internship Programs</h3></div> -->
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-genius"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Search Engine Optimization (SEO)</h3>
									<!-- <span class="company">Company Name - 2016 - Current</span> -->
								</div>
								<div class="timeline-body">
									<p>You’ll gain valuable insights about various search engines, website rankings and white-hat techniques.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-paintbrush"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Market Research</h3>
								<div class="timeline-body">
									<p>You'll gain valuable insights about the local market for various products and services that will help you get a deep understanding of the market.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Sales and Marketing</h3>
								</div>
								<div class="timeline-body">
									<p>As a sales intern at Raletta, you’ll be expected to identify and contact clients, pitch products, generate sales leads and achieve sales targets.</p>
								</div>
							</div>
						</li>

					<!--	<br>
					 <li class="timeline-heading text-center animate-box">
							<div><h3>Education</h3></div>
						</li> -->
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Social Media Marketing</h3>
									<!-- <span class="company">University Name - 2007 - 2009</span> -->
								</div>
								<div class="timeline-body">
									<p>Eat. Sleep. Design. Repeat. You will be expected to design and execute day-to-day campaigns for our products and services on social media platforms.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-search"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Software Testing</h3>
									<!-- <span class="company">University Name - 2002 - 2006</span> -->
								</div>
								<div class="timeline-body">
									<p>As a Software Tester at Raletta, you’ll be expectied to build, create, test, and refine efficient and scalable software by learning acceptance testing and error testing.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-briefcase"></i></div>
							<!-- <i class="icon-graduation-cap"></i> -->
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Content writing</h3>
									<!-- <span class="company">College Name - 1999 - 2001</span> -->
								</div>
								<div class="timeline-body">
									<p>As a content writer at Raletta, you will be expected to create, delegate and commission exceptional content that increases reader engagement and audience growth and delivers on client goals (where applicable).</p>
								</div>
							</div>
						</li>
						<!-- <li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Graduation</h3>
									<span class="company">College Name - 1994 - 1998</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</li> -->
			    	</ul>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-features" class="animate-box">
		<div class="container">
			<div class="services-padding">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Our Internship Programs</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-paintbrush"></i>
							</span>
							<div class="feature-copy">
								<h3>Digital Marketing</h3>
								<p>Our digital marketing internship in Indore teaches you the tactics to reach your ideal customer online.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-briefcase"></i>
							</span>
							<div class="feature-copy">
								<h3>Content Writing</h3>
								<p>Raletta in content writing internship provides training in web content writing, SEO content writing, article writing, and much more.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
							<div class="feature-copy">
								<h3>Software Testing</h3>
								<p>In our internship in Indore program for software testing, you will be made to test, create, and build scalable software.</p>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-4 text-center">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-bargraph"></i>
							</span>
							<div class="feature-copy">
								<h3>2D Animation</h3>
								<p>Raletta in 2D Animation internship, provide VFX design, advance software and animation tool.</p>
							</div>
						</div>

					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
							<div class="feature-copy">
								<h3>SEO</h3>
								<p>Raletta offers best internship in Indore in Search Engine Optimization (SEO), where you can learn to rank your website on the top of SERPs.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
							<div class="feature-copy">
								<h3>Business Development</h3>
								<p>Our BDE internship in Indore will train you to pursue new business leads for the growth of the business.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-skills" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Skills</h2>
				</div>
			</div>
			<div class="row row-pb-md">
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="95"><span><strong>Digital Marketing</strong>95%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="93"><span><strong>Content Writing</strong>93%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>Software Testing</strong>90%</span></div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="89"><span><strong>2d Animation</strong>89%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="85"><span><strong>SEO</strong>85%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>Business Development</strong>90%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="85"><span><strong>Graphics Designing</strong>85%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>PHP</strong>90%</span></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">Digital Marketing/CSS3</span><span class="value-right">95%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Content Writing</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Software Testing</span><span class="value-right">80%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">>2d Animation</span><span class="value-right">85%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">SEO</span><span class="value-right">100%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
						  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Business Development</span><span class="value-right">70%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar"
						  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Graphics Designing</span><span class="value-right">85%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">PHP</span><span class="value-right">75%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-work"  class="fh5co-bg-dark">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Our Work Atmosphere</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-1.jpg);">
						<div class="desc">
							<h3>Expert Sessions</h3>
							<!-- <span>Illustration</span> -->
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-2.jpg);">
						<div class="desc">
							<h3>Theoretical Classes</h3>
							<!-- <span>Brading</span> -->
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-3.jpg);">
						<div class="desc">
							<h3>Certificate Distribution</h3>
							<!-- <span>Illustration</span> certificate distribution-->
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-4.jpg);">
						<div class="desc">
							<h3>Special Seminars</h3>
							<!-- <span>Design</span> special seminar -->
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-5.jpg);">
						<div class="desc">
							<h3>Wide Classrooms</h3>
							<!-- <span>Website</span> white classrooms-->
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-6.jpg);">
						<div class="desc">
							<h3>Practical Learning</h3>
							<!-- <span>Illustration</span> practical learning -->
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-7.jpg);">
						<div class="desc">
							<h3>Live Project Working</h3>
							<!-- <span>Brading</span> live project working-->
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-8.jpg);">
						<div class="desc">
							<h3>Fun & Social Activities</h3>
							<!-- <span>Illustration</span> fun social activities -->
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Our Top Content</h2>
					<p>Here are some of our top ranking contents on Google, which will help you understand the concept of Digital Marketing and its related aspects.</p>
				</div>
			</div>
      <!--first blog-->
			<div class="row">

				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/artificial-intelligence-bot-1020325.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">June 24th 2019</span>
							<h3><a target="_blank" href="https://www.raletta.in/blog/bringing-together-the-shopper-and-the-retailer-with-ai/">Bringing Together the Shopper and the Retailer with AI</a></h3>
							<p>The only way is to take advantage of the functionality offered by AI to ensure that the right prices and offers are being placed on the products.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a target="_blank" href="https://www.raletta.in/blog/bringing-together-the-shopper-and-the-retailer-with-ai/">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/stepbysetp.png);"></a>
						<div class="blog-text">
							<span class="posted_on">June 14th 2019</span>
							<h3><a target="_blank" href="https://www.raletta.in/blog/step-by-step-instructions-to-make-smart-borrowing-decisions/">Step by Step Instructions to Make Smart Borrowing Decisions</a></h3>
							<p>The vital reason why you should focus on borrowing smart is the fact that it helps you save money and take better control of all the finances.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a target="_blank" href="https://www.raletta.in/blog/step-by-step-instructions-to-make-smart-borrowing-decisions/">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/rankhighre.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">April 9th 2019</span>
							<h3><a target="_blank" href="https://www.raletta.in/blog/rank-higher-in-search-results-with-this-seo-guide/">Rank Higher In Search Results With This SEO Guide</a></h3>
							<p>Unless you are able to hire top quality SEO services, you are limited to dealing with it on your own. Read more if you're looking for SEO company in Delhi.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a  target="_blank" href="https://www.raletta.in/blog/rank-higher-in-search-results-with-this-seo-guide/">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

      <!--secound blog-->
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/5top.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">March 7th 2019</span>
							<h3><a target="_blank" href="https://www.raletta.in/blog/top-pr-distribution-online-services-for-your-brand/">5 Top PR Distribution Online Services for your Brand</a></h3>
							<p>With advanced technology, PR distribution online services have continued to evolve and helped businesses promote their news far and wide.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a target="_blank" href="https://www.raletta.in/blog/top-pr-distribution-online-services-for-your-brand/">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/top3supplier.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">January 2th 2019</span>
							<h3><a target="_blank" href="https://www.raletta.in/blog/top-3-supplier-quality-management-strategies-you-need-to-know/">Top 3 Supplier Quality Management Strategies You Need to Know</a></h3>
							<p>Is supplier management be a function of the Enterprise Resource Planning (ERP) system or the Quality System? This burning question has now been answered.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a target="_blank" href="https://www.raletta.in/blog/top-3-supplier-quality-management-strategies-you-need-to-know/">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">

						<a href="#" class="blog-bg" style="background-image: url(images/attract.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">December 14th 2018</span>
							<h3><a target="_blank" href="https://www.raletta.in/blog/how-are-programming-contests-an-efficient-way-to-attract-and-engage-developers/">How are Programming Contests an Efficient Way to Attract and Engage Developers?</a></h3>
							<p>Understand how programming contests an efficient way to attract and engage developers and implement it in your organization.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a  target="_blank" href="https://www.raletta.in/blog/how-are-programming-contests-an-efficient-way-to-attract-and-engage-developers/">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

      <!--third blog-->
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/simpletips.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">November 20th 2018</span>
							<h3><a target="_blank" href="https://www.raletta.in/blog/simple-tips-for-the-process-of-calibrating-the-laboratory-equipments/">Simple Tips for the Process of Calibrating the Laboratory Equipments</a></h3>
							<p>In order to understand the importance of calibration of laboratory equipment, you need to follow the remaining text in the following section.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a target="_blank" href="https://www.raletta.in/blog/simple-tips-for-the-process-of-calibrating-the-laboratory-equipments/">Read More<i class="icon-arrow-right22"></i></a></li>

							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">

						<a href="#" class="blog-bg" style="background-image: url(images/jimi-filipovski-189724-unsplash.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">November 19th 2018</span>
							<h3><a target="_blank" href="https://www.raletta.in/blog/why-its-too-early-to-speak-of-contagion-in-emerging-markets/">Why it’s too early to speak of contagion in emerging markets</a></h3>
							<p>Turkey, Indonesia, and Argentina have all observed their monetary standards encounter enormous drops as of late. Read on to know more.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a target="_blank" href="https://www.raletta.in/blog/why-its-too-early-to-speak-of-contagion-in-emerging-markets/">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">

						<a href="#" class="blog-bg" style="background-image: url(images/10simpleways.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">November 19th 2018</span>
							<h3><a target="_blank" href="https://www.raletta.in/blog/10-simple-ways-to-speed-up-your-microsoft-outlook/">10 Simple Ways to Speed Up Your Microsoft Outlook</a></h3>
							<p>We bring you 10 Simple Ways to Speed Up Your Microsoft Outlook. Try these steps to have your microsoft outlook running in a jiffy!</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a  target="_blank" href="https://www.raletta.in/blog/10-simple-ways-to-speed-up-your-microsoft-outlook/">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


	<div id="fh5co-started-internship" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			  <div class="row animate-box">
				 <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>How does Our Internship Program work?</h2>
      <p style="color:rgba(255, 255, 255, 0.8);">Enrolling to our programme for internship in Indore is as easy as watching a movie online. All you need to do is just follow the 6 easy steps that are given below.</p>
				</div>
			 </div>

      <div class="row">
        <div class="col-md-2">
        <div class="fh5co-blog animate-box">
        <div><img src="./images/icons/contract-1.svg" height="100px" width="100px" background="red"/>&nbsp;
        <img src="./images/icons/right-arrow.svg" height="40px" width="40px" background="red"/>
        </div>
        </br>
        <h4 style="color:white;">1.Apply</h4>
        </div>
        </div>

        <div class="col-md-2">
        <div class="fh5co-blog animate-box">
        <div><img src="./images/icons/telephonic-interview.svg" height="100px" width="100px" background="red"/>&nbsp;
        <img src="./images/icons/right-arrow.svg" height="40px" width="40px" background="red"/>
        </div>
        </br>
        <h4 style="color:white;">2.Telephonic Conversation</h4>
        </div>
        </div>

        <div class="col-md-2">
        <div class="fh5co-blog animate-box">
        <div><img src="./images/icons/video-conference.svg" height="100px" width="100px" background="red"/>&nbsp;
        <img src="./images/icons/right-arrow.svg" height="40px" width="40px" background="red"/>
        </div>
        </br>
        <h4 style="color:white;">3.Interview Scheduling</h4>
        </div>
        </div>

        <div class="col-md-2">
        <div class="fh5co-blog animate-box">
        <div><img src="./images/icons/interview.svg" height="100px" width="100px" background="red"/>&nbsp;
        <img src="./images/icons/right-arrow.svg" height="40px" width="40px" background="red"/>
        </div>
        </br>
        <h4 style="color:white;">4.HR Interview</h4>
        </div>
        </div>

        <div class="col-md-2">
        <div class="fh5co-blog animate-box">
        <div><img src="./images/icons/documentation.svg" height="100px" width="100px" background="red"/>&nbsp;
        <img src="./images/icons/right-arrow.svg" height="40px" width="40px" background="red"/>
        </div>
        </br>
        <h4 style="color:white;">5.Documentation</h4>
        </div>
        </div>

        <div class="col-md-2">
        <div class="fh5co-blog animate-box">
        <div><img src="./images/icons/internship.svg" height="100px" width="100px" background="red"/>
        </div>
        </br>
        <h4 style="color:white;">6.Beginning of Internship</h4>
        </div>
        </div>

    </div>


		</div>
	</div>


  <div id="fh5co-blog">
    <div class="container">
      <div class="row animate-box">

        <div class="col-md-12  text-center fh5co-heading">
          <h2>10 Reasons Why An Internship is Important for Your Career?</h2>
            <p>...</p>
          </div>

     </div>
    </div>
  </div>


  <div id="fh5co-starteds" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Our Portfolio</h2>
        <p style="color:rgba(255, 255, 255, 0.8);">We are in partnership with some of the best and most prestigious organizations in the world. Here are some of our top-class partners from the web.</p>
				</div>
			</div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

        <div class="col-md-3">
        <div class="fh5co-blog animate-box">
        <div><a target="_blank" href="https://merrchant.com/"><img src="./images/Merrchant.png" height="100px" width="100px" background="red"/></a>&nbsp;
        </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="fh5co-blog animate-box">
        <div><a target="_blank" href="https://prbulls.com/"><img src="./images/pr_bulls_portfolio.png" height="100px" width="100px" background="red"/></a>&nbsp;
        </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="fh5co-blog animate-box">
        <div><a target="_blank" href="https://raletta.in/"><img src="./images/raletta_resources.png" height="100px" width="100px" background="red"/></a>&nbsp;
        </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="fh5co-blog animate-box">
        <div><a target="_blank" href=" https://www.youtube.com/channel/UClQFRJALY6cbhF1RFl5-Msg"><img src="./images/raletta_studios.png" height="100px" width="100px" background="red"/></a>&nbsp;
        </div>
        </div>
        </div>
</div>

<div class="col-md-2"></div>

    </div>
		</div>
	</div>


  <div id="fh5co-blog">
    <div class="container">

      <!--first blog-->
      <div class="row">
        <div class="col-md-3">
          <div class="fh5co-blog animate-box">
            <div class="blog-text">
              <h1 class="fontst"><strong>1100+</strong></h1>
              <p>PASSED OUT CONDIDATES</p>
            </div>
          </div>
          <span class="vartical-line"></span>
        </div>

        <div class="col-md-3">
          <div class="fh5co-blog animate-box">
            <div class="blog-text">
              <h1 class="fontst"><strong>95%</strong></h1>
              <p>PLACEMENT RATE</p>
            </div>
          </div>
          <span class="vartical-line"></span>
        </div>

        <div class="col-md-3">
          <div class="fh5co-blog animate-box">
            <div class="blog-text">
              <h1 class="fontst"><strong>90%</strong></h1>
              <p>GOT A JOB OFFER</p>
            </div>
          </div>
          <span class="vartical-line"></span>
        </div>

        <div class="col-md-3">
          <div class="fh5co-blog animate-box">
            <div class="blog-text">
              <h1 class="fontst"><strong>100+</strong></h1>
              <p>PLACEMENT PARTNERS</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>


  <div id="fh5co-started" class="fh5co-bg-dark">
    <div class="overlay"></div>
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
          <h2>Hire Me!</h2>
          <p>We have openings for internship in Indore for several technical programs like Digital Marketing, Software Testing, Business Development, Content Writing, and much more.  If you are interested in working with Raletta kindly mail us your curriculum vitae by clicking the button below</p>
          <p><a href="mailto:jobs@raletta.in" class="btn btn-default btn-lg">Click Here</a></p>
        </div>
      </div>
    </div>
  </div>


	<div id="fh5co-consult">
		<div class="video fh5co-video" style="background-image: url(images/cover_bg_1.jpg);">
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box">
			<h2>Contact</h2>
			<form  method="post">
				<div class="row form-group">
					<div class="col-md-6">
						<input type="text" id="fname" name="fname" required class="form-control" placeholder="Your firstname">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<input type="text" id="lname" name="lname"  required class="form-control" placeholder="Your lastname">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="email" id="email" name="email" required class="form-control" placeholder="Your email address">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="subject" name="subject" required class="form-control" placeholder="Your subject of this message">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea name="message" id="message" required  name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
				</div>

			</form>
		</div>
	</div>

	<div id="map" class="fh5co-map"></div>
<!--googlre map-->

	</div>

	<div id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>&copy; 2017 Raletta All Rights Reserved. <br>Designed by <a href="https://raletta.in" target="_blank">Raletta Technology</a> </p>
				</div>
			</div>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<script src="js/jquery.easypiechart.min.js"></script>
	<!-- Google Map -->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script> -->

    <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "navbar") {
        x.className += " responsive";
      } else {
        x.className = "navbar";
      }
    }
    </script>


	<script>
// Initialize and add the map
// function initMap() {
// // The location of Uluru
// var indore = {lat: 22.720320, lng: 75.872017};
// // The map, centered at Uluru
// var map = new google.maps.Map(
// 		document.getElementById('map'), {zoom: 15, center: indore});
// // The marker, positioned at Uluru
// var marker = new google.maps.Marker({position: indore, map: map});
// }


    function initMap() {

        var location = new google.maps.LatLng(22.720320, 75.872017);

        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            center: location,
            zoom: 16,
            panControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        var markerImage = 'marker.png';

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            // icon: markerImage
        });

        var contentString = '<div class="info-window">' +
                '<h4>Raletta Technology Pvt Ltd</h4>' +
                '<div class="info-content">' +
                '<p>142, 2, G N T Market, Gurunanak Timber Market, Indore, Madhya Pradesh 452001' +
                '</div>' +
                '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 400
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });


    }

    google.maps.event.addDomListener(window, 'load', initMap);

	</script>


	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&callback=initMap">
	</script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
