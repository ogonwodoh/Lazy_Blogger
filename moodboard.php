<html>
	<head>
		<title> ~ Currently... ~ </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="theme1.css" />
	</head>
	<body onload="createHeader()">
 
		<?php include 'index.php';

?>
                <?php include 'mail_action.php';
?>
		<h1 id="header"> </h1>
		<center>
                <p style="font-size:250%"> <?php echo $msg; ?> </p>
		<img id="tumblr1" src=""/>
		<img id="tumblr3" src=""/>
		<img id="facebook1" src="<?php echo $pic1; ?>"/> 
		<img id="tumblr2" src=""/>
		<img id="tumblr4" src=""/>
		<img id="facebook2" src="<?php echo $pic2; ?>"/>
		<img id="tumblr5" src=""/>
		<img id="tumblr6" src=""/>
		<img id="facebook3" src="<?php echo $pic3; ?>"/>
		</center>
		
         

		<script type="text/javascript">
			/* tumblr API*/
			//Get request to tumblr API for photos
			$.ajax({
				type: "GET",
   			 	url: "http://api.tumblr.com/v2/blog/styled-by-black.tumblr.com/posts?api_key=07bVZDIX17xxgDYYaEm5QqUOvkkycGFc9bivp3w8ga7L83PkaM",
   				dataType: 'jsonp',
			 	
   			 	success: function(info){
					var img_src= (info.response.posts[0].photos[0].original_size.url);
					var img_src2= (info.response.posts[1].photos[0].original_size.url);
					var img_src3= (info.response.posts[2].photos[0].original_size.url);
					var img_src4= (info.response.posts[3].photos[0].original_size.url);
					var img_src5= (info.response.posts[4].photos[0].original_size.url);
					var img_src6= (info.response.posts[5].photos[0].original_size.url);
					console.log(img_src);
					$("#tumblr1").attr("src",img_src);
					$("#tumblr2").attr("src",img_src2);
					$("#tumblr3").attr("src",img_src3);
					$("#tumblr4").attr("src",img_src4);
					$("#tumblr5").attr("src",img_src5);
					$("#tumblr6").attr("src",img_src6);
                                     
   			 	}
			});


			//request liked posts from tumblr API
			$.ajax({
				type: "GET",
   			 	url: "http://api.tumblr.com/v2/blog/ogo-u-didnot.tumblr.com/likes?api_key=07bVZDIX17xxgDYYaEm5QqUOvkkycGFc9bivp3w8ga7L83PkaM",
   				dataType: 'jsonp',
			 	
   			 	success: function(info2){
					console.log(info2);
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

		</script>
	</body>

</html>
