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

        nav {
            position: fixed;
            top: 0;
            left: 0;
            height: 70px;
            width: 100%;
            background-color: var(--nav-color);
            z-index: 100;
        }

        body.dark nav {
            border: 1px solid grey;

        }

        nav .nav-bar {
            position: relative;
            height: 100%;
            max-width: 1000px;
            width: 100%;
            background-color: var(--nav-color);
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav .nav-bar .sidebarOpen {
            color: var(--text-color);
            font-size: 25px;
            padding: 5px;
            cursor: pointer;
            display: none;
        }

        nav .nav-bar .logo a {
            font-size: 25px;
            font-weight: 500;
            color: var(--text-color);
            text-decoration: none;
        }

        .menu .logo-toggle {
            display: none;
        }

        .nav-bar .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-bar .nav-links li {
            margin: 0 5px;
            list-style: none;
        }

        .nav-links li a {
            position: relative;
            font-size: 17px;
            font-weight: 400;
            color: var(--text-color);
            text-decoration: none;
            padding: 10px;
        }

        .nav-links li a::before {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            height: 6px;
            width: 6px;
            border-radius: 50%;
            background-color: var(--text-color);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .nav-links li:hover a::before {
            opacity: 1;
        }

        .nav-bar .darkLight-searchBox {
            display: flex;
            align-items: center;
        }

        .darkLight-searchBox .dark-light,
        .darkLight-searchBox .searchToggle {
            height: 40px;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
        }

        .dark-light i,
        .searchToggle i {
            position: absolute;
            color: var(--text-color);
            font-size: 22px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dark-light i.sun {
            opacity: 0;
            pointer-events: none;
        }

        .dark-light.active i.sun {
            opacity: 1;
            pointer-events: auto;
        }

        .dark-light.active i.moon {
            opacity: 0;
            pointer-events: none;
        }

        .searchToggle i.cancel {
            opacity: 0;
            pointer-events: none;
        }

        .searchToggle.active i.cancel {
            opacity: 1;
            pointer-events: auto;
        }

        .searchToggle.active i.search {
            opacity: 0;
            pointer-events: none;
        }

        .searchBox {
            position: relative;
        }

        .searchBox .search-field {
            position: absolute;
            bottom: -85px;
            right: 5px;
            height: 50px;
            width: 300px;
            display: flex;
            align-items: center;
            background-color: var(--nav-color);
            padding: 3px;
            border-radius: 6px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .searchToggle.active~.search-field {
            bottom: -74px;
            opacity: 1;
            pointer-events: auto;
        }

        .search-field::before {
            content: '';
            position: absolute;
            right: 14px;
            top: -4px;
            height: 12px;
            width: 12px;
            background-color: var(--nav-color);
            transform: rotate(-45deg);
            z-index: -1;
        }

        .search-field input {
            height: 100%;
            width: 100%;
            padding: 0 45px 0 15px;
            outline: none;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 400;
            color: var(--search-text);
            background-color: var(--search-bar);
        }

        body.dark .search-field input {
            color: var(--text-color);
        }

        .search-field i {
            position: absolute;
            color: var(--nav-color);
            right: 15px;
            font-size: 22px;
            cursor: pointer;
        }

        body.dark .search-field i {
            color: var(--text-color);
        }

        @media (max-width: 790px) {
            nav .nav-bar .sidebarOpen {
                display: block;
            }

            .menu {
                position: fixed;
                height: 100%;
                width: 320px;
                left: -100%;
                top: 0;
                padding: 20px;
                background-color: var(--side-nav);
                z-index: 100;
                transition: all 0.4s ease;
            }

            nav.active .menu {
                left: -0%;
            }

            nav.active .nav-bar .navLogo a {
                opacity: 0;
                transition: all 0.3s ease;
            }

            .menu .logo-toggle {
                display: block;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .logo-toggle .siderbarClose {
                color: var(--text-color);
                font-size: 24px;
                cursor: pointer;
            }

            .nav-bar .nav-links {
                flex-direction: column;
                padding-top: 30px;
            }

            .nav-links li a {
                display: block;
                margin-top: 20px;
            }
        }

        /* end of navigation bar */

        /* main */
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

        .banner-area a.banner-btn {
            padding: 15px 35px;
            background: rgb(52, 82, 164);
            border-radius: 50px;
            text-transform: uppercase;
            color: black;
            text-decoration: solid;
        }

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

            .banner-area a.banner-btn {
                padding: 15px 40px;
            }
        }

        .sidebar {
            margin: 0;
            margin-top: 50px;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: right;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo navLogo"><a href="#">1stop</a></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">1stop</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>
                <ul class="nav-links">

                    <li><a href="index.php">Jobs</a></li>
                    <li><a href="jobs.php">Candidate
                            Applied</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="login.php">Login/Register</a></li>
                </ul>
            </div>
            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                    <div class="searchToggle">
                        <i class='bx bx-x cancel'></i>
                        <i class='bx bx-search search'></i>
                    </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
        const body = document.querySelector("body"),
            nav = document.querySelector("nav"),
            modeToggle = document.querySelector(".dark-light"),
            searchToggle = document.querySelector(".searchToggle"),
            sidebarOpen = document.querySelector(".sidebarOpen"),
            siderbarClose = document.querySelector(".siderbarClose");

        let getMode = localStorage.getItem("mode");
        if (getMode && getMode === "dark-mode") {
            body.classList.add("dark");
        }

        modeToggle.addEventListener("click", () => {
            modeToggle.classList.toggle("active");
            body.classList.toggle("dark");

            if (!body.classList.contains("dark")) {
                localStorage.setItem("mode", "light-mode");
            } else {
                localStorage.setItem("mode", "dark-mode");
            }
        });

        searchToggle.addEventListener("click", () => {
            searchToggle.classList.toggle("active");
        });

        sidebarOpen.addEventListener("click", () => {
            nav.classList.add("active");
        });

        body.addEventListener("click", e => {
            let clickedElm = e.target;

            if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")) {
                nav.classList.remove("active");
            }
        });
    </script>

    <br><br><br><br>
    <div class="content">

        <p>
            <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                </a> -->
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Post Job
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <?php if (isset($_POST['save'])) {
                    include 'config.php';
                    $company = $_POST['company'];
                    $position = $_POST['position'];
                    $description =  $_POST['description'];
                    $skills = $_POST['skills'];
                    $location =$_POST['location'];
                    $ctc = $_POST['ctc'];
                    $sql2 = "insert into post (company, position ,description,skills,location,ctc)
                 values('{$company}','{$position}','{$description}','{$skills}','{$location}','{ $ctc}');";
                    if (mysqli_query($conn, $sql2)) { ?>
                        <script>
                            window.location.href = 'http://localhost/1stop/jobs.php';
                        </script>
                <?php  }
                }
                ?>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="mb-3">
                        <label for="Company Name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="" name="company">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPosition" class="form-label">Position</label>
                        <input type="text" class="form-control" id="exampleInputPosition" name="position">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Write Description Here" id="JobDesc" name="description" style="height: 100px"></textarea>
                        <label for="JobDesc">Job Description</label>
                    </div>
                    <div class="mb-3">
                        <label for="skills" class="form-label">skills Required</label>
                        <input type="text" class="form-control" id="skills" name="skills">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">location Required</label>
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                    <div class="mb-3">
                        <label for="CTC" class="form-label">CTC</label>
                        <input type="text" class="form-control" id="CTC" name="ctc">
                    </div>
                    <button type="submit" class="btn btn-primary" name="save" value="save">Submit</button>

                </form>

            </div>
        </div>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">*</th>
                <th scope="col">Name of Company</th>
                <th scope="col">Position for Work</th>
                <th scope="col">Requrements</th>
                <th scope="col">Pay scale</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $i=0;
          $selectquery = "select * from post;";
          $query = mysqli_query($conn,$selectquery) or die("worng query");
          while($res=mysqli_fetch_assoc($query)){
            
             ?>
            <tr>
                <?php 
                echo "<td>".++$i."</td>"; ?>
                <td><?php echo $res['company'] ?></td>
                <td><?php echo $res['position'] ?></td>
                <td><?php echo $res['description'] ?></td>
                <td><?php echo $res['skills'] ?></td>
                <td><?php echo $res['location'] ?></td>
                <td><?php echo $res['ctc'] ?></td>
                <td>
                    <a href='career.php'>Apply NOW</a>
                </td>
            </tr>
            <?php }?>
            
        </tbody>
        </table>
    </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</body>

</html>