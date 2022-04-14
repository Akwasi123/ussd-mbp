
<?php $msisdn = $_GET['msisdn'];
$sequence_ID = $_GET['sequenceID'];
$data
    = $_POST['data'];
$type = 0;
$mereply = "Welcome To Ashesi Mobile App 2022\n
    1. choose a movie\n     2. select a music\n     3. thank you\n";
echo
$mereply . '|' . $msisdn . '|' . $sequence_id . '|' . $type;


if ($data == 1) {
    $mereply = "You selected a movie";
} elseif ($data == 2) {
    $mereply = "Thank you for using cleanX";
}
