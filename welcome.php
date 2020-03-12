<!DOCTYPE html>
<?php
session_start();
if($_SESSION["Username"]==""){
    header("location:login.php");
}
?>

<html>


    <head>
        <title>Home</title>
    </head>

    <style>

        *{margin: 0; padding: 0;}
        body{background: black; font-family: sans-serif;}

        .form-wrap{ width: 400px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
        h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}

        input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}

        input[type="submit"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        input[type="submit"]:hover{ background: #a4b15c; transition: .6s;}

        ::placeholder{color: #fff;}


ul {
 list-style-type: none;
  margin: 0;
  padding: 0;
 overflow: hidden;

}




li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: orange;
}

.active {
  background-color: red;
}


    </style>

    <body>

        <div class="form-wrap">
            <h1>Daily Expense Management</h1>
        <hr>
        <ul>
          <li><a class="active" href="add.php">Add Record</a></li>
          <li><a href="Delete.php" >Delete Record</a></li>
          <li><a href="view.php" >View</a></li>
          <li><a href="update.php" >Update</a></li>
           <li><a href="login.php" >Log out</a></li>

        </ul>


        </div>



    </body>



</html>
