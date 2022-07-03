<!doctype html>
<html>
    <head>Урок 8</head>
        <h3>Задание 2</h3>
        <div>
            <form action type="Lesson8.php" method="POST">
                <p>Ваше имя:</p>
        Имя:<input type="text" name="name"><br> 
        <p>Ваше пол:</p>
        <input type="radio" name="gender" value="male" checked>Мужской<br>
        <input type="radio" name="gender" value="female">Женский<br>
        <input type="submit" value="Отправить" name="submit">   
            </form>
            <?php
            if(isset($_POST['submit']) and !empty($_POST['name'])){
                $name=$_POST['name'];
                $gender=$_POST['gender'];
                if($gender =='male'){
                    echo "Добро пожаловать, мистер $name!";
                }
                    else { 
                        echo "Добро пожаловать, миссис $name!";
                    }
    }
            ?>
        </div>
    </body>
</html>