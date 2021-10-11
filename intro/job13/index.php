<?php
function nombreFacteur($n) {
  $count=2;
  $Racine=sqrt($n);
  for($i=2; $i<=$Racine;$i++) if($n % $i == 0) $count++;
  return $count;
}
 
function premier($n) {
  return (NombreFacteur($n)==2);
}
 

 

function nombrePremiers() {
    for($i=2; $i<1000; $i++) {
        if(Premier($i)) {
            echo "$i<br />";
        }
    }
}
?>