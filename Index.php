<!--
Emily Morton
Cy Kovachevich
Ryan Mills
2 December 2021
CSC 390
Project 4 Index Homepage
-->

<?php include_once 'header.php'; ?>

    <body>
        
        <h2> Project 4 To-Do List</h2>
      
        <nav>
                <a class = "headerButton" href="Index.php"> My To-Do Lists </a>
       
            <!-- need to make this call the Logout() function -->
                <a class = "headerButton" href="Login.php"> Logout </a>

        </nav>

        <hr>

        <p>
            Your Lists:

            <div class = "dataList">
                datbase list items here <br>
                <a href="ViewList.php"> View Tasks </a>
            </div>

        </p>
      
    <form action="Create.php" method="POST">
        <br><br>
        <h4> Create a new To-Do List </h4>
        <p>List Title</p>
        <input class = "input" type="text" name='title'/>

        <input class = "submit" type="submit" value="Create List" onclick = "createList()" />

    </form>
        
    </body>

    <?php

        function createList(){


        }

    ?>
</html>
