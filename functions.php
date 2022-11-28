<?php
function generate_rnd_password($length_number)
{
    $password_components = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!£$%&?-@_*";
    $pass_result = "";
    $index = 0;

    while ($index < $length_number) {
        $rnd_element = rand(1, strlen($password_components));
        $pass_result .= $password_components[($rnd_element - 1)];
        $index++;
    };
    return $pass_result;
};
