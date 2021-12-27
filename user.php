<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phone'];
    $password=$_POST['password'];

    $sql="insert into `crud` (name,email,phonenumber,password)
    values('$name','$email','$phonenumber','$password')";

    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully!";
        header('location:display.php');
    }else{
        die(mysqli_errno($con));
    }

}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>The CRUD Operation!</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name
                    <p>

                    </p>
                </label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
                <p>

                </p>
            </div>
            <div class="form-group">
                <label>Email
                    <p>

                    </p>
                </label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
                <p>

                </p>
            </div>
            <div class="form-group">
                <label>Phone number
                    <p>

                    </p>
                </label>
                <input type="text" class="form-control" placeholder="Enter your phone number" name="phone" autocomplete="off">
                <p>

                </p>
            </div>
            <div class="form-group">
                <label>Password
                    <p>

                    </p>
                </label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
                <p>

                </p>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>