


<?php
require "header.php";
?>





  <!---login form med brugerens oplysninger---->

<div class="login-container">
    <form action="actions/login.act.php" method="post">


        <div class= "user">
            <input type="text" name="mailuid" placeholder="Username/Email...">
        </div>
         
        <div class= "password">
            <input type="password" name="pwd" placeholder="Password...">
        </div>

        <div class= "Login">
             <button type="submit" name="login-submit">Log in</button>
        </div>
    </form>

    <br>
            <br>

 <!---mulighed for brugeren at oprette sig---->
 <div class= "Signup">
    <a href="signup.php"> Sign up</a>
</div>
</div>





<main>
<p> You are logged out!</p>
<p>you are logged in!</p>
</main>