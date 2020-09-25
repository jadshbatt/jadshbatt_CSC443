<?php
function drunkenCapitalizer($string){
    explode("",$string,strlen($string));
    for($i=0;$i<strlen($string);$i++){
        if (rand(0, 1)) 
            $string[$i] = strtoupper($string[$i]);
    }    
  return $string;
}
echo drunkenCapitalizer("helloo");
?>