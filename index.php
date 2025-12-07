<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sophie Nguyen - NerdLuv App</title>
    <link rel="stylesheet" href="./css/nerdieluv.css">
</head>
<body>
    <?php include('./common.php'); ?>
    <?= outHeader(); ?>
    <main>
        <h1>Welcome!</h1>
        <ul>
            <li>
                <a href="./signup.php" target="_self", rel="noopener noreferrer">
                    <img src="./img/signup.png" alt="signup" width="30px" height="30px">
                    Sign up for a new account
                </a>
            </li>
            <br>    
            <li>
                <a href="./matches.php" target="_self", rel="noopener noreferrer">
                    <img src="./img/heart.png" alt="bigheart" width="30px" height="30px">
                    Check your matches
                </a>
            </li>
        </ul>
    </main>
    <?= outFooter(); ?>
</body>
</html>
