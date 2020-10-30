<html>

<head></head>

<body>
    <form method="POST">
    <fieldset>
    <legend>Sign Up</legend>
    Username: <input name="txt_username"/><br>
    Password: <input type="password"  name="txt_password"/><br>
    Confirm Password: <input type="password"  name="txt_ccpassword"/><br>
    Birthday <input type="text" name="txt_birthday"/><br>
    <input type="submit" value="Submit"/>
    </fieldset>
    </form>
    <br>
</body>

</html>
<?php

require("./database.php");
$connection = connectServer("localhost","root","");
$result= executeQuery($connection,"create database test_db_2");
$connection = connectDb("localhost","root","","test_db_2");
$result= executeQuery($connection, "create table users(
id int(32) auto_increment primary key,
username varchar(255),
password varchar(255),
birthday varchar(225),
)");

if(isset($_POST["txtResponseVal"]))
{
    $result= addUser($connection,"users",$_POST["txt_username"],$_POST["txt_password"],$_POST["txt_ccpassword"],$_POST["txt_birthday"]);
    if($result==-1)
    {
        alert("user exists");

    }
    else if($result==-2)
    {
        alert("check password doesnot match");
    }
    else if($result==1)
    {
        alert("user added");
        header("Location:./signup.html");
    }
}


?>