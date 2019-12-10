<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin - HustShop</title>
    <base href="{{asset('')}}">

    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="admin_asset/bower_components/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="chatbox/custom.css">
</head>

<body>
    
    <div id="wrapper">

        @include('admin.layout.header')

        @yield('content')

        @include('admin.layout.chatbox')

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_asset/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <script src="../node_modules/socket.io-client/dist/socket.io.js"></script>
    
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    <script>
        var socket = io("http://localhost:6001");
        $(document).ready(function(){
            socket.emit("admin");
        });
        socket.on("server-response",function(data){
            $("#box-chat").append('<li><div class="left-chat"><img src="chatbox/image/1499345471_boy.png"><p>'+data+'</p></div></li>')
        });

        socket.on("server-response2",function(data){
            $("#box-chat").append('<li><div class="right-chat"><img src="chatbox/image/1499345471_boy.png"><p>'+data+'</p></div></li>')
        });

        socket.on("user-creat-room",function(data){
            socket.emit("admin-join-room",data);
            
        });
        $("#send-message").click(function() {
            socket.emit("admin-send-message",$("#message-text").val());
            $("#message-text").val("");
        });
        
        
    </script>

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

    @yield('script')
</body>

</html>
