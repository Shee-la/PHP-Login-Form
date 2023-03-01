<?php
include("connection.php");
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>LOG IN</h1>
        <form name="form" action="loginlogic.php" onsubmit="return isvalid()" method="post">
<label>username </label>
<input type="text" id="user" name="user">
<br><br>
<label>password</label>
<input type="password" id="pass" name="pass"><br><br>
<input type="submit" id="btn" value="LOGIN" name="submit"/>
</form>
</div>
<script>
function isvalid() {
    var user = document.form.user.value;
    var pass = document.form.pass.value;
    if (user.length=="" && pass.length==""){
        alert("username and password field is empty");
        return false
    }
else {
    if (user.length=="" ){
        alert("username empty");
        return false
}
if (pass.length=="" ){
        alert("password is empty");
        return false
}
}
}
</script>
</body>
</html>