<html>
<head>
<title>verify login</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<?php
       $conn=@mysql_connect("localhost",'root','') or die("Database connected fail！");;
       mysql_select_db("users",$conn) or die("Database not exist");
       $name=$_POST['username'];
       $pwd=$_POST['password'];
       $sql="select * from users where username='$name' and password='$pwd'";
       $query=mysql_query($sql);
       $arr=mysql_fetch_array($query);
       if(is_array($arr)){
              echo "<font color='blue'>Welcome, ".$row['user']."!</font>";
       }else{
              echo "username or password incorrect!";
       }
?>
</body>
</html>