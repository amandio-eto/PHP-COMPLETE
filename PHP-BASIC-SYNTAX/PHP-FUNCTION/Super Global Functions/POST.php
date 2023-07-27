 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h3>Simple Form </label>
<form action="" method="post">
    
    <label for="">Username :</label>
    <input type="text" name="username"><br>
    <label for="">Password :</label>
    <input type="password" name="password"><br>
    <button type="submit">SUBMIT</button>
    
</form>

<?php 

$username = $_POST['username'];
$password = $_POST['password'];


echo "Your Username is $username".'<br>';
echo "Your Password is $password".'<br>';


?>

    
</body>
</html>