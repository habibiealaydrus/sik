<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Rumah Sakit/Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
</head>

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="https://img.freepik.com/free-vector/health-care-logo_18099-31.jpg?size=338&ext=jpg" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">

                    <form action="login_action.php" method="post">
                        <div class="logintext">
                            <h3>Sistem Informasi Kesehatan Rumah Sakit / Klinik</h3>
                        </div>
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" class="form-control" name="pass" placeholder="Masukan Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <diV class="logintext">
            <p>
                &copy Dev by <a href="https://www.linkedin.com/in/habibi-alaydrus-667230165/">Habibie</a>
                -
                <?php
                echo date("Y/m")
                ?>
            </p>
        </diV>
    </div>

    <!-- ini ada javascript boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>