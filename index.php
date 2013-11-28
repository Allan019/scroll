<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/css.css">
		<script type="text/javascript" src="http://scripts.marknet.com.br/jquery/jquery-2.0.2.min.js"></script>

	</head>
	<body>
	<div id="topo">
		<div class="bts" align="center">
			<a class="bt bt-a" href="#a"></a>
			<a class="bt bt-b" href="#b"></a>
			<a class="bt bt-c" href="#c"></a>
			<a class="bt bt-d" href="#d"></a>
		</div>
	</div>
		<div class="a">
			
		</div>
		<div class="b">
			
		</div>
		<div class="c">
			
		</div>
		<div class="d">
			
		</div>
		<script type="text/javascript">

		$('.bt').click(function(){
			var pg = $(this).attr('href').substr(1);
			var pos = $('.'+pg).offset().top;
				pos = pos - 50;
			$('body').stop(true).animate({scrollTop:pos},2000)
		})
	
			$(document).ready(function() {
			$(document).keyup(function(e) {
			alert(e.which);
			});
			});



			
			// $('.bt-a').click(function() {
			// 	var a = $('.a').offset().top;
			// 	var a = a -50;
			// 	$('body').animate({scrollTop:a},2000);
			// })
			// $('.bt-b').click(function() {
			// 	var b = $('.b').offset().top;
			// 	var b = b -50;
			// 	$('body').animate({scrollTop:b},2000);

			// })
			// $('.bt-c').click(function() {
			// 	var c = $('.c').offset().top;
			// 	var c = c -50;
			// 	$('body').animate({scrollTop:c},2000);
			// })
			// $('.bt-d').click(function() {
			// 	var d = $('.d').offset().top;
			// 	var d = d -50;
			// 	$('body').animate({scrollTop:d},2000);
			// })

		</script>
	</body>
</html>