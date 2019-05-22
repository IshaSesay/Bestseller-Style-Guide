
<head>
    <meta charset="utf-8" />
    <title>Supplierportal-fonts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Isha Isatu Alvarado Sesay">      
    <link rel="stylesheet" href="https://use.typekit.net/lkb8lql.css">
    <link rel="stylesheet" type="text/css" href="../Css/Style.css">
    <link rel="stylesheet" type="text/css" href="login.css">

</head>



<?php
require "header.php";
?>

<main>
    <div class="wrapper-main">
        <h1>Sing up by filling in this form</h1>
        <br>
        <br>

            <form class="form-signup" action="actions/signup.act.php" method="post">
                <input type="text" name="uid" placeholder= "Username">
        <br>
        <br>
                <input type="text" name="mail" placeholder= "E-mail">
        <br>
        <br>
                <!--ved at sette indput type til passwpord, bliver
                 brugerens indtesset kode skjult og giver bedre sikkerhed-->
                <input type="password" name="Pwd" placeholder= "Password">
        <br>
        <br>
                <input type="password" name="Pwd-repeat" placeholder= "Repeat Password">
        <br>
        <br>
        <br>

                <button type="submit" name="signup-submit">Sign up</button>


            </form>
        
        <section class="section-defaul">
    </div>
<main>



