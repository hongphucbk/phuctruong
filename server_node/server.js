var io = require('socket.io')(6001)
console.log('Connected to port 6001');

io.on('error', function(socket) {
	console.log('error');
});

io.on('connection', function(socket) {
	console.log('Co nguoi vua ket noi id = ' + socket.id);

	socket.on('modbustcp', function(msg){
	    console.log('modbustcp: ' + msg);
	});

	setInterval(A_emit, 1 * 1000);
		

	socket.on('disconnect', function(){
	    console.log('Disconect '+ socket.id + ' disconnected');
	});
})

function A_emit() {

	var today = new Date();
	var timeValue = today.getDate() + "-" + (today.getMonth() + 1) + "-" + today.getFullYear() + " " + today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
	for (var i = 1; i <= 3; i++) {
		data = {
			'id' :i,
			'value': randomInt(100,200),
			'time': timeValue
		}
		io.emit('modbus', data);  
	}
};

function randomInt(low, high) {
  return Math.floor(Math.random() * (high - low) + low)
}


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