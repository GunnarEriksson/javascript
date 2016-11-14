/**
 * Broadcast Server
 */
/*global WebSocket */

$(document).ready(function() {
    'use strict';
    var websocket;

    /**
     * Writes messages to the log with a time stamp.
     *
     * @param  {string}  outputMessage - The message to the be written in the log.
     * @return {void}
     */
    function outputLog(outputMessage) {
        var now = new Date();
        $('#output').append(now.toLocaleString() + ' ' + outputMessage + '<br/>');
    }

    // Connect button to connect to websocket.
    $('#connect').on('click', function() {
        console.log('Connecting to: ' + $('#url').val());
        $('#output').empty();
        websocket = new WebSocket($('#url').val(), 'broadcast-protocol');

        // Event handler when the websocket is opened.
        websocket.onopen = function() {
            console.log('The websocket is open');
            websocket.send('Client confirming connection');
        };

        // Event handler when receiving message from server.
        websocket.onmessage = function(event) {
            outputLog('Server: ' + event.data);
            console.log('Receiving message: ' + event.data);
        };

        // Event handler when the websocket is closed.
        websocket.onclose = function() {
            console.log('The websocket is closed.');
        };
    });

    // Disconnect button to disconnect from websocket.
    $('#disconnect').on('click', function() {
        console.log('Closing websocket.');
        websocket.send('Client is disconnecting connection.');
        websocket.close();
        outputLog('Websocket is closed by client');
        console.log(websocket);
    });

    // Send button to send messages to server via websockt connection.
    $('#send').on('click', function() {
        var logMessage = "";
        var sendingMessage = $('#message').val();

        if (!websocket || websocket.readyState === 3) {
            logMessage = 'The websocket is not connected to a server.';
            outputLog(logMessage);
            console.log(logMessage);
        } else {
          websocket.send(sendingMessage);
          outputLog('Klient: ' + sendingMessage);
          console.log("Sent message: " + sendingMessage);
        }

        $('#message').val('');
    });
});
