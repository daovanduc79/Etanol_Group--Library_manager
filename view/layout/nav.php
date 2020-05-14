<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /*author: Limon*/
        .navbar-nav .nav-link {
            position: relative;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #ff7700;
        }

        .navbar-nav .nav-link::before {
            content: "";
            position: absolute;
            background: #ff7700;
            width: 48%;
            bottom: 0;
            left: -48%;
            z-index: 0;
            transition: 0.6s;
        }

        .navbar-nav .nav-link::after {
            content: "";
            position: absolute;
            background: #ff7700;
            width: 48%;
            bottom: 0;
            height: 0;
            right: -48%;
            z-index: 0;
            transition: 0.6s;
        }


        .navbar-nav .nav-link:hover::before,
        .navbar-nav .nav-link.active::before {
            height: 2px;
            left: 5%;
            transition: 0.6s;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            height: 2px;
            right: -5%;
            transition: 0.6s;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">LIBRARY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Borrow</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                </li>
                <li class="navbar-nav  my-2 my-lg-0">
                    <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="#">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>