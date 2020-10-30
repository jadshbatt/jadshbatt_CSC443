<html>

<head></head>

<body>
<form method="GET">
    <fieldset>
    <legend>Sign In</legend>
    Username: <input name="txt_username"/><br>
    Password: <input type="password"  name="txt_password"/><br>
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
$result= executeQuery($connection, "CREATE TABLE users(
id INT(32) auto_increment PRIMARY KEY,
username VARCHAR(255),
password VARCHAR(255),
birthday VARCHAR(225),
)");

if(isset($_GET["txtResponseVal"]))
{
    $result= signInUser($connection,"users",$_GET["txt_username"],$_GET["txt_password"]);
    $found = false;
    if($result==-1)
    {
        alert("password is wrong");

    }
    else if($result==-2)
    {
        alert("user does not exist");
        echo("ma mshi lhal");
    }
    else if($result==1)
    {
        alert("signed in");
        header("Location:./signin.html");
    }
}


?>