var express = require('express');  
var app = express();  
var server = require('http').Server(app);  
var io = require('socket.io')(server);
io.origins('*:*');

var Redis = require('ioredis');
var redis = Redis.createClient();
redis.subscribe('student-channel', function(err, count) {
  // body...
});

redis.on('message', function(channel, message) {
  console.log('Message Recieved: ' + message);
  message = JSON.parse(message);
  console.log(message);
  io.emit(channel + ':' + message.event, message.data);
});

server.listen(3000);

io.on('connection',function(socket){  
    console.log('Client connected...');
});