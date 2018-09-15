<?php
$x=$_POST['a'];
if($x=="")
{
    echo"fill all details";
}
else
{
    mysql_connect("localhost","root","");
    mysql_select_db("irctc");
    $query="SELECT * FROM users WHERE username='$x'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);
    if($count==0)
    {
        echo "user not found";
    }
    else
    {
        $query1="DELETE FROM users WHERE username='$x'";
        mysql_query($query1);
        echo "User deleted successfully";
    }
}

