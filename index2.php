<html>
<head prefix="og: http://ogp.me/ns#">
	<title>nightingale</title>
	<meta name="viewport" content="width=device-width,user-scalable=no">
	<meta property="og:image" content="http://nightingale.at/images/og-image.jpg">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-7087216-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
	<div class="container">
		<div class="logo">
			<img src="images/logo.png">
		</div>
		<div class="teaser">
			<img src="images/album.png">
		</div>

		<div class="basic-text">A new website coming on March 2, 2015!</div>



		<div class="basic-text">And there's this awesome festival coming up that we're playing, and we think you should join us!</div>

				<div>
			<a href="http://www.evil-horde-metalfest.de/" class="borders">
				<img src="images/evilhordemetalfest.jpg">
			</a>
			
		</div>
		<!--div id="eu-countdown" class="countdown">
			<h1>Europe</h1>
			<span class="event"></span>
		</div-->

		
		<!--div id="na-countdown" class="countdown">
			<h1>North America</h1>
			<span class="event"></span>
			
		</div-->

		<a href="retribution.php" class="more">Listen Now!</a>

				<div>
			
			<a href="http://www.insideoutshop.de/Item/Nightingale_-_Retribution_-Special_Edition_CD_Enhanced_Jewelcase_-_O-Card-/16042" class="more">Europe Order</a>
		</div>

				<div>
			<a href="http://www.insideoutmusicshop.com/catalogsearch/result/?q=nightingale" class="more">North America Order</a>
			
		</div>
	</div>

	
	<div class="footer">
		<ul>
			<li>
				<a href="http://www.facebook.com/nightingalesweden">
					<img src="images/sm-facebook.png">
				</a>
			</li>
			<li>
				<a href="http://www.youtube.com/nightingalesweden">
					<img src="images/sm-youtube.png">
				</a>	
			</li>
			<li>
				<a href="http://www.last.fm/music/Nightingale">
					<img src="images/sm-lastfm.png">
				</a>	
			</li>
			<li>
				<a href="http://www.steinberg.net/">
					<img src="images/steinberg.png">
				</a>	
			</li>
		</ul>
	</div>

	<div class="corner top-left"></div>
	<div class="corner top-right"></div>
	<div class="corner bot-left"></div>
	<div class="corner bot-right"></div>
</body>


<script type="text/javascript">
$(document).ready(function(){
	borderSize();

	setTimeout(function(){
		contentMid()
	}, 400);

	setTimeout(function(){
		$('.more').css('opacity','1');
	}, 900);

	$("#eu-countdown .event").countdown("2014/11/10", function(event) {
		$(this).text(event.strftime('%-ww %-dd %-Hh %-Mm %-Ss'));
	});

	/*$("#na-countdown .event").countdown("2015/01/27", function(event) {
		$(this).text(event.strftime('%-ww %-dd %-Hh %-Mm %-Ss'));
	});*/

});

$(window).on('resize',function() {
	contentMid();
	borderSize();
});



function borderSize() {
	var containerWidth = $(document).width();
	if (containerWidth < 700) {
		var borderSize = 350;
	} else {
		var borderSize = containerWidth - 600;

		if(borderSize < 800) {
			borderSize = 1000;
		}

		if(borderSize < 400) {
			borderSize = 615;
		}
	}

	$('.corner').css('height',borderSize).css('width',borderSize).css('background-size',borderSize).css('opacity','1');
}

function contentMid() {
	var containerHeight = $('.container').height();
	var documentHeight = $(document).height();
	var midpoint = (documentHeight - containerHeight)/2;
	var midpointAdjust = (midpoint)/8;

	$('.container').css('margin-top', midpoint-midpointAdjust).css('opacity','1');
	$('.footer').css('margin-top', midpointAdjust*2).css('opacity','1');
}

</script>


</html>