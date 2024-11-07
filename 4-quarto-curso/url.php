<?php

$url = "https://todos-os-dias-posso-aprender-algo-novo.com.br";

if (str_contains($url,"https://")) {

    echo "Esse site é seguro !";
}
else{
    echo "Esse site não é seguro !";
}