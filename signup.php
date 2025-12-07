<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sophie Nguyen - Sign Up Page</title>
    <link rel="stylesheet" href="./css/nerdieluv.css">
</head>
<body>
    <?php include('./common.php'); ?>
   
    <?= outHeader(); ?>

    <div id="form">
    <form action="./signup-submit.php" method="POST">
        <fieldset>
            <legend>New User Signup:</legend>
            <div>
                <label for="name"><strong>Name:</strong></label>
                <input type="text" id="name" name="name" size="20" maxlength="16" required>
            </div>
            <br>
            <div>
                <label for="gender"><strong>Gender:</strong></label>
                    <input type="radio" id="male" name="gender" value="M" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="F" required>
                    <label for="female">Female</label>
            </div>
            <br>
            <div>
                <label for="age"><strong>Age:</strong></label>
                <input type="text" id="age" name="age" size="6" maxlength="2" required>
            </div>
            <br>
            <div>
                <label for="personality"><strong>Personality Type:</strong></label>
                <input type="text" id="personality" name="personality" size="6" maxlength="4" required>
                <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp" target="_blank" rel="noopener noreferrer">(Don't know your type?)</a>
            </div>
            <br>
            <div>
                <label for="OS"><strong>Favorite OS:</strong></label>
                <select name="OS" id="OS" required>
                    <option value="Windows">Windows</option>
                    <option value="Mac OS X">Mac OS X</option>
                    <option value="Linux">Linux</option>
                </select>
            </div>
            <br>
            <div>
                <label for="seekingAge"><strong>Seeking Age</strong></label>
                <input type="text" id="seekingAge" name="ageMin" min="1" placeholder="min" size="6" maxlength="2" required>
                to
                <input type="text" id="seekingAge" name="ageMax" max="100" placeholder="max" size="6" maxlength="2" required>
            </div>
            <div>
                <input type="submit" value="Sign Up">
            </div>
        </fieldset>
    </form>
    </div>

    <?= outFooter(); ?>

</body>
</html>
