// Parametri funkcije

<?php
function increaseEnthusiasm($str){
  return $str . "!";  
}
echo increaseEnthusiasm("Marko"); 

function repeatThreeTimes($str){
 return $str . $str . $str;
}
    
echo repeatThreetimes("Marko!"); 

echo increaseenthusiasm(repeatThreeTimes("Marko")); 
