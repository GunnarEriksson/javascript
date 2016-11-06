<?php
include(__DIR__ . "/../incl/config.php");
$title = "Betala | JavaScript";
include(__DIR__ . "/../incl/header.php");
require('form.php');
?>
<div id="paydesk">
    <h1>Betalning</h1>
    <p>Följande summa kommer att dras från ditt kreditkort: <span id="payment-amount">0</span> kr</p>
    <div id="output"></div>
    <?= $form->GetHTML(array('id' => 'paydesk-form', 'columns' => 2)); ?>
</div>

<?php $path=__DIR__; include(__DIR__ . "/../incl/footer.php"); ?>
