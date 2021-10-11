<?php
function calcule($a, $operation,$b) {
    if ($operation == "+") {
        return $a + $b;
    } elseif ($operation == "-") {
        return $a - $b;
    } elseif ($operation == "*") {
        return $a * $b;
    } elseif ($b != 0) {
        if ($operation == "/") {
            return $a/$b;
        } elseif ($operation == "%") {
            return $a % $b;
        }
    } else {
        return "Impossible de diviser par zéro";
    }
}
?>