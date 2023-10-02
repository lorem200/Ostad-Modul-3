<?php
function generatePassword($length) {   
   
    $allChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+";
    
    $charLength = strlen($allChars);

    $password = '';
    
    for ($i = 0; $i < $length; $i++) {        
        $randomIndex = mt_rand(0, $charLength - 1);       
        $password .= $allChars[$randomIndex];
    }
    return $password;}

$length = 12;
$password = generatePassword($length);

echo "Generated Password: $password";

?>