 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h3>Simple Form </label>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    
    <label for="">EMAIL :</label>
    <input type="text" name="email"><br>
    <label for="">Password :</label>
    <input type="password" name="password"><br>
    <button type="submit" name="submit">SUBMIT</button>
    
</form>

<?php 


if(isset($_POST['submit']))
{

    $username = isset($_POST['email']) ? $_POST['email']:'';
    $password = isset($_POST['password']) ? $_POST['password']:'';

    if( empty($username) || empty($password)){
        echo "Required User Name And Password";
    }
    else{
        echo "ok";
    }
}






?>

    
</body>
</html>