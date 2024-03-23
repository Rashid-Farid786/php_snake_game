<?php
    $con=mysqli_connect("localhost","root","","snakegame");
    $sql="SELECT * FROM params WHERE id=1";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
      echo  json_encode(mysqli_fetch_assoc($result));
    }else{
        echo "query Error";
    }


?>