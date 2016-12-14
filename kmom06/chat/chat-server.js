//var port = 1337;
var port = 8069;
var broadcastTo = [];
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
    var requestStatus = null;

    if (!originIsAllowed(request.origin)) {
        request.reject();
        console.log((new Date()) + ' Connection from origin ' + request.origin + ' rejected.');
        return;
    }

    for (var i = 0; i < request.requestedProtocols.length; i++) {
        if (request.requestedProtocols[i] === 'chat-protocol') {
            requestStatus = isChatConnectionAccepted(request);
        } else if (request.requestedProtocols[i] === 'broadcast-protocol') {
            requestStatus = isBroadcastConnectionAccepted(request);
        } else {
            requestStatus = isEchoConnectionAccepted(request);
        }
    }
});

function isChatConnectionAccepted(request) {
    var connection = request.accept('chat-protocol', request.origin);
    connection.broadcastId = broadcastTo.push(connection) -1;
    console.log((new Date()) + ' Chat connection accepted from ' + request.origin + ' id ' + connection.broadcastId);

    // Callback to handle each message from the client
    connection.on('message', function(message) {
        var clients = 0;
        for (var i = 0; i < broadcastTo.length; i++) {
            if (broadcastTo[i]) {
                clients++;
                broadcastTo[i].sendUTF(message.utf8Data);
            }
        }
        console.log('Chat message to ' + clients + ' clients: ' + message.utf8Data);
    });

    // Callback when client closes the connection
    connection.on('close', function() {
        console.log((new Date()) + ' Peer ' + connection.remoteAddress + ' disconnected, broadcastId = ' + connection.broadcastId);
    });
    return true;
}

function isBroadcastConnectionAccepted(request) {
    var connection = request.accept('broadcast-protocol', request.origin);
    connection.broadcastId = broadcastTo.push(connection) -1;
    console.log((new Date()) + ' Broadcast connection accepted from ' + request.origin + ' id ' + connection.broadcastId);

    // Callback to handle each message from the client
    connection.on('message', function(message) {
        var clients = 0;
        for (var i = 0; i < broadcastTo.length; i++) {
            if (broadcastTo[i]) {
                clients++;
                broadcastTo[i].sendUTF(message.utf8Data);
            }
        }
        console.log('Broadcasted message to ' + clients + ' clients: ' + message.utf8Data);
    });

    // Callback when client closes the connection
    connection.on('close', function() {
        console.log((new Date()) + ' Peer ' + connection.remoteAddress + ' disconnected, broadcastId = ' + connection.broadcastId);
    });
    return true;
}

function isEchoConnectionAccepted(request) {
    var connection = request.accept('echo-protocol', request.origin);
    console.log((new Date()) + ' Echo connection accepted from ' + request.origin);

    // Callback to handle each message from the client
    connection.on('message', function(message) {
        if (message.type === 'utf8') {
            console.log('Received Message: ' + message.utf8Data);
            connection.sendUTF(message.utf8Data);
        } else if (message.type === 'binary') {
            console.log('Received Binary Message of ' + message.binaryData.length + ' bytes');
            connection.sendBytes(message.binaryData);
      }
    });

    // Callback when client closes the connection
    connection.on('close', function() {
        console.log((new Date()) + ' Peer ' + connection.remoteAddress + ' disconnected.');
    });
    return true;
}

// Always check and explicitly allow the origin
function originIsAllowed(origin) {
  if (origin === 'http://dbwebb.se' || origin === 'http://localhost:8080' || origin === 'http://www.student.bth.se') {
    return true;
  }
  return false;
}
