<?php
    include_once 'connect.php';
    if(isset($_POST['submit']))
    {
        $query = "insert into users (username,email,password,role,contactno) values ('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."','user','".$_POST['contactno']."')";
        $res = mysqli_query($con,$query);
        if($res){
            echo "Registered Successfully!!!!";
            header("Location:index.php");
        }
        else{
            echo "Error occur while inserting category!!!!";
            echo mysqli_error($con);
        }
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
    <h1 class="text-primary text-uppercase">Add Category</h1>
    <form method="post" enctype="multipart/form-data">
    <table>
        <label>Enter User Name :<label>
        <input type="text" name="username" placeholder="Enter Product Name"/>
        <br/>
        <br/>
        <label>Enter Email:<label>
        <input type="email" name="email" placeholder="Enter Email"/>
        <br/>
        <br/>
        <label>Enter Password:<label>
        <input type="password" name="password" placeholder="Enter Password"/>
        <br/><br/>
        <label>Enter Contact No:<label>
        <input type="number" name="contactno" placeholder="Enter Contact No"/>
        <br/>
        <br/>
        <input type="submit" name="submit" value="Add Category"/> 
        <br/>
    </form>
</body>
</html>