<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
for ($i = 0; $i <= strlen($str); $i ++) {
        $strMin =  strtolower($str);
        if ($strMin[$i] != "a" && $strMin[$i] != "e" && $strMin[$i] != "i" && $strMin[$i] != "o" && $strMin[$i] != "u" && $strMin[$i] != "y" ) {
                echo "$str[$i]<br />";
        }
}
?>