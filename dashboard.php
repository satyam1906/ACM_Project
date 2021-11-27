<?php
include_once 'header.php'
?>

<section>
<?php
if (isset($_SESSION['usersuid'])) {
        echo "<p> Hello  ".$_SESSION['usersuid']." !!</p>";
        }
?>


</section>

<?php
include_once 'footer.php'
?>