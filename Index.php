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
      
        <p>
 	      	<a href="Login.php"> Logout </a>
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
