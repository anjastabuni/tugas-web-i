<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Aplikasi</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body class="h-100 bg-info d-flex align-items-center">
    <section class="container text-center">
        <div class="row mt-sm-5 mt-lg-5">
            <div class="col-sm-6 mx-auto col-md-4 bg-light p-4 ">

                <h3 class="text-center text-info pb-3 mb-3 border-bottom">Login Aplikasi</h3>
                <form action="ceklogin.php" method="post">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="username" id="username" name="username">
                    <input class="form-control form-control-lg mb-3" type="password" placeholder="Password" id="password" name="password">
                    <input class="btn btn-info btn-lg btn-block " type="submit" value="login">
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>