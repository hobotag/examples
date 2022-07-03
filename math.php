<!doctype html>
<html>
    <head>Урок 6</head>
    <body>
        <h3>Задание 1</h3>
        <p>
            <?php
            $products = array(
            array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
            array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
            array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
            );
            function sum ($products){
               static $Totalcount;
               static $Totalprice;
               foreach($products as $product){
                   $Totalcount += $product['quantity'];
                   $Totalprice += $product['quantity'] * $product['price'];
               }
               return array('Количество покупок' => $Totalcount, 'Цена покупок' => $Totalprice);
            }
            $return = sum($products);
            echo '<pre>';
            print_r($return);
            echo '</pre>';
            ?>
        </p>
        <h3>Задание 2</h3>
        <p>
            <?php
            $a=3;
            $b=0.78;
            $c=20;
            function discriminant($a, $b, $c){
               $D= pow($b,2) - 4*$a*$c;
            if($D>0){
                $x1=(-$b-sqrt($D))/(2*$a);
                $x2=(-$b+sqrt($D))/(2*$a);
                return array('D='=>$D,'x1='=>$x1,'x2='=>$x2);
                
            }
            elseif($D==0){
                $x=-$b/(2*$a);
                return array('D='=>$D,'x='=>$x);
            }
            else{
                echo 'false';
            }  
            }
            $result = discriminant($a, $b, $c);
            echo'<pre>';
            print_r($result);
            echo'</pre>';
            ?>
        </p>
        <h3>Задание 3</h3>
        <p>
            <?php
            $digits = array(2, -10, -2, 4, 5, 1, 6, 200, 1.6, 95);
            function deleteNegatives($arr){
                foreach ($arr as $key=> $element){
                    if ($element<0){
                        unset($arr[$key]);
                    }      
                }
                return $arr;
            }
            $digits= deleteNegatives($digits);
            echo '<pre>';
            print_r($digits);
            echo '</pre>';
            ?>
        </p>
        <h3>Задание 4</h3>
        <p>
            <?php
            $digits = array(2, -10, -2, 4, 5, 1, 6, 200, 1.6, 95);
            function deleteNegat(&$arr){
                foreach ($arr as $key=> $element){
                    if ($element<0){
                        unset($arr[$key]);
                    }      
                }
            }
            deleteNegat($digits);
            echo '<pre>';
            print_r($digits);
            echo '</pre>';
            ?>
        </p>
    </body>
</html>