<!doctype html>
<html>
    <head>Урок 8</head>
    <body>
        <h3>Задание 1</h3>
        <div>
            <form action type="Lesson8.php" method="POST">
                A:<input type="text" name="a"><br>
                B:<input type="text" name="b"><br>
                C:<input type="text" name="c"><br>
                D:<input type="text" name="d"><br>
                E:<input type="text" name="e"><br>
                G:<input type="text" name="g"><br>
                S:<input type="text" name="s"><br>
                <input type="submit" value="Отправить" name="submit">
            </form>
        </div>
        <?php
        if(isset($_POST['submit'])){
            $a = intval($_POST['a']);
            $b = intval($_POST['b']);
            $c = intval($_POST['c']);
            $d = intval($_POST['d']);
            $e = intval($_POST['e']);
            $g = intval($_POST['g']);
            $s = intval($_POST['s']);
             $arr=array($a,$b,$c,$d,$e,$g,$s);
             $max=max($arr);
             echo "Максимальное значение = ";
             echo $max.'<br>';
             $min= min($arr);
             echo "Минимальное значение = ";
             echo $min.'<br>';
             $average= array_sum($arr)/count($arr);
             echo "Среднеарифметическое число = ";
             echo $average.'<br>';
        }
        ?>
    </body>
</html>