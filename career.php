<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        :root {
            --body-color: #E4E9F7;
            --nav-color: #bb40f4;
            --side-nav: #010718;
            --text-color: #FFF;
            --search-bar: #F2F2F2;
            --search-text: #010718;
        }

        body {
            height: 100vh;
            background-color: var(--body-color);
        }

        body.dark {
            --body-color: #18191A;
            --nav-color: #444372;
            --side-nav: #242526;
            --text-color: #CCC;
            --search-bar: #242526;
        }

        section {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 110px 100px;
        }

        @media (max-width:1000px) {
            section {
                padding: 100px 50px;
            }
        }

        @media (max-width:600px) {
            section {
                padding: 125px 30px;
            }
        }

        section p {
            max-width: 800px;
            text-align: center;
            margin-bottom: 35px;
            padding: 0 20px;
            line-height: 2;
        }

        .banner-area {
            position: relative;
            justify-content: center;
            min-height: 100vh;
            color: #fff;
            text-align: center;
        }

        .banner-area .banner-img {
            background-image: url(https://i.postimg.cc/mDHBPC8y/2.jpg);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-background-size: cover;
            background-size: cover;
            z-index: -1;
        }

        .banner-area .banner-img:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            opacity: .8;
        }

        .banner-area h1 {
            margin-bottom: 15px;
            font-size: 65px;
            font-family: merienda;
        }

        .banner-area h3 {
            margin-bottom: 40px;
            font-size: 25px;
        }

        /* .banner-area a.banner-btn {
            padding: 15px 35px;
            background: rgb(52, 82, 164);
            border-radius: 50px;
            text-transform: uppercase;
            color: black;
            text-decoration: solid;
        } */

        @media (max-width:800px) {
            .banner-area {
                min-height: 600px;
            }

            .banner-area h1 {
                font-size: 32px;
            }

            .banner-area h3 {
                font-size: 20px;
            }

            /* .banner-area a.banner-btn {
                padding: 15px 40px;
            } */
        }


        .container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            padding: 25px 20px;
        }

        .container .heading {
            font-size: 40px;
            margin-bottom: 20px;
            color: #334;
        }

        .container .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
        }

        .container .box-container .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            display: none;
        }

        .container .box-container .box:nth-child(1),
        .container .box-container .box:nth-child(2),
        .container .box-container .box:nth-child(3) {
            display: inline-block;
        }



        .container .box-container .box .content h3 {
            font-size: 20px;
            color: #334;
        }

        .container .box-container .box .content p {
            font-size: 15px;
            color: #777;
            line-height: 2;
            padding: 15px 0;
        }

        /* .container .box-container .box .content .btn {
            display: inline-block;
            padding: 10px 30px;
            border: 1px solid #334;
            color: #334;
            font-size: 16px;
        }

        .container .box-container .box .content .btn:hover {
            background-color: crimson;
            border-color: crimson;
            color: #fff;
        } */

        .container .box-container .box .content .icons {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #334;
        }

        .container .box-container .box .content .icons span {
            font-size: 14px;
            color: #777;
        }

        .container .box-container .box .content .icons span i {
            color: crimson;
            padding-right: 5px;
        }



        @media (max-width:450px) {

            .container .heading {
                color: orange;
                font-size: 35px;
                text-align: center;
                padding: 10px;
                font-family: cosmic, sans-serif;
                text-transform: uppercase;
            }

            .container .box-container {
                grid-template-columns: 1fr;
            }

            .container .box-container .box .image {
                height: 200px;
            }

            .container .box-container .box .content p {
                font-size: 12px;
            }

            .container .box-container .box .content .icons span {
                font-size: 12px;
            }

        }
    </style>
</head>

<body>
    <section class="banner-area">
        <div class="banner-img"></div>
        <h1>Job Portal</h1>
        <h3>Best jobs available matching Your skills..</h3>
        <!-- <a class="banner-btn" href="#">
         <h4>Shop now</h4>
      </a> -->
    </section>
    <?php
    include 'config.php';
    $selectquery = "select * from post;";
    $query = mysqli_query($conn, $selectquery) or die("worng query");
    while ($res = mysqli_fetch_assoc($query)) {
    ?>
        <div class="container">
            <div class="box-container">
                <div class=" box">
                    <div class="content">
                        <h3><b>Position:</b><?php echo $res['position'] ?></h3>
                        <h2><b>Company:</b><?php echo $res['company'] ?></h2>
                        <p><b>Description:</b><?php echo $res['description'] ?></p>
                        <h4><b>skills:</b><i><?php echo $res['skills'] ?></i></h4>
                        <h4><b>job location:</b><i><?php echo $res['location'] ?></i></h4>
                        <h4><b>ctc</b><i><?php echo $res['ctc'] ?></i></h4>
                        <div class="w3-container">
                            <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green">Apply Now</button>
                            <div id="id01" class="w3-modal">
                                <div class="w3-modal-content">
                                    <div class="w3-container">
                                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                        <?php if (isset($_POST['save'])) {
                                            include 'config.php';
                                            $candidate = $_POST['candidate'];
                                            $apply = $_POST['apply'];
                                            $qualification =  $_POST['qualification'];
                                            $qualificationmarks =  $_POST['qualificationmarks'];
                                            $year = $_POST['year'];
                                            $sql3 = "insert into candidate (candidate, apply ,qualification,qualificationmarks,year)
                                             values('{$candidate}','{$apply}','{$qualification}','{$qualificationmarks}','{$year}');";
                                            if (mysqli_query($conn, $sql3)) { ?>
                                                <script>
                                                    window.location.href = 'http://localhost/1stop/career.php';
                                                </script>
                                        <?php  }
                                        }
                                        ?>
                                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" style="padding: 10px;">
                                            <div class="mb-3">
                                                <label for="candidate Name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="" name="candidate">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputapply" class="form-label">Applying For</label>
                                                <input type="text" class="form-control" id="exampleInputapply" name="apply">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputqualification" class="form-label">Highest Qualification</label>
                                                <input type="text" class="form-control" id="exampleInputqualification" name="qualification">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputqualificationmarks" class="form-label">Qualification Marks</label>
                                                <input type="text" class="form-control" id="exampleInputqualificationmarks" name="qualificationmarks">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputyear" class="form-label">Pass Out</label>
                                                <input type="text" class="form-control" id="exampleInputyear" name="year">
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="save" value="save">Submit</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="icons">
                            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
                            <span> <i class="fas fa-user"></i> by admin </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</body>

</html>