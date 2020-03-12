<!DOCTYPE html>
<?php
session_destroy();
?>


<html>


    <head>
        <title>log In</title>
    </head>

    <style>

        *{margin: 0; padding: 0;}
        body{background: black; font-family: sans-serif;}

        .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
        h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}

        input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}

        input[type="button"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        input[type="button"]:hover{ background: #a4b15c; transition: .6s;}

        input[type="submit"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        input[type="submit"]:hover{ background: #a4b15c; transition: .6s;}

        ::placeholder{color: #fff;}




    </style>

    <body>

        <div class="form-wrap">

            <form method="post">

                <h1>Log In</h1>
                <input type="text" name="email" placeholder="username" required>
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Sign in">
                <input type="button" value="Create new Account" onClick="parent.location='Signup.php'">


                <?php
                include ("config.php");
                session_start();
                if(isset($_POST['submit'])){
                    $username = mysqli_real_escape_string($conn,$_POST['email']);
                    $password = mysqli_real_escape_string($conn,$_POST['password']);
                    $query1=mysqli_query($conn,"select * from signin where UserName='$username' && Password='$password'");
                    $row=mysqli_fetch_assoc($query1);
                    $_SESSION["Username"]=$username;
                    if($username==""){
                        header("location:login.php");
                    }
                    else if($row['UserName']==$username && $row['Password']==$password){
                        header("location:welcome.php");

                    }
                    else{
                        header("location:login.php");
                    }

                }

                ?>
            </form>

        </div>



    </body>



</html>
