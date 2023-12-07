<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LadyLafé - <?= $title ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="?page=home">Accueil</a></li>
                <li><a href="?page=post">Post</a></li>
                <?php if (isset($_SESSION["user"])) : ?>
                    <li><a href="?page=logout">Logout</a></li>
                <?php else : ?>
                    <li><a href="?page=login">Login</a></li>
                    <li><a href="?page=register">Register</a></li>
                <?php endif ?>
            </ul>
            <?php if (isset($_SESSION["user"])) : ?>
                <p><?= $_SESSION["user"]["username"] ?></p>
            <?php endif ?>
        </nav>
    </header>

    <?= $content ?>
</body>

</html>