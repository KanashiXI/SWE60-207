<?php

    function error_handle($no, $msg){
        die("error [".$no."]:" . $msg);
    }
    set_error_handler("error_handle");

    $conn = new mysqli(
    "127.0.0.1",
    "root",
    "",
    "web_class"

    );