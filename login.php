<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page:</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    <style>
        body {
            /* background-image: url(background.jpg); */
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
            form {
                margin-left: 2px;
                margin-right: 2px;
                margin-top: 5px;
            }

            body {
                background-image: url(background.jpg);
                background-repeat: no-repeat;
                background-size: cover;
            }
        }
    </style>

</head>

<body>

    <div class="container">
        <form action="<?php

                        use LDAP\Result;

                        $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="Login" value="Login">Submit</button>
            <br>
            <hr>
            New User? <br>Create Account
            <a href="register.php">Signup</a>
        </form>
        <?php



        if (isset($_POST['Login'])) {
            include 'config.php';
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password =  md5($_POST['password']);
        }
        $query = "select * from users where email ='{$email}' and password ='{$password}';";
        $result = mysqli_query($conn, $query) or die("result Query failed!");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION["email"] = $row['email'];
                $_SESSION["password"] = $row['password'];

                header("Location: {$hostname}/index.php");
            }
        } else {
            echo "<p style ='color :red ; text-align : center; marging 30px 0;'>User name and Password not matched with our database</p>";
        }

        mysqli_close($conn);
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>