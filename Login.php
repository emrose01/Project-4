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
        
        <h3> Project 4 Login </h3>
        <hr>
        <p>
            <br>
            <form method = "post" action = "" >

                Username: <input type = "text" name = "username"/> <br><br>
                Password: <input type = "text" name = "password"/> <br><br>

                <button type = "submit" name = "submit">Login</button>
            </form>
        </p>

        <?php
            include_once 'submitLogin.php';
            
                $username = $_POST["username"];
                $password = $_POST["password"];

                $newLog = new Userauthenticator();
                $newLog ->authenticate($username, $password);
            
        ?>
        
    </body>
</html>
