<?php session_start();
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$captcha = $num1 + $num2;
$_SESSION['captcha'] = $captcha;
?>
<!DOCTYPE html>
<html>
<head>
	<title>This domain is for sale</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<link href='http://fonts.googleapis.com/css?family=Nixie+One|Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.countdown.css"/>	
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
	<!--[if lte IE 7]>
  		<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome-ie7.min.css">
	<![endif]-->
	<!--[if lte IE 8]>
        <link rel="stylesheet" href="css/ie8.css"/>
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.gridrotator.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
  <script type="text/javascript" src="js/jquery.touchwipe.js"></script>
    <script type="text/javascript" src="js/jquery.ulslide.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript" src="js/jquery.cycle2.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<!--[if lt IE 9]>
	  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>	

<body class="md-option-2"><!-- #md-option-2-->
	<div id="md-comingsoon" class="md-comingsoon">
		<div class="ri-grid ri-grid-size-2 ri-shadow clearfix">
		    <div class="ri-blue"></div>
		    <video width="1920" height="1080" autoplay loop>
			  <source src="video/video.mp4" type="video/mp4">
			  <source src="video/video.ogg" type="video/ogg">
			  <source src="video/video.ogg" type="video/ogg">
			  Your browser does not support the video tag.
			</video> 
		</div><!-- #ri-grid -->
		<div class="md-wrap">
			<div id="md-sections" class="md-sections">
				<section class="md-section md-sale">
					<div class="md-content">
                        <h1 class="rs md-title">This domain is for sale</h1>
                        <p class="md-description">Hexagoon.com is now available for sale. You can  make an offer by filling forms below</p>
                        <div id="md-domain-content">
                            <div class="message"></div>
                            <form id="md-domain-form" action="server/domain.php" method="post">
                                <div class="md-form"><input type="text" class="md-input" placeholder="Your name" name="name"></div><!-- /.md-form -->
                                <div class="md-form"><input type="text" class="md-input" placeholder="Your email" name="email"></div><!-- /.md-form -->
                                <div class="md-form"><input type="text" class="md-input" placeholder="Your phone" name="phone"></div><!-- /.md-form -->
                                <div class="md-form"><input type="text" class="md-input" placeholder="Your bid (in $)" name="bid"></div><!-- /.md-form -->
                                <div class="md-form md-confirm clearfix">
                                    <label for="md-captcha">Solve this simple equation to prove you are a human.</label>
                                    <div class="random-equation"><?php echo $num1 ?> + <?php echo $num2 ?> =</div>
                                    <input type="text" id="md-captcha" class="md-input md-result" placeholder="Result" name="captcha">
                                </div><!-- /.md-form -->
                                <div class="md-form"><button type="submit" class="md-button">Bid this domain name</button></div><!-- /.md-form -->
                            </form>
                        </div>

					</div><!-- /.md-content -->
				</section><!-- /.md-sale -->
				<section class="md-section md-domain">
					<div class="md-content">
						<h1 class="rs md-title">Other domains you might like</h1>
						<div class="md-list-domain">
							<p>Witchagoon.net</p>
							<p>Enchantagoon.net</p>
							<p>Charmagoon.com</p>
							<p>Hexesagoon.net</p>
							<p>Spellagoon.com</p>
							<p>Curseagoon.com</p>
						</div>
					</div><!-- /.md-content -->
				</section><!-- /.md-notify -->

				<section class="md-section md-follow">
					<div class="md-content">
						<h1 class="rs md-title">You can follow us for all future updates</h1>
						<div id="cl-effect-8" class="md-follow-items">
							<a href="#" class=""><i class="icon-facebook"></i></a>
							<a href="#" class=""><i class="icon-twitter"></i></a>
							<a href="#" class=""><i class="icon-google-plus"></i></a>
							<a href="#" class=""><i class="icon-linkedin"></i></a>
							<a href="#" class=""><i class="icon-dribbble"></i></a>
						</div>
						<div class="md-follow">
							<div class="md-twitter">
								<a href="#" class="icon-twitter"></a>
								<div id="tweets" class="md-tw-des">
								</div>
							</div>
						</div>
					</div><!-- /.md-content -->
				</section><!-- /.md-follow -->
			</div><!-- /.md-sections -->

			<div id="md-arrow" class="md-arrow">
				<div id="arrow-prev" class="icon-angle-up md-arrow-top active"></div>
				<div id="arrow-next" class="icon-angle-down md-arrow-bottom active"></div>
			</div><!-- /.md-arrow -->

			<div class="md-pages clearfix">
				<ul id="md-pager" class="rs">
					<li class="md-page"><a href="#">1</a></li>
					<li class="md-page"><a href="#">2</a></li>
					<li class="md-page"><a href="#">3</a></li>
				</ul>
			</div><!-- /.md-pages -->
		</div><!-- /.md-wrap -->
	</div><!-- /md-comingsoon -->
</body>
</html>