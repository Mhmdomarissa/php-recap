<?php

    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    this is loigin page <br>
    <a href="homesession.php">this goes to homesession</a>
    
</body>
</html>
<?php
    $_SESSION["usernme"]= "ali"; 
    $_SESSION["password"]= "123" ;
    
    echo $_SESSION["usernme"] . "<br>" ;
    echo $_SESSION["password"] . "<br>" ;

?>