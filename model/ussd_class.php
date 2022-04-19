<?php

class Ussd extends Connection
{
    public function insert_user($phone, $sessionID, $currentLevel)
    {
        return $this->query("INSERT INTO customer(phone, session_number, current_level) VALUES ('$phone', '$sessionID', '$currentLevel')");
    }
}
