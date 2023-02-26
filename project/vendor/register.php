<?php


include_once "../shared/connection.php";


$uname=$_POST['username'];
$uemail=$_POST['email'];
$upass=$_POST['password'];


$res_obj=mysqli_query($conn,"select * from seller where sellername='$uname'");
$count=mysqli_num_rows($res_obj);

echo "count=$count";
if($count==0) // the username is not in existing table
{   
    $status=mysqli_query($conn,"insert into seller(sellername,email,password) values('$uname','$uemail','$upass')");
    if($status)
    {
        echo "Registration Success!";
        header('location:login.html');
    }
    else
    {
        echo mysqli_error($conn);
    }    
}
else
{
    echo "User name already exists, try alternative names!!";
}


?>