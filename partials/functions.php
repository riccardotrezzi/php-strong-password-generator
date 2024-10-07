<?php

function generatePassword($len) {
    $pass = '';

    $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '#@[]_-!?';
    $allCharacters = $upperCase.$lowerCase.$numbers.$symbols;

    $firstIndex = 0;
    $lastIndex = strlen($allCharacters) - 1;

    for($i = 0; $i < $len; $i++) {
        $randomIndex = rand($firstIndex, $lastIndex);
        

        $pass .= $allCharacters[$randomIndex];
    }
    
    return $pass;
}

?>