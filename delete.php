<?php
    $con = mysqli_connect('localhost','root','','cookwise');

    $phoneoremail = $_POST['phoneoremail'];
    
 $check = mysqli_query($con,"DELETE FROM userdata WHERE phoneoremail = '$phoneoremail'");

    if($check > 0){
        header("Location:http://localhost/cookwise/index.html");
    
    }

?>