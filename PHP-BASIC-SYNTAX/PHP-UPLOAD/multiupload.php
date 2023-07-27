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
    $format = ['png','jpg','gif','jpeg'];
    $total_upload = count($_FILES['arquive']['name']);
    $counter =0;
    
    while($counter <$total_upload){
        $extensi = pathinfo($_FILES['arquive']['name'][$counter],PATHINFO_EXTENSION);

    

    if(in_array($extensi,$format))
    {
        $folder = "file/";
        $temp = $_FILES['arquive']['tmp_name'][$counter];
        $file_name = uniqid().".$extensi";
        if(move_uploaded_file($temp,$folder.$file_name)){

            $message= "Upload File Is Success";
        }else{
                $message= "Failed To Upload";

                }
        
    }else{

        $message = "Format is Not Valid";
        
    }
    $counter++;

}
         echo $message;

}



?>



<form action="<?= $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
<input type="file" name="arquive[]"  multiple>
<button type="submit" name="submit">Save</button>
</form>
    
</body>
</html>