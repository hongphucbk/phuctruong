var io = require('socket.io')(6001)
console.log('Connected to port 6001');

io.on('error', function(socket) {
	console.log('error');
});

io.on('connection', function(socket) {
	console.log('Co nguoi vua ket noi id = ' + socket.id);

	socket.on('cshap', function(msg){
	    console.log('cshap: ' + msg);
	});

	socket.on('disconnect', function(){
	    console.log('user '+ socket.id + ' disconnected');
	});
})

var Redis = require('ioredis')
var redis = new Redis(1000)
redis.psubscribe("*", function(error, count) {
	// body...
})

redis.on('pmessage',function(partner, channel, message) {
	// console.log(channel);
	// console.log(message);
	// console.log(partner);
	
	message = JSON.parse(message)
	io.emit(channel+":"+message.event, message.data.message);
	console.log('Sent');
})