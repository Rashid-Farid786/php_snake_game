<?php

if(isset($_POST['gameCount']) && isset($_POST['hiscore'])){
    
    // Create Connection to data base
    $con=mysqli_connect("localhost","root","","snakegame");
    $sql1="UPDATE params SET gameCount={$_POST['gameCount']}, hiscore={$_POST['hiscore']}";
    $result1=mysqli_query($con,$sql1);
    if(!mysqli_error($con)){
        echo "reset";
    }
}

?>