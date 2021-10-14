<?php
$reponse = "";
function isPrime($number) {
    for ($i = 2; $i < sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
if(isset($_GET[number])) {
    if (isPrime($_GET[number])) {
        $reponse = $_GET[number] . " est un nombre premier!";
    } else {
        $reponse = $_GET[number] . " n'est pas un nombre premier!";
    }
}

?>
<form action="/index.php" method="GET">
    <?php echo $reponse?>
    <input type="text" name="number" placeholder="number">
    <button type="submit">Submit</button>
</form>