<?php
    function sampleFunction ($num1, $num2){
        
     return ($num1 == 30) || ($num2 == 30) || ($num1 + $num2 ==30 );
    }

echo var_dump(sampleFunction(15,13)) ;
echo var_dump(sampleFunction(15,15)) ;
echo var_dump(sampleFunction(0,30)) ;



