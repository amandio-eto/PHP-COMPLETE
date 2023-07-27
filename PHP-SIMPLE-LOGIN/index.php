<?php


if(isset($_POST['submit']))
{
    $username = 'JoseAmandiodeAlmeida021099@gmail.com';
    $password = "123456";
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    $password_input = filter_input(INPUT_POST,'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $errors=[];
    
    if(!$email){
        $errors[] = "Email is Required";
    }
    if(!$password_input){
        $errors[] = "Password is Required";
    }
     if(!empty($email && $password_input)){
        if($username==$email && $password==$password_input)
        {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['email'] = $email;
            $alert = true;
            $message = "Success";

            header("Location:dashboard.php");
        }else{
            
            $alert = false;
            $message = "Email or Password is Incorrect";

        }

     }


      
}


  








?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login Simple</title>
  </head>
  <body>


    
        <div class="row justify-content-center mt-5" style="margin-top: 150px!important;">
    
            <div class="col-md-4">


            <?php if(isset($_POST['submit']) && $alert===true)  { ?>
                
                        <div class="alert alert-success" role="alert">
                        <?= $message ?>
                        </div>
                    
            
            <?php } ?>

            <?php if(isset($_POST['submit']) && $alert===false)  { ?>
                
                <div class="alert alert-danger" role="alert">
                <?= $message ?>
                </div>
            
    
    <?php } ?>



            <?php if(!empty($errors)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php foreach($errors as $error) { ?>
                        <li><?=$error; ?></li>
                    <?php } ?>
                </div>


            <?php } ?>

           

                  

                  

                        
                    
                
                 

           


            <div class="card">
            <div class="card-header text-center">
                Login Here
            </div>
            <div class="card-body">

            <form action="<?= $_SERVER['PHP-SELF'] ?>" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
              
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
               
            </div>
            </div>



            </div>
        </div>




















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>