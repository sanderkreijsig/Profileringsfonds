<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create account</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/bootstrap-4.4.1-dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm" >

    <a class="navbar-brand" href="index.php">
        <img src="images/Logo1.png" alt="logo" style="width:150px;">
    </a>

    <!-- Links -->
    <div id="links">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Start aanvraag</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="info.php">Informatie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="FAQ.php">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li>
                <a class="nav-link" href="admin.php">admin</a>
            </li>
            <li>
                <img src="images/globe.png" width="50px">
            </li>
            <li class="nav-item">
                <a href="#" data-lang="nl">NL</a>
            </li>/
            <li class="nav-item active" >
                <a href="#" data-lang="en">ENG</a>
            </li>
        </ul>
    </div>
</nav>

<!--register account-->
<div class="input-group">
    <?php include('errors.php') ?>
    <?php if (isset($_SESSION['success'])) : ?>
    <div class="success">
        <h3>
            <?php echo $_SESSION['success'];
            unset($_SESSION['success']);?>
        </h3>
    </div>
    <?php endif?>
<form method="POST" action="admin.php">
    <label>Email: </label><input type="email" name="email_1" value="<?php echo $email_1; ?>"> <br />
    <label>Bevestig email: </label><input type="email" name="email_2" value="<?php echo $email_2; ?>" > <br />
    <button type="submit" name="register">Voeg toe</button>
</form>
</div>

</body>
</html>


