<?php

session_start();

$answer2 = $_POST['answer2'];

$_SESSION['answer2'] = $answer2;

?>
<p>Вопрос 3</p>
<p>Ирландцы проиграли свою независимость англичанам ____ апреля 1603 года</p>
<form action ="Lesson10-result.php" method="POST">
    <input type="radio" name="answer3" value="25" checked>25<br>
    <input type="radio" name="answer3" value="3">3<br>
    <input type="radio" name="answer3" value="17">17<br>
    <input type="submit" value="Далее" name="submit">
</form>