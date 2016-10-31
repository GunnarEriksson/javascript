<?php
include(__DIR__ . "/../incl/config.php");
$title = "Hello World | Javascript";
include(__DIR__ . "/../incl/header.php");
?>

<style type='text/css'>
.red{color:red;}
.green{color:green;}
.blue{color:blue;}
.brown{color:brown;}
</style>

<script>
console.log('doing js in head-section');

function helloWorld() {
  console.log('called function helloWorld()');
  alert('Hello World from a JavaScript function showing an alert.');
}

function helloMyNumber() {
  console.log('called function helloMyNumber()');
  var max = 42;
  var yourLuckyNumber = prompt('So, whats your lucky number today (enter a number between 1 and '+max+')?');
  var myLuckyNumber = Math.floor(Math.random()*(max+1));
  var paragraph = document.getElementById('luckynumber');
  paragraph.innerHTML = paragraph.innerHTML + ' Your\'e lucky number is: ' + yourLuckyNumber + '. Mine is: ' + myLuckyNumber + '. They did ' + (yourLuckyNumber == myLuckyNumber ? 'indeed ' : 'NOT ') + 'match!';
}
</script>
<h1>Hello World i Javascript</h1>
<p class='red'>Hello World in a HTML paragraph!</p>

<script>
console.log('doing js in body-section');
document.writeln('<p class="green">Hello World from JavaScript within a body-section in HTML!</p>');
</script>

<p><a href='javascript:helloWorld()'>Click me to see Hello World in an alert...</a></p>

<p><a href='javascript:helloMyNumber()'>Click me to see a prompt and enter your lucky number...</a></p>

<p id='luckynumber' class='brown'>No lucky number yet...</p>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
