<html>
<head>
<title>Authentication Details</title>
</head>
<body>
<center>
<img src =  "techie.png" width = "200" height = "200"/> 
</center>
<style>
#user
{
text-align:center;
margin:30px;
vertical-align: center;
}
</style>
<h1 style = "text-align:center; margin:30px;">Login Details</h1>
<form id = "user" method = "POST">
Username:
<input type = "text" value = "" name = "us"/>
<br><br>Password:
<input type = "password" value = "" name = "ps"/>
<br><br>
<input type = "submit" value = "Submit" name = "test" id = "text"/>
</form>
<style>
#hey
{
color:darkViolet;
font-size:25;
text-align:center;

}</style>
<footer id = "hey">
<p>Made by Mohit Khotani, Saksham Gupta and Sudhanshu Singh Rathore</p>
</footer>
</body>
</html>

<?php
if(isset($_POST['us'])&&isset($_POST['ps'])&&!empty($_POST['us'])&&!empty($_POST['ps']))
{
$user1 = $_POST['us'];
$pass = $_POST['ps'];

if($user1 == 'admin'&& $pass == 'pi')
{
require "project6.php";
echo 'OK';
}
}
?>



