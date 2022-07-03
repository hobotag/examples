<?php

session_start();

$answer1 = $_POST['answer1'];

$_SESSION['answer1'] = $answer1;

?>
<p>Вопрос 2</p>
<p>6+7=?</p>
<form action ="Lesson10-3.php" method="POST">
    <input type="radio" name="answer2" value="1" checked>1<br>
    <input type="radio" name="answer2" value="10">10<br>
    <input type="radio" name="answer2" value="13">13<br>
    <input type="submit" value="Далее" name="submit">
</form>

