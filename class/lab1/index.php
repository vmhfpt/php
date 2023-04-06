<!DOCTYPE html>
<html lang="vi">

<head>
    <title> Lap 1</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="/unnamed.png" />

    <script src="../highlight/rainbow-custom.min.js"> </script>
    <script src="../highlight/jquery-3.5.1.min.js"></script>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <link rel="stylesheet" href="../highlight/learn.css">
</head>

<body>
    <div class="container-fluid section-lab">
        <div class="container">
            <div class="tab-content">
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Code Lab 1, bài 1</h2>
                    </div>
                    <pre class="language-js" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
      
        &lt;?php
           echo 'hello world';
        ?>
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php

                    echo 'hello world';
                    ?>

                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid section-lab">
        <div class="container">
            <div class="tab-content">
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Code Lab 1, bài 2</h2>
                    </div>
                    <pre class="language-js" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
    
        &lt;?php
            $str = "hello string";
            $x = 200;
            $y = 40.6;
            echo " string is: $str  &lt;br/>";
            echo " integer is: $x &lt;br/>";
            echo " float is: $y &lt;br/>";
        ?>
        
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php
    $str = "hello string";
    $x = 200;
    $y = 40.6;
    echo " string is: $str <br>";
    echo " integer is: $x <br>";
    echo " float is: $y <br>";
?>

                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid section-lab">
        <div class="container">
            <div class="tab-content">
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Code Lab 1, bài 3</h2>
                    </div>
                    <pre class="language-js" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
    
        &lt;?php
            $color = "red";
            echo "my car is ". $color ."&lt;br />";
            echo "my house is ". $color ."&lt;br />";
            echo "my boat is ". $color."&lt;br />";
        ?>
        
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php
    $color = "red";
    echo "my car is ". $color ."<br>";
    echo "my house is ". $color ."<br>";
    echo "my boat is ". $color."<br>";
?>

                </div>

            </div>
        </div>
    </div>


    <div class="container-fluid section-lab">
        <div class="container">
            <div class="tab-content">
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Code Lab 1, bài 1.1</h2>
                    </div>
                    <pre class="language-js" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
    
        &lt;?php
              $x = 2;
              $y = 3;

             // $x = ("2 == 3 ");
             if($x == $y){
                 echo " x bằng y true <br/> "; 
             }else{
                 echo " x không bằng y false <br/>";
             }

            // $x = ("2 != 3 ");
            if($x != $y){
                echo " x khác y <br/> ";
            }else{
                echo " x bằng y <br/>";
            }

            $x = ("2 <> 3 ");
            $x = ("2 === 3 ");
            $x = ("2 !== 3 ");

    
            // $x = ("2 > 3 ");
             if($x > $y){
                echo " x lớn hơn y <br/>";
            }else{
                  echo " x không lớn hơn y <br/>";
             }
    
            // $x = ("2 < 3 ");
             if($x < $y){
                  echo "x nhỏ hơn y <br/>";
            }else{
                 echo " x không nhỏ hơn y <br/>";
             }

                // $x = ("2 >= 3 ");
            if($x >= $y){
                    echo "x lớn hơn hoạt bằng y <br/> ";
             }else{
               echo "x không lớn hơn hoạt bằng y <br/>";
             }

            // $x = ("2 <= 3 ");
            if($x <= $y){
                echo "x nhỏ hơn hoạt bằng y <br/> ";
            }else{
                    echo "x không nhỏ hơn hoạt bằng y <br/>";
            }
        ?>
        
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php
       $x = 2;
       $y = 3;
   
       // $x = ("2 == 3 ");
       if($x == $y){
           echo " x bằng y true <br/> "; 
       }else{
           echo " x không bằng y false <br/>";
       }
   
       // $x = ("2 != 3 ");
       if($x != $y){
           echo " x khác y <br/> ";
       }else{
           echo " x bằng y <br/>";
       }
   
       $x = ("2 <> 3 ");
       $x = ("2 === 3 ");
       $x = ("2 !== 3 ");
   
       
       // $x = ("2 > 3 ");
       if($x > $y){
           echo " x lớn hơn y <br/>";
       }else{
           echo " x không lớn hơn y <br/>";
       }
       
       // $x = ("2 < 3 ");
       if($x < $y){
           echo "x nhỏ hơn y <br/>";
       }else{
           echo " x không nhỏ hơn y <br/>";
       }
   
       // $x = ("2 >= 3 ");
       if($x >= $y){
           echo "x lớn hơn hoạt bằng y <br/> ";
       }else{
           echo "x không lớn hơn hoạt bằng y <br/>";
       }
   
       // $x = ("2 <= 3 ");
       if($x <= $y){
           echo "x nhỏ hơn hoạt bằng y <br/> ";
       }else{
           echo "x không nhỏ hơn hoạt bằng y <br/>";
       }
?>

                </div>

            </div>
        </div>
    </div>


    <div class="container-fluid section-lab">
        <div class="container">
            <div class="tab-content">
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Code Lab 1, bài 1.2</h2>
                    </div>
                    <pre class="language-js" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
      
        &lt;?php
           $a = 'hello';
           $$a = 'word';

           echo "$a ${$a} &lt;br>";
        ?>
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php

$a = 'hello';
$$a = 'word';

echo "$a ${$a} <br>";
                    ?>

                </div>

            </div>
        </div>
    </div>


    
    <div class="container-fluid section-lab">
        <div class="container">
            <div class="tab-content">
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Code Lab 1, bài 1.3</h2>
                    </div>
                    <pre class="language-js" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
      
        &lt;?php
            $a = 5;
            $b = 10;
            $c = $a + $b;
            echo "$c";
        ?>
        &lt;?php
            $a = $b = 5+100;
            echo "$b";
        ?>
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php
    $a = 5;
    $b = 10;
    $c = $a + $b;
    echo "$c";
?>
   
<?php
   $a = $b = 5+100;
    echo "$b";
?>

                </div>

            </div>
        </div>
    </div>


    <script src="../highlight/rainbow-custom.min.js"> </script>
</body>

</html>