<?php

function generateRandomPassword($length){
    $password= '';

    if($length >= 3 && $length <= 18){
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!$%&()=?_-[]';
        $min= 0;
        $max= strlen($characters) - 1;


        
        for($i = 0; $i < $length; $i++){
            $randomCharacter = $characters[mt_rand($min,$max)];

            $password .= $randomCharacter;
        };         
    };

    return $password;
}