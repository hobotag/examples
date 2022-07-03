<?php
$str = 'Добро пожаловать, новичёк!';
if (isset($_COOKIE["cookie"])) {
    $str = 'С возвращением, дружище!';
} else {
    setcookie("cookie", "1", time() + 60 * 60 * 3);
}

if (isset($_COOKIE["time"])) {
    $timebefore = 'Последний визит был: ' . $_COOKIE["time"];
} else {
    $timebefore = 'Ваш первый визит';
}
$time = date('Y-m-d h:i:s');
setcookie("time", $time, time() + 1);

$visit = 1;

if (isset($_COOKIE["visit"])) {

    $visit = intval($_COOKIE["visit"]);
    $visit++;
    $visitnow = "Вы посетили страницу сайта $visit раз(а)";
} else {
    $visitnow = 'Ваш первый визит';
}

setcookie("visit", $visit);
?>
<!doctype html>
<html>
    <head>Урок 9</head>
    <h3>Задание 1</h3>
    <p align ="left"><?php echo $str; ?></p>
    <h3>Задание 2</h3>
    <p align ="left"><?php echo $timebefore; ?></p>
    <h3>Задание 3</h3>
    <p align ="left"><?php echo $visitnow; ?></p>
</body>
</html>