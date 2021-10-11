<?php
$array = [200, 204, 173, 98, 171, 404, 459];
for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 == 0) {
        echo "$array[$i] est paire.<br />";
    } else {
        echo "$array[$i] est impaire.<br />";
    }
}
?>