<?php

$temperatura = 28;
$chuva = true;
$densidade = "alta";

if($temperatura >= 30){
    print "O dia está ensolarado";
}
else if($temperatura < 30){
    
    if($temperatura < 30 && $chuva == true){
    print "O dia está chuvoso ";

        if($densidade == "alta"){
            print "<br> Alerta de risco";
        }


    }
    else{
        print "O dia está nublado";
    }
}