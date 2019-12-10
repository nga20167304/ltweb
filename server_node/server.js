var io = require('socket.io')(6001);

console.log("connect to port 6001");

io.on('error',function(socket){
	console.log("error");
});

io.on('connection',function(socket){

	console.log('co nguoi ket noi ' + socket.id);
	
	

	socket.on("admin",function(){
		socket.join('admin');
	});
	socket.on("user",function(){
		socket.phong = socket.id;
		socket.to('admin').emit("user-creat-room",socket.phong);
	});
	socket.on("admin-join-room",function(data){
		socket.join(data);
		socket.phong = data;
		console.log(socket.adapter.rooms);
	});

	socket.on("user-send-message",function(data){
		io.in(socket.phong).emit("server-response",data);
	});
	socket.on('admin-send-message',function(data){
		io.in(socket.phong).emit("server-response2",data);
	});

	socket.on('disconnect', function(){
		console.log(socket.id+" vua ngat ket noi");	
	});

});