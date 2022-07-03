<p>Ваш результат теста:</p>

<?php
session_start();

$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_POST['answer3'];

$result = array('answer1' => '31', 'answer2' => '13', 'answer3' => '25');

if($answer1 == $result['answer1'] and $answer2 == $result['answer2'] and $answer3 == $result['answer3']){
    
    echo 'Положительный';
    
}else{
    
    echo 'Отрицательный';
    
}

unset ($_SESSION['answer1']);
unset ($_SESSION['answer2']);
unset ($_POST['answer3']);

?>