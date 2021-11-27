<?php
include_once 'header.php'
?>
<link rel="stylesheet" href="login_vikram.css">  
<section class="signup-form">
<h2> Student Login</h2>
<div class="container">
<form action="includes/login.inc.php" method="post">

<input type="text" name="uid" placeholder="Username/Email">
<input type="password" name="pwd" placeholder="Password">
<button type="submit" name="submit">Login</button>

</form>
</div>
<?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>You forgot to fill in all fields</p>";
    }

    elseif ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login information</p>"; 
    }
}


?>

</section>

<?php
include_once 'footer.php'
?>

