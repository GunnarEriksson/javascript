//var port = 1337;
var port = 8059;
var wsServer;

// Require the modules we need
var http = require('http');

// Create a http server with a callback handling all requests
var httpServer = http.createServer(function(request, response) {
  console.log((new Date()) + ' Received request for ' + request.url);
  response.writeHead(200, {'Content-type': 'text/plain'});
  response.end('Server created\n');
});

// Setup the http-server to listen to a port
httpServer.listen(port, function() {
  console.log((new Date()) + ' HTTP server is listening on port ' + port);
});


// Require the modules we need
//var WebSocketServer = require('websocket').server;
//var WebSocketServer = require('../../../../node_modules/websocket').server;
var WebSocketServer = require('/home/saxon/students/20161/guer16/node_modules/websocket').server;

// Create an object for the websocket
// https://github.com/Worlize/WebSocket-Node/wiki/Documentation
wsServer = new WebSocketServer({
  httpServer: httpServer,
  autoAcceptConnections: false
});

// Create a callback to handle each connection request
wsServer.on('request', function(request) {
  if (!originIsAllowed(request.origin)) {
    // Make sure we only accept requests from an allowed origin
    request.reject();
    console.log((new Date()) + ' Connection from origin ' + request.origin + ' rejected.');
    return;
  }

  var connection = request.accept('echo-protocol', request.origin);
  console.log((new Date()) + ' Connection accepted from ' + request.origin);

  // Callback to handle each message from the client
  connection.on('message', function(message) {
      if (message.type === 'utf8') {
          console.log('Received Message: ' + message.utf8Data);
          connection.sendUTF(message.utf8Data);
      }
      else if (message.type === 'binary') {
          console.log('Received Binary Message of ' + message.binaryData.length + ' bytes');
          connection.sendBytes(message.binaryData);
      }
  });

  // Callback when client closes the connection
  connection.on('close', function() {
      console.log((new Date()) + ' Peer ' + connection.remoteAddress + ' disconnected.');
  });
});

// Always check and explicitly allow the origin
function originIsAllowed(origin) {
  if (origin === 'http://dbwebb.se' || origin === 'http://localhost:8080' || origin === 'http://www.student.bth.se') {
    return true;
  }
  return false;
}
