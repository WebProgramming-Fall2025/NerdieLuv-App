<?php

function outHeader() {
    echo '
<div id="bannerarea">
<img src="./img/nerdluv.png" alt="logo">
<br>
where meek greeks meet
</div>';
}

function outFooter() {
    echo '
<br>
<ul>
<li>
    This page is for single nerds to meet and date each other! <br>Type in your personal information and wait for the nerdly luv to begin!<br>Thank you for using our site <br><br>Result and page (C) Copyright Nerdluv Inc.
<br><br>
</li>
<li>
    <a href="./index.php" target="_self" rel="noopener noreferrer">
        <img src="./img/backbtn.png" alt="back-button" width="30px" height="30px"> Back to front page
    </a>
</li>
<br>
<br>
<li>
    <img src="./img/Valid_CSS.png" alt="Valid_CSS" width="100px" height="50px">
     <img src="./img/Valid_XHTML.png" alt="Valid_XHTML" width="100px" height="50px">
</li>
</ul>';
}

function userInfo($arr) {
    return "\n" . implode(',', $arr);
}

function personalityCheck($s1, $s2) {    
    $s1 = str_split($s1);
    $s2 = str_split($s2);
    $compare = array_intersect($s1, $s2);
    if (empty($compare)) {
        return false;
    } 
    return true;
}

function searchMatch($val1, $val2, $val3, $val4, $val5) {
    echo "
    <div class='match'>
    <img src='./img/match.png' alt='match-img'>
    <ul>
        <li><p>$val1</p></li>
        <li><strong>gender:</strong>$val2</li>
        <li><strong>age:</strong>$val3</li>
        <li><strong>type:</strong>$val4</li>
        <li><strong>OS:</strong>$val5</li>
    </ul>
</div>";
}

function matchNotFound() {
    echo "<p><br>This user have not signup yet. Please return to front page to sign up!</p>";
}

function matchFound($val1) {
    echo "<p><strong>Matches for $val1</strong></p>";
}

function signUpComplete($name) {
    return "
    <p><strong>Thank you!</strong></p>
    <p>Welcome to NerdLuv, <?= $name; ?></p>
    <p>Now <a href='./matches.php' target='_self' rel='noopener referrer'>log in to see your matches!</a></p>
    ";
}

function signUpNotComplete() {
    return "
    <p><strong>Error! Invalid data.</strong></p>
    <p>We're sorry. You submitted invalid user information. Please go back and try again.</p>
    ";
}

function alreadyRegistered($name) {
    return "
    <p><strong>You have already registered</strong></p>
    <p>We're sorry. You submitted invalid user information. Please go back and try again.</p>
    ";
}

function infoValidation($name, $gender, $age, $personality, $OS, $ageMin, $ageMax) {
    if (empty($name)) {
        return false;
    }

    if (
        !($age >= 0 && $age <= 99)
    ) {
        return false;
    }

    if (($gender !== "M" && $gender !== "F")) {
        return false;
    }

    $personality = strtoupper($personality);
    if (
        ($personality[0] === 'I' || $personality[0] === 'E') &&
        ($personality[1] === 'N' || $personality[1] === 'S') &&
        ($personality[2] === 'F' || $personality[2] === 'T') &&
        ($personality[3] === 'J' || $personality[3] === 'P')
    ) {
    } else {
        return false;
    }

    if (empty($OS) || $OS === '') {
        return false;
    }

    if (
        ($ageMin <= $ageMax) &&
        ($ageMin >= 0) &&
        ($ageMax <= 99)
    ) {
    } else {
        return false;
    }

    return true;
}

function checkExist($name) {
    $file = file('./match/singles.txt', FILE_USE_INCLUDE_PATH);
    $fileArr = [];
    foreach ($file as $key => $value) {      
        $fileArr[$key] = explode(',', $value);
    }
    foreach ($fileArr as $value) {
        if ($name === $value[0]) {
            return false;
        }
    }
    return true;
}