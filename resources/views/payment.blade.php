<?php
    $base = $_SERVER['REQUEST_URI'];
?>

<form action="/payment" method="POST">
@csrf
    <input type="submit" value="Pay with Snap Redirect">
</form>