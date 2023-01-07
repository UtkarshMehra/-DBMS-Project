<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    <style>
        body{
            background-image: url(background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        form {
            align-items: center;
            background-color: gainsboro;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
            padding: 30px;
            box-shadow: 1px 0 16px 5px gray;

        }
        @media (max-width:800px) {
            form{
                margin-left: 2px;
                margin-right: 2px;
                margin-top: 5px;
            }
            body{
            background-image: url(background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        }
    </style>

</head>

<body>
   
    <div class="container">
        <?php 
    if(isset($_POST['save'])){
    include 'config.php';
    $name =mysqli_real_escape_string($conn, $_POST['name']);
    $phone =mysqli_real_escape_string($conn,$_POST['phone']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password =mysqli_real_escape_string($conn,md5($_POST['password']));
    

    
   
        $sql1 = "insert into users(Name,phone ,email,password)
                values('{$name}','{$phone}','{$email}','{$password}');";
            
        if(mysqli_query($conn,$sql1)){
            header("Location: {$hostname}/login.php");
        }
    

}
?>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method ="POST" autocomplete="off">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name" required>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Phone:</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="phone">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input type="submit"  name="save" class="btn btn-primary" value="Save" required />
            <br><hr>
            Already Register?<a href="login.php">Login</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>