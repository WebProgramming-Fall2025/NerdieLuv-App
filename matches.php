<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sophie Nguyen - Matches Form Page</title>
    <link rel="stylesheet" href="./css/nerdieluv.css">
</head>
<body>
    <?php include('./common.php'); ?>
    <?= outHeader(); ?>

    <div id="form">
        <form action="./matches-submit.php" method="GET">
            <fieldset>
                <legend>Returning User:</legend>
                <div>
                    <label for="returnUserName"><strong>Name</strong></label>
                    <input type="text" name="returnUserName" id="returnUserName" size="16" required>
                </div>
                <br>
                <div>
                    <input type="submit" value="View My Matches">
                </div>
                
            </fieldset>
        </form>
    </div>
    <br>
    <?= outFooter(); ?>
</body>
</html>
