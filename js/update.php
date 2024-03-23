<?php
// Check if Data Not Empty
if(isset($_POST['gameCount']) && isset($_POST['hiscore'])){
    
    // Create Connection to data base
    $con=mysqli_connect("localhost","root","","snakegame");

    // check if already exist data is greater then latter
    $sql="SELECT * FROM params";
    $result=mysqli_query($con,$sql);
    $save;
    if(mysqli_num_rows($result)>0){
       $data=mysqli_fetch_assoc($result);
        if($data['hiscore']<=$_POST['hiscore']){
            $hiscore=$_POST['hiscore'];
        }else{
            $hiscore=$data['hiscore'];
        }
        if($data['gameCount']<=$_POST['gameCount']){
            $gameCount=$_POST['gameCount'];
        }else{
            $gameCount=$data['gameCount'];
        }
    }
    // update database
    $sql1="UPDATE params SET gameCount={$gameCount}, hiscore={$hiscore}";
    $result1=mysqli_query($con,$sql1);
    if(!mysqli_error($con)){
        echo "Update";
    }
}



?>