<!DOCTYPE html>
<html lang="vi">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>HustShop</title>
		<base href="{{asset('')}}">



		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/style-index.css" type="text/css">
		<link href="open-iconic/font/css/open-iconic.css" rel="stylesheet">
		<link href="admin_asset/bower_components/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="chatbox/custom.css">




		@yield('css')
	</head>
	<body class="bg-light">
		@include('layout.header')
		<!-- header -->
		@yield('content')
		<!-- 	#content -->
		@include('layout.footer')
		<!-- #footer -->
		@include('layout.chatbox')

	



		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.slim.min.js" ></script>
		<script src="js/popper.min.js" ></script>
		<script src="bootstrap/js/bootstrap.min.js" ></script>
		<script src="../node_modules/socket.io-client/dist/socket.io.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
		    	$(".left-first-section").click(function(){
		            $('.main-section').toggleClass("open-more");
		        });
		    });
		    $(document).ready(function(){
		    	$(".fa-minus").click(function(){
		            $('.main-section').toggleClass("open-more");
		        });
		    });
		    $(document).ready(function(){
		    	var input = document.getElementById("message-text");
		    	input.addEventListener("keyup",function(event){
		    		event.preventDefault();
		    		if (event.keyCode === 13) {
		    			$('#send-message').click();
		    		}
		    	});
		    });
		</script>
		<script>
			var socket = io("http://localhost:6001");
			$(document).ready(function(){
				socket.emit("user");
			});

			socket.on("server-response",function(data){
	            $("#box-chat").append('<li><div class="right-chat"><img src="chatbox/image/1499345471_boy.png"><p>'+data+'</p></div></li>')
	        });

	        socket.on("server-response2",function(data){
           	 	$("#box-chat").append('<li><div class="left-chat"><img src="chatbox/image/1499345471_boy.png"><p>'+data+'</p></div></li>')
       		});

			$("#send-message").click(function() {
				socket.emit("user-send-message",$("#message-text").val())
				$("#message-text").val("");
			});

		</script>

		@yield('script')
	</body>
</html>
	
</html>


