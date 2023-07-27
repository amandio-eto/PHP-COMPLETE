

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

session_start();
if(isset($_POST['submit']))
{


}

?>

<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
<label for="">Username</label>
<input type="text" name="username"><br>

<label for="">Password :</label>
<input type="password" name="password" id="">
<br>
<button type="submit" name="submit">Submit</button>





</form>
    
</body>
</html>