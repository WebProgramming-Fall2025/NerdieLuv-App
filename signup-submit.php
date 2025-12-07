<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sophie Nguyen - Sign Up Submit Page</title>
    <link rel="stylesheet" href="./css/nerdieluv.css">
</head>
<body>
    <?php include('./common.php'); 
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $personality = $_POST['personality'];
            $OS = $_POST['OS'];
            $ageMin = $_POST['ageMin'];
            $ageMax = $_POST['ageMax'];
            
            $valida = '';
            if (infoValidation($name, $gender, $age, $personality, $OS, $ageMin, $ageMax)) {
                if (checkExist($name)) {
                    $valida = signUpComplete($name);
                    file_put_contents("./match/singles.txt", userInfo($_POST), FILE_APPEND);
                } else {
                    $valida = alreadyRegistered($name);
                }
            } else {
                $valida = signUpNotComplete();
            }            
        }
    ?>
    <?= outHeader(); ?>
   <div><?= $valida ?></div>
    <?= outFooter(); ?>


</body>
</html>
