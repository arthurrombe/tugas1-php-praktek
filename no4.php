<?php

function doraemon($string){
    if (strrev($string)==$string){
        return 1;

    } else {
        return 0;
    }
}
$kk ="katak";
if (doraemon($kk)){
    echo "kata palingdrome";

} else {
    echo "bukan kata palingdrome";
}