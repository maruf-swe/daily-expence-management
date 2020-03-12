<!DOCTYPE html>


<html>


    <head>
        <title>Sign Up</title>
    </head>

    <style>

        *{margin: 0; padding: 0;}
        body{background:black; font-family: sans-serif;}

        .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
        h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}

        input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}

        input[type="submit"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        input[type="submit"]:hover{ background: #a4b15c; transition: .6s;}

        ::placeholder{color: #fff;}

    </style>

    <body>

        <div class="form-wrap">

            <form method="post">

                <h1>Sign Up</h1>
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="username" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="date" name="date" placeholder="Date of Birth">
                <input type="submit" name="submit" value="Sign Up">
                <?php
                include ("config.php");
                if(isset($_POST['submit'])){
                    $name=mysqli_real_escape_string($conn,$_POST['name']);
                    $username=mysqli_real_escape_string($conn,$_POST['username']);
                    $email=mysqli_real_escape_string($conn,$_POST['email']);
                    $password=mysqli_real_escape_string($conn,$_POST['password']);
                    $date=mysqli_real_escape_string($conn,$_POST['date']);
                    $query1=mysqli_query($conn,"insert into userinfo values ('','$name','$username','$email','$date') ");
                    $query2=mysqli_query($conn,"insert into signin values ('$username','$password') ");
                    if($query1){
                        header("location:login.php");
                    }
                    else{
                        die("Error:Could not found".mysqli_error($conn));
                    }
                }

                ?>



            </form>

        </div>



    </body>



</html>
