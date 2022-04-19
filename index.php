
<?php

include './controller/ussd_controller.php';

$msisdn = $_GET['msisdn'];
$sequence_ID = $_GET['sequenceID'];
$data = $_GET['data'];
$type = 0;
$mereply = "Welcome To Ashesi Mobile App 2022\n
    1. choose a movie\n     2. select a music\n     3. thank you\n";


echo $mereply . '|' . $msisdn . '|' . $sequence_id . '|' . $type;

$c_level = 1;

// insert into db
insert_user_ctlr($msisdn, $sequence_ID, $c_level);

