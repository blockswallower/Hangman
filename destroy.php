<?php
session_start();
session_destroy();
session_unset();
?>

<h1>Game ended!</h1>

<form action="index.php">
    <input type="submit" value="play again?">
</form>