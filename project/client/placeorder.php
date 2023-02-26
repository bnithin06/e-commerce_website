<?php
$name=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];


include_once "../shared/connection.php";

session_start();
$userid=$_SESSION['userid'];

        $cart_result=mysqli_query($conn,"select * from cart where userid=$userid");
        while($cartrow=mysqli_fetch_assoc($cart_result))
        {
            print_r($cartrow);
            echo "<br>";
            $pid=$cartrow['pid'];
            $status=mysqli_query($conn,"insert into orders(userid,pid,name,mobile,email,address) values('$userid','$pid','$name','$mobile','$email','$address')");
            if($status)
            {
            echo "order placed sucessful!";
            header("location:ordersucess.php");
            }
            else
            {
            echo mysqli_error($conn);
        } 
    
        } 
    
    $Status=mysqli_query($conn,"delete from cart where userid=$userid");
    if($Status){
        echo "Order placed sucessfully";
    }
    else{
        "error in sQl syntax";
    }



?>