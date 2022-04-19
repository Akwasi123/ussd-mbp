<?php

include_once './model/ussd.php';


function insert_user_ctlr($phone, $sessionID, $currentLevel)
{
    $user_instance = new Ussd();

    $user_instance->insert_user($phone, $sessionID, $currentLevel);
}
