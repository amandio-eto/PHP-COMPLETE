<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    if(isset($_POST['submit']))
    {
        $format = ['pdf','png','jped'];
        $extension = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
        if(in_array($extension, $format))
        {
            $temp_file = $_FILES['file']['tmp_name'];
            $file_name =uniqid().".$extension";
            $folder = 'docs/';
            if(move_uploaded_file($temp_file,$folder.$file_name)){
                $message= "Uploaded Success";

            }else{
                $message = "Failed Upload";

            }

        }else{
            $message= "Fomat Is Not Valid";

        }


        echo $message;
    }



?>

<form action="<?= $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
    <label for="">Upload File :</label>
    <input type="file" name="file">
    <button type="submit" name="submit">Submit</button>
</form>
    
</body>
</html>