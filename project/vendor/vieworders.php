<?php


include_once "../shared/connection.php";
$sql_result=mysqli_query($conn,"select * from orders");

echo "<table border='1' cellpadding='10'>
<thead>
<tr>
<div>

<th>#orderid</th>
<th>#userid </th>
<th>#pid</th>
<th>#created_at</th>
<th>#name</th>
<th>#mobile</th>
<th>#Address</th>
<th>#Email</th>

</div>

</thead>
<tbody>
";
while($row=mysqli_fetch_assoc($sql_result)){
    $oid=$row['oid'];
    $userid=$row["userid"];
    $pid=$row['pid'];
    $created_date=$row["created_date"];
    $name=$row['name'];
    $mobile=$row['mobile'];
    $address=$row['address'];
    $emial=$row['email'];

    echo "<tr>

        <td>$oid</td>
        <td>$userid</td>
        <td>$pid</td>
        <td>$created_date</td>
        <td>$name</td>
        <td>$mobile</td>
        <td>$address</td>
        <td>$emial</td>
        <td><a href='#'><button class='bd'>Deliver</button></a></td>



    </tr>";


}

echo "
</tbody>
</table>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .bd{
                background-color:blue;
                color:white;
                padding:6px 18px;
                border-radius:5px;
                font-size:17px;
                font-family: calibri;
                border: 0ch solid  #04AA6D;
            }
        </style>
    </head>
    <body></body>

</html>