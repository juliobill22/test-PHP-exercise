<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            echo "I'm don't have problem";
            echo "Are you have problem? Problem your!";
        
            $x1 = 5985;
            $x2 = '5985';
            $x3 = 59.85;
            $x4 = -5985;
            $x5 = "5985";
            $x6 = null;
            
            echo var_dump($x1); 
            echo '<br>';
            echo var_dump($x2);
            echo '<br>';
            echo var_dump($x3);
            echo '<br>';
            echo var_dump($x4);
            echo '<br>';
            echo var_dump($x5);
            echo '<br>';
            echo var_dump($x6);
            echo '<br>';
            
            $cars = array("Volvo","BMW","Toyota");
            var_dump($cars);
            
            class Car {
                function Car() {
                    $this->model = "VW";
                }
            }
            
            $classic = new Car();
            echo '<br>';
            echo $classic->model;
            
            echo '<br>';
            echo strlen("Hello world!");
            echo '<br>';
            echo str_word_count("Hello world!");
            echo '<br>';
            echo strrev("Hello world!");
            echo '<br>';
            echo strpos("Hello world!", "world");
            echo '<br>';
            echo str_replace("world", "xxx_NEW_xxx", "Hello world!");
            
            define("define1", "define1");
            define("define2", "define2");
            
            echo '<br>';
            echo define1;
            echo '<br>';
            echo define2;
            
            $x = 100;
            $y = 3;
            
            echo '<br><br>'.$x.' e '.$y.' <br>';
            echo '<br>';
            echo 'Soma:'.($x + $y);
            echo '<br>';
            echo 'Multiplicação:'.($x * $y);
            echo '<br>';
            echo 'Divisão:'.($x / $y);
            echo '<br>';            
            echo 'Resto:'.($x % $y);
            echo '<br>';            

            for ($index = 0; $index < 10; $index++) {
                $finc += $index;
                $fdec -= $index;
                $fmult *= $index;
                if ($index > 0) {
                    $fdiv /= $index;
                    $frest %= $index;
                }    
            }
            
            echo '<br>';
            echo 'Inc Incrementar:'.$finc;    
            echo '<br>';
            echo 'Dec Incrementar:'.$fdec;    
            echo '<br>';
            echo 'Mult Incrementar:'.$fmult;    
            echo '<br>';
            echo 'Div Incrementar:'.$fdiv;    
            echo '<br>';            
            echo 'Resto Incrementar:'.$frest;    
            echo '<br>';                        

            
            $xx = 100;
            $yy = "100";
            
            var_dump($xx == $yy);
            echo '<br>';    
            var_dump($xx === $yy);
            echo '<br>';    
            var_dump($xx != $yy);
            echo '<br>';    
            var_dump($xx <> $yy);            
            echo '<br>';    
            var_dump($xx !== $yy);            

            $t = date("H");
            echo $t;  
            
            echo '<br>';    
            echo '<br>';    
            echo 'd '.date("d");
            echo '<br>';    
            echo 'D '.date("D");
            echo '<br>';    
            echo 'j '.date("j");
            echo '<br>';    
            echo 'l '.date("l");
            echo '<br>';    
            echo 'N '.date("N");
            echo '<br>';    
            echo 'S '.date("S");
            echo '<br>';    
            echo 'w '.date("w");
            echo '<br>';    
            echo 'z '.date("z");
            echo '<br>';    
            echo 'W '.date("W");
            echo '<br>';    
            echo 'F '.date("F");
            echo '<br>';    
            echo 'm '.date("m");
            echo '<br>';    
            echo 'M '.date("M");
            echo '<br>';    
            echo 'n '.date("n");
            echo '<br>';    
            echo 't '.date("t");
            echo '<br>';    
            echo 'L '.date("L");
            echo '<br>';    
            echo 'o '.date("o");
            echo '<br>';    
            echo 'Y '.date("Y");
            echo '<br>';    
            echo 'y '.date("y");
            echo '<br>';    
            echo 'a '.date("a");
            echo '<br>';    
            echo 'A '.date("A");
            echo '<br>';    
            echo 'B '.date("B");
            echo '<br>';    
            echo 'g '.date("g");
            echo '<br>';    
            echo 'G '.date("G");
            echo '<br>';    
            echo 'h '.date("h");
            echo '<br>';    
            echo 'H '.date("H");
            echo '<br>';    
            echo 'i '.date("i");
            echo '<br>';    
            echo 's '.date("s");
            echo '<br>';    
            echo 'u '.date("u");
            echo '<br>';    
            echo 'e '.date("e");
            echo '<br>';    
            echo 'I '.date("I");
            echo '<br>';    
            echo 'O '.date("O");
            echo '<br>';    
            echo 'P '.date("P");
            echo '<br>';    
            echo 'T '.date("T");
            echo '<br>';    
            echo 'Z '.date("Z");
            echo '<br>';    
            echo 'c '.date("c");
            echo '<br>';    
            echo 'r '.date("r");
            echo '<br>';    
            echo 'U '.date("U");
            echo '<br>';    
            
            $DaquiNaoSaio = "saia-dai";
            
            switch ($DaquiNaoSaio) {
                case "saia-dai":
                    echo 'Daqui saio não sô!';
                    break;
                default :
                    echo 'Continuo aqui sô';
            }
            
            $txt1 = "Exercício txt1";
            $txt2 = "Exercício txt2";
            $sx = 5;
            $sy = 4;

            print "<h2>" . $txt1 . "</h2>";
            print "Study PHP at " . $txt2 . "<br>";
            print $sx + $sy;
            
            
        ?>
    </body>
</html>
