<?php
include 'view/layout/nav_2.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);

        .form-control {
            background: transparent;
        }

        form {
            width: 320px;
            margin: 20px;
        }

        form > div {
            position: relative;
            overflow: hidden;
        }

        form input, form textarea {
            width: 100%;
            border: 2px solid gray;
            background: none;
            position: relative;
            top: 0;
            left: 0;
            z-index: 1;
            padding: 8px 12px;
            outline: 0;
        }

        form input:valid, form textarea:valid {
            background: white;
        }

        form input:focus, form textarea:focus {
            border-color: #357EBD;
        }

        form input:focus + label, form textarea:focus + label {
            background: #357EBD;
            color: white;
            font-size: 70%;
            padding: 1px 6px;
            z-index: 2;
            text-transform: uppercase;
        }

        form label {
            -webkit-transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
            transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
            position: absolute;
            color: #999;
            padding: 7px 6px;
            font-weight: normal;
        }

        form textarea {
            display: block;
            resize: vertical;
        }

        form.go-bottom input, form.go-bottom textarea {
            padding: 12px 12px 12px 12px;
        }

        form.go-bottom label {
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        form.go-bottom input:focus, form.go-bottom textarea:focus {
            padding: 4px 6px 20px 6px;
        }

        form.go-bottom input:focus + label, form.go-bottom textarea:focus + label {
            top: 100%;
            margin-top: -16px;
        }

        form.go-right label {
            border-radius: 0 5px 5px 0;
            height: 100%;
            top: 0;
            right: 100%;
            width: 100%;
            margin-right: -100%;
        }

        form.go-right input:focus + label, form.go-right textarea:focus + label {
            right: 0;
            margin-right: 0;
            width: 40%;
            padding-top: 5px;
        }
    </style>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <form role="form" class="col-md-9 go-right" method="post" enctype="multipart/form-data">
            <h2>Add New</h2>
            <div class="form-group">
                <input id="id" name="id" type="text" class="form-control" value="<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : '' ?>" required>
                <label for="id">ID</label>
                <?php
                if (isset($_SESSION['id']) && $_SESSION['id'] == '') {
                    echo 'Id is malformed!';
                }
                unset($_SESSION['id']);
                ?>
            </div>
            <div class="form-group">
                <input id="name" name="name" type="text" class="form-control" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : '' ?>" required>
                <label for="name">Name</label>
                <?php
                if (isset($_SESSION['name']) && $_SESSION['name'] == '') {
                    echo 'Name is malformed!';
                }
                unset($_SESSION['name']);
                ?>
            </div>
            <div class="form-group">
                <input id="email" name="email" type="text" class="form-control" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>" required>
                <label for="email">Email</label>
                <?php
                if (isset($_SESSION['email']) && $_SESSION['email'] == '') {
                    echo 'Email is malformed!';
                }
                unset($_SESSION['email']);
                ?>
            </div>
            <div class="form-group">
                <input id="phone" name="phone" type="tel" class="form-control" value="<?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : '' ?>" required>
                <label for="phone">Phone</label>
                <?php
                if (isset($_SESSION['phone']) && $_SESSION['phone'] == '') {
                    echo 'Phone is malformed!';
                }
                unset($_SESSION['phone']);
                ?>
            </div>
            <div class="form-group">
                <input id="address" name="address" class="form-control" value="<?php echo isset($_SESSION['address']) ? $_SESSION['address'] : '' ?>" required>
                <label for="address">Address</label>
                <?php
                unset($_SESSION['address']);
                ?>
            </div>
            <div class="form-group">
                <input id="birthday" name="birthDay" type="date" class="form-control" value="<?php echo isset($_SESSION['birthDay']) ? $_SESSION['birthDay'] : '' ?>" required>
                <label for="birthday">Birthday</label>
                <?php
                unset($_SESSION['birthDay']);
                ?>
            </div>
            <div class="form-group">
                <input id="img" name="image" type="file" class="form-control" required>
                <label for="img">Image</label>
                <?php
                if (isset($_SESSION['checkImage']) && $_SESSION['checkImage'] != 'Upload file thành công') {
                    echo $_SESSION['checkImage'];
                }
                unset($_SESSION['checkImage']);
                unset($_SESSION['imageName']);
                ?>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Confirm</button>
        </form>
    </div>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
