<?php

function generate_rnd_password($length_number)
{
    $password_components = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!£$%&?-@_*";
    $pass_result = "";

    while (strlen($pass_result) < $length_number) {
        $rnd_element = rand(1, strlen($password_components));
        $pass_result .= $password_components[($rnd_element - 1)];
    };

    $_SESSION["password"] = $pass_result;
    header("Location:./result.php");
};
