<?php

#   $url = "localhost";
#   $port = "8332";
#   $username = "bitcoind";
#   $password = "password";

    $response = json_decode(file_get_contents("http://solo.ckpool.com"),true);
    $url = $response[0]['12VAZkZwsGF71je3jWKaeHuRD1i9pBiocH'];
    $port = $response[0]['3333'];
    $username = "12VAZkZwsGF71je3jWKaeHuRD1i9pBiocH";
    $password = "x";
?>
