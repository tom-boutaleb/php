<?php
    if (isset($_POST[username]) && isset($_POST[password])) {
        if ($_POST[username] === "John" && $_POST[password] === "Rambo") {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
    
?>

<form action="/index.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="password" placeholder="Password">
    <button type="submit">Submit</button>
</form>