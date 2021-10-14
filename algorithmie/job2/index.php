<?php

function getRows() {
    $keys = array_keys($_POST);
    $rows = "";
    foreach($keys as $key) {
        $rows .= "<tr><td>$key</td><td>$_POST[$key]</td></tr>";
        
    }
    echo $rows;
}



?>
<table>
    <thead>
        <tr>
            <th>argument</th>
            <th>valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php getRows()?>
    </tbody>
</table>

