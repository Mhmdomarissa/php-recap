<?php

    setcookie("fav_food","pizza",time()+(86400*2),"/");
    setcookie("fav_drink","tea",time()+(86400*2),"/");
    setcookie("dessert","iceacream",time()+(86400*2),"/");

        // foreach($_COOKIE as $key => $value){
        //     echo "cookie :{$key} = {$value} <br>";
        // }


        if(isset($_COOKIE["fav_food"])){
            echo "your favorite food is {$_COOKIE["fav_food"]} <br>";
        }else{

            echo "your favorite food is not set <br>";
        }
    



 ?>
