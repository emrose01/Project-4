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
        
        <h3> Project 4 To-Do List</h3>
        <hr>
      
        <p>
 	      	<a href="Index.php"> My To-Do Lists </a>
        </p>

        <p>//need to make this call the Logout() function
 	      	<a href="Login.php"> Logout </a>
        </p>
        <p>
            Your Lists:

            <div>
                datbase list items here
                <a href="ViewList.php"> View Tasks </a>
            </div>

        </p>
      
    <form action="Create.php" method="POST">
      
        <h4> Create a new To-Do List </h4>
        <p>List Title</p>
          <input type="text" name='title'/>
      
        <input type="submit" value="Create List" onclick = "createList()" />

    </form>
        
    </body>

    <?php

        function createList(){


        }

    ?>
</html>
