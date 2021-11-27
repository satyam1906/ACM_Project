<?php
include_once 'header.php'
?>

<section>
<?php
if (isset($_SESSION['studsuid'])) {
        echo "<p> Hello  ".$_SESSION['studsuid']." !!</p>";
        }
?>


</section>

<?php
include_once 'footer.php'
?>