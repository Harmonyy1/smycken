<?php

    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "smycken";
    $conn = mysqli_connect($server, $user, $pass, $db);

    $sql = "SELECT * FROM produkter WHERE Typ='Halsband' ORDER BY id ASC";

    $produktlista = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="halsband.css"> 


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">

</head>
<body>

    <header>
        <div class="head">

            <div class="name">
                <a href="./landingpage.html">SERENITY GEMS</a>
            </div>

            <div class="headermenu">
                <div class="halsband">
                    <a href="./halsband.php">HALSBAND</a>
                </div>

                <div class="armband">
                    <a href="./armband.php">ARMBAND</a>
                </div>

                <div class="örhängen">
                    <a href="./örhängen.php">ÖRHÄNGEN</a>
                </div>

                <div class="icon-cart">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                    </svg>
                    <span>0</span>
                </div>
    
            </div>
        </div>
    </header>

    <div class="main">


        <div class="products">

            <div class="row1">
                <?php
                    while($rad=mysqli_fetch_assoc($produktlista)){
                ?>
                <div class="product1">
                    <div class="img1">
                        <img src="<?=$rad['image']?>" alt="">
                        <div class="txt1"><?=$rad['name']?></div>
                    </div>

                    <?php
                        if(isset($_POST['btn-atc'])){
                            echo 'Hello everybody... you just clicked on this button';
                            //global $mysqli;
                            //$mysqli -> insert(
                                //$mysqli -> prefix.'shoppingcart',
                                //[
                                    //'title'     => 'This is our first product title'
                                //]
                            //);
                        }
                    ?>

                    <form method="post">
                        <input type ="submit" name="btn-atc" value="Lägg i kundvagnen">
                    </form>


                </div>

                <?php
                }
                ?>

            </div>    
        </div>
    </div>






</body>
</html>