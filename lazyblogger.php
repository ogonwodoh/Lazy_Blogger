
<html>
	<head>
		<title> ~ Currently... ~ - Lazy Blogger </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="theme1.css" />
	</head>
	<body onload="createHeader()">
                 <div class="menu2"> 
                       <center>
			<ul class="menu2">
				<li class="menu2"> <a href="http://ogonwodoh.com"> Back to Ogo's Webpage </a> </li>
				<li class="menu2"> <a href="#About"> About this application </a> </li>
			</ul>
                       </center>
		</div>

 
		<?php include 'index.php';

?>
                <?php include 'mail_action.php';
?>

                <?php include 'google.php';
?>
               <br> <br>

		<h1 id="header"> </h1>
		<center>
                <p style="font-size:100%"> <?php echo $msg[0]; ?> </p>
		<img id="tumblr1" src=""/>
                <iframe id="player2" type="text/html" width="320" height="195" border-src="" frameborder="0"></iframe>
		<img id="tumblr3" src=""/>
		<a href="<?php echo $first_page_link; ?>" > <img id="facebook1" src="<?php echo $pic1; ?>" onmouseover="this.src='fb_overlay.png'" onmouseout="this.src='<?php echo $pic1; ?>'"/> </a>
		<img id="tumblr2" src=""/>
		<img id="tumblr4" src=""/>
                 <iframe id="player3" type="text/html" width="320" height="195" border-src="" frameborder="0"></iframe>
		<a href="<?php echo $second_page_link; ?>" > <img id="facebook2" src="<?php echo $pic2; ?>"onmouseover="this.src='fb_overlay.png'" onmouseout="this.src='<?php echo $pic2; ?>'"/> </a>
		<img id="tumblr5" src=""/>
		<img id="tumblr6" src=""/>
		<a href="<?php echo $third_page_link; ?>" > <img id="facebook3" src="<?php echo $pic3; ?>"onmouseover="this.src='fb_overlay.png'" onmouseout="this.src='<?php echo $pic3; ?>'"/></a>
                <iframe id="player1" type="text/html" width="320" height="195" border-src="" frameborder="0"></iframe>
                <br>
                <br>

<iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/88893449&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
		</center>

		<div id="About">
			<center> <h2> About this application </h2> </center>

			<p> Have you ever wanted to make a blog, but have been too busy to consistently post, upload pictures, and write? If so, this
			application is for you as it is a <strong> dynamic, blog maker </strong>. Using REST APIs, it queries your Tumblr, Facebook, and
			Youtube to see all the posts and pages you've been liking and posting. It then takes this data, and beautifully presents it in a
			blog format. This page is a prototype of the application (for me, the creator) which will soon be made into an Android application.
			If you have any suggestions about this application, please let me know! Thanks for visiting! </p>

		</div>
		
         

		<script type="text/javascript">
			/* tumblr API*/
			var img_src;
			var img_src2;
			var img_src3;
			var img_src4;
			var img_src5;
			var img_src6;

			//Get request to tumblr API for photos
			$.ajax({
				type: "GET",
   			 	url: "http://api.tumblr.com/v2/blog/styled-by-black.tumblr.com/posts?api_key=API_KEY",
   				dataType: 'jsonp',
			 	
   			 	success: function(info){
					img_src= (info.response.posts[0].photos[0].original_size.url);
					img_src2= (info.response.posts[1].photos[0].original_size.url);
					img_src3= (info.response.posts[2].photos[0].original_size.url);
					img_src4= (info.response.posts[3].photos[0].original_size.url);
					img_src5= (info.response.posts[4].photos[0].original_size.url);
					img_src6= (info.response.posts[5].photos[0].original_size.url);
					console.log(img_src);
					$("#tumblr1").attr("src",img_src);
					$("#tumblr2").attr("src",img_src2);
					$("#tumblr3").attr("src",img_src3);
					$("#tumblr4").attr("src",img_src4);
					$("#tumblr5").attr("src",img_src5);
					$("#tumblr6").attr("src",img_src6);
                                     
   			 	}
			});

			//create a Header with Date
			function createHeader(){
				var date= new Date();
				var days= ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
				var months=["January","February","March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
				var d= "Ogo's Moodboard for " + days[date.getDay()]+ ", "+ months[date.getMonth()] +" "+ date.getDate();
				document.getElementById("header").innerHTML=d;
			}

			//using jquery to change overlay for tumblr images on hover, because 
			//we used jquery/javascript to pass src vals into tumblr images, we must use jquery for each image to change src on hover	
			$(document).ready(function(){
   				$("#tumblr1").hover(function(){
       					$(this).attr("src", "tumblr_overlay.png");
        				}, function(){
        				$(this).attr("src", img_src);
    				});
			});
			$(document).ready(function(){
   				$("#tumblr2").hover(function(){
       					$(this).attr("src", "tumblr_overlay.png");
        				}, function(){
        				$(this).attr("src", img_src2);
    				});
			});
			$(document).ready(function(){
   				$("#tumblr3").hover(function(){
       					$(this).attr("src", "tumblr_overlay.png");
        				}, function(){
        				$(this).attr("src", img_src3);
    				});
			});
			$(document).ready(function(){
   				$("#tumblr4").hover(function(){
       					$(this).attr("src", "tumblr_overlay.png");
        				}, function(){
        				$(this).attr("src", img_src4);
    				});
			});
			$(document).ready(function(){
   				$("#tumblr5").hover(function(){
       					$(this).attr("src", "tumblr_overlay.png");
        				}, function(){
        				$(this).attr("src", img_src5);
    				});
			});
			$(document).ready(function(){
   				$("#tumblr6").hover(function(){
       					$(this).attr("src", "tumblr_overlay.png");
        				}, function(){
        				$(this).attr("src", img_src6);
    				});
			});

                        /* Youtube API */
                        var vid1_src="https://www.youtube.com/embed/"+"<?php echo $vid1;?>"+"?enablejsapi=1&origin=http://ogonwodoh.com";
                        $("#player1").attr("src",vid1_src);
                        var vid2_src="https://www.youtube.com/embed/"+"<?php echo $vid2;?>"+"?enablejsapi=1&origin=http://ogonwodoh.com";
                        $("#player2").attr("src",vid2_src);
                        var vid3_src="https://www.youtube.com/embed/"+"<?php echo $vid3;?>"+"?enablejsapi=1&origin=http://ogonwodoh.com";
                         $("#player3").attr("src",vid3_src);
		</script>
	</body>

</html>

