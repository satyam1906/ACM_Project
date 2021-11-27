
<?php
include_once 'header.php'
?>

    <title>Profile Card</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="imgbox">
                <img src="Images/img1.jpeg">
            </div>

            <div class="content">
                <div class="details">
                <?php
                if (isset($_SESSION['studsuid'])) {
                        echo "<p> Hello  ".$_SESSION['studsuid']." !!</p>";
                        }
                ?>
                </div>
            </div>
        </div>
    </div>



    <?php
include_once 'footer.php'
?>