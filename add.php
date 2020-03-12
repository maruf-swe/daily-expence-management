<!DOCTYPE html>
<?php
session_start();
if($_SESSION["Username"]==""){
    header("location:login.php");
}
?>

<html>


    <head>
        <title>Sign Up</title>
    </head>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>

        *{margin: 0; padding: 0;}
        body{background: black; font-family: sans-serif;}

        .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px;text-align:center;
           box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
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

                <h1>Add Record</h1>
                <input type="Date" name="date" placeholder="">
                <input type="text"  name="name" placeholder="Naame of Work" required>
                <input type="text" name="amount" placeholder="Amount">

                <input type="submit" name="submit" value="Submit">
                <input type="button" value="Back" onClick="parent.location='welcome.php'">

                <?php
                include ("config.php");
                if(isset($_POST['submit'])){
                    $us=$_SESSION["Username"];
                    $name=mysqli_real_escape_string($conn,$_POST['name']);
                    $am=mysqli_real_escape_string($conn,$_POST['amount']);
                    $date=mysqli_real_escape_string($conn,$_POST['date']);
                    $amount=number_format($am);
                    $query1=mysqli_query($conn,"insert into nameofrecord values ('','$us','$date','$name') ");
                    $query1=mysqli_query($conn,"insert into costrecord values ('','$us','$date','$amount') ");

                    if($query1){
                        header("location:welcome.php");
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
