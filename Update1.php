<!DOCTYPE html>


<html>


<head>
    <title>Update</title>
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

        <h1>Update In</h1>
        <?php
        include ("config.php");
        $r=$_GET['re'];

        $query1=mysqli_query($conn,"select * from nameofrecord where SerialNo='$r' ");
        $query2=mysqli_query($conn,"select * from costrecord where SerialNo='$r' ");

        $row1=mysqli_fetch_assoc($query2);
        $row=mysqli_fetch_assoc($query1);


        echo '<input type="text" name="name" value='.$row['RecordName'].'><br/>';
        echo '<input type="text" name="amount" value='.$row1['Amount'].'><br/>';
        ?>
        <input type="submit" name="submit" value="Update">
        <input type="button" value="Back" onClick="parent.location='welcome.php'">

        <?php
        include ("config.php");
        session_start();
        if(isset($_POST['submit'])){
            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $amount = mysqli_real_escape_string($conn,$_POST['amount']);
            $query1=mysqli_query($conn,"update nameofrecord SET RecordName='$name' where SerialNo='$r' ");
            $query2=mysqli_query($conn,"update costrecord SET Amount='$amount' where SerialNo='$r' ");
            if($query1){
                header("location:welcome.php");
            }

        }

        ?>
    </form>

</div>



</body>



</html>
