<?php
function putSpace(int $number) {
    $spaces = "";
    for ($i=0; $i < $number; $i++) { 
      $spaces .= ' ';
    }
    return $spaces;

}

function putUnderscore(int $number) {
    $underscores = "";
    for ($i=0; $i < $number; $i++) { 
        $underscores .= "_";
    }
    return $underscores;
}

if (isset($_GET[width]) && isset($_GET[height])) {
    $width = (int)$_GET[width];
    $heigth = (int)$_GET[height];
    $res = "<pre>";
    for ($i=0; $i < $heigth; $i++) { 
        $line = "";
        $spacesBefore = floor($width / 2 - $i);
        $spacesInside = floor($i * 2);
        $line .= putSpace($spacesBefore) . "/" . putUnderscore($spacesInside) . "\\<br />";
        $res .= $line;
    }
    for ($i=0; $i < $heigth - 1; $i++) { 
        $line = "";
        $line .= "|" . putSpace($width) . "|<br />";
        $res .= $line;
    }
    $res .= "|". putUnderscore($width) . "|</pre>";
    
}
?>
<?=$res?>
<form action="/index.php" method="GET">
    <input type="number" name="width" placeholder="largeur">
    <input type="number" name="height" placeholder="hauteur">
    <button type="submit">Submit</button>
</form>
