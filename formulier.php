<?php include('server.php')?>
<?php
if(isset($_GET['logout'])){session_destroy(); unset($_SESSION['user']); unset($_SESSION['id']);}?>
<!DOCTYPE html>
<head>
    <title>Profileringsfonds landing page</title>
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
<!-- navbar -->
<nav class="navbar navbar-expand-sm" >

    <a class="navbar-brand" href="index.php">
        <img src="images/Logo1.png" alt="logo" style="width:150px;">
    </a>

    <!-- Links -->
    <div id="links">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a method="post" class="nav-link" href="formulier.php" name="start_form">Start aanvraag</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="info.php">Informatie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="FAQ.php">FAQ</a>
            </li>

            <?php if (!isset($_SESSION['user'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            <?php endif?>
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
        <ul class="navbar-nav" style="alignment: right">
            <?php if (isset($_SESSION['user'])) : ?>
                <div class="success">
                    <li>
                        Ingelogd als <?php echo $_SESSION['user'];?> --- <a style="color: darkslateblue" href="index.php?logout='1'">Log uit</a>
                    </li>
                </div>
            <?php endif?>
        </ul>
    </div>     
</nav>
<div class="header">
    <h2>Persoonlijke gegevens</h2>
</div>
    <div>
    <form method="post">
    <div class="input-group">
        <label>Studentnummer</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Achternaam</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Roepnaam</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Geboortedatum</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Adres</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Postcode</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Woonplaats</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Telefoonnummer</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>E-mailadres</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>BSN-nummer</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>IBAN rekeningnummer</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>       



</body>