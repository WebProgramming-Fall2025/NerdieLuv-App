<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sophie Nguyen - Matches Result Page</title>
    <link rel="stylesheet" href="./css/nerdieluv.css">
</head>
<body>
    <?php include("./common.php");
        $file = $fileArr = $returnUserName = $haveSignUp = $userArr = $matchArr = '';

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $file = file('./match/singles.txt', FILE_USE_INCLUDE_PATH);
            $fileArr = [];
            foreach ($file as $key => $value) {
                $fileArr[$key] = explode(',', $value);
            }
            $returnUserName = $_GET['returnUserName'];
            $haveSignUp = 0;
            foreach ($fileArr as $value) {
                if ($returnUserName === $value[0]) {
                    $userArr = $value;
                    $haveSignUp = 1;
                    break;
                }
            }
            outHeader();
            if ($haveSignUp === 0) {
                matchNotFound();
            } else {
                matchFound($userArr[0]);
                foreach($fileArr as $value) {
                    if (
                        ($value[0] !== $userArr[0]) &&
                        ($value[1] !== $userArr[1]) && 
                        (((int)$value[2] >= (int)$userArr[5]) && ((int)$value[2]) <= (int)$userArr[6]) &&
                        ($value[4] === $userArr[4]) &&
                        (personalityCheck($value[3], $userArr[3]))
                    ) {
                        searchMatch($value[0], $value[1], $value[2], $value[3], $value[4]);
                    }
                }
            }
            outFooter();
        }
    
    ?>    
</body>
</html>






