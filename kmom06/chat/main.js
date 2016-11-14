/**
 * Chat Server
 */
/*global WebSocket */

$(document).ready(function() {
    'use strict';
    var websocket;
    var user = "";
    var outputMessage = "";

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

        if ($('#user').val().length > 0) {
            user = $('#user').val();
            websocket = new WebSocket($('#url').val(), 'chat-protocol');

            // Event handler when the websocket is opened.
            websocket.onopen = function() {
                outputMessage = {"name" : user, "message" : "Ansluter sig till chatten"};
                websocket.send(JSON.stringify(outputMessage));
                console.log('The chat is open');
            };

            // Event handler when receiving message from server.
            websocket.onmessage = function(event) {
                console.log("Event data: " + event.data);
                var msg = JSON.parse(event.data);
                outputLog(msg.name + ': ' + msg.message);
                console.log('Receiving message: ' + event.data);
            };

            // Event handler when the websocket is closed.
            websocket.onclose = function() {
                outputLog(user + ': Har lämnat chatten');
                console.log('The websocket is closed.');
            };
        } else {
            outputLog('Användarenamn saknas. Fyll i användare!');
            console.log("User name is missing!");
        }

    });

    // Disconnect button to disconnect from websocket.
    $('#disconnect').on('click', function() {
        console.log('Closing websocket.');
        outputMessage = {"name" : user, "message" : "Har lämnat chatten"};
        websocket.send(JSON.stringify(outputMessage));
        websocket.close();
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
            outputMessage = {"name" : user, "message" : sendingMessage};
            websocket.send(JSON.stringify(outputMessage));
            console.log(user + " sent message: " + sendingMessage);
        }

        $('#message').val('');
    });
});
