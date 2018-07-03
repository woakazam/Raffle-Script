<?php

    function returnJSON($a){
        header("Content-type: application/json; charset=utf-8");
        echo json_encode($a, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        exit();
    }