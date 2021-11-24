<!--
Emily Morton
Cy Kovachevich
Ryan Mills
2 December 2021
CSC 390
Project 4 Login Page
-->

<?php include_once 'header.php'; ?>

    <body>
        
        <h2> Project 4 Login </h2>
        <hr>
        <p>
            <br>
            <form method = "post" action = "" >

                Username: <input class = "input" type = "text" name = "username"/> <br><br>
                Password: <input class = "input" type = "text" name = "password"/> <br><br>

                <button class = "submit" type = "submit" name = "submit">Login</button>
            </form>
        </p>


        <p>
            <h4><a href = "UserRegistration.php" > Click here to Register! </a></h4>
        </p>

        <?php
            // include_once 'submitLogin.php';
            
            //     $username = $_POST["username"];
            //     $password = $_POST["password"];

            //     $newLog = new Userauthenticator();
            //     $newLog ->authenticate($username, $password);
            
        ?>
        
    </body>
</html>
