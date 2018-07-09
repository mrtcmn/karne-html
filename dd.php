<?php
/**
 * Created by IntelliJ IDEA.
 * User: mrtcmn
 * Date: 9.07.2018
 * Time: 13:44
 */

function arksize ( $value )
{
    switch ($value) {
        case $value < 7 :
            echo "AŞIRI YÜKSEK ARK";
            break;
        case $value < 14 :
            echo "YÜKSEK ARK";
            break;
        case $value < 21 :
            echo "HAFİF YÜKSEK ARK";
            break;
        case $value < 28 :
            echo "NORMAL ARK";
            break;
        case $value < 35 :
            echo "HAFİF DÜŞÜK ARK";
            break;
        case $value < 42 :
            echo "DÜŞÜK ARK";
            break;
        case
            $value < 100 :
            echo "AŞIRI DÜŞÜK ARK";
            break;
        default:
            echo "-";
            break;


    }
}



pozitif

grade
