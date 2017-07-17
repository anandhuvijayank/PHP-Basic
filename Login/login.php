<html>
<head>
	<title> Login Page</title>
    <link rel="stylesheet" type="text/css"  href="style.css">
</head>
<body>
<div id="frm1">
	<div  id="frm">
    <form action="loginprocess.php" method="post">
        <p>
        <label>User Name:</label>
        <input type="text" id="user" placeholder="User Name" name="user"/>
        </p>
        <p>
        <label>Password:</label>
        <input type="password" placeholder="password" id="pass" name="pass"/>
        </p>
        <p>
          <input type="submit" id="btn" value="Login"/>
        </p>
    </form>
    </div>
</div>
</body>
</html>