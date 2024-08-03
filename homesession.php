<?php

    session_start() ; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    this is homesession page <br>
    <a href="sessions.php">this goes to homesession</a>
    
</body>
</html>
<?php 
    
    echo $_SESSION["usernme"] . "<br>" ;
    echo $_SESSION["password"] . "<br>" ;
?>
