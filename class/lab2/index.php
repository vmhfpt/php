


<!DOCTYPE html>
<html lang="vi">

<head>
    <title> Lab 2</title>
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
                        <h2 class="">Code Lab 2, bài 1</h2>
                    </div>
                    <pre class="language-js" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
      
        &lt;?php
            $color = array('red','green','white');
            print_r($color);
            echo "&lt;br>";
            echo $color[0];

            echo "&lt;br>";
            $age = array();
            $age[0] = 10;
            $age[1] = 20;
            $age[2] = 30;
            print_r($age);
        ?>
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php

$color = array('red','green','white');
print_r($color);
echo "<br>";
echo $color[0];

echo "<br>";
$age = array();
$age[0] = 10;
$age[1] = 20;
$age[2] = 30;
print_r($age);
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
                        <h2 class="">Code Lab 2, bài 1, phần 2</h2>
                    </div>
                    <pre class="language-html" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
        <xmp>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
            < ?php
                // $x=1<=>2;
                // echo "$x";

                // $a=5; $a==10;
                // echo "$a"

                $age = 50;

                if($age < 30){
                    echo " thì ít hơn 30";
                }elseif($age >30 && $age <40){
                    echo " thì sấp sỉ trên 30 hoặc bằng 40";
                }elseif($age > 40 && $age <= 50 ){
                    echo " thì lớn hơn 40 hoặc nhỏ hơn bằng 50";
                }
            ?>
            </body>
            </html>
        </xmp>
               
        
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php
    // $x=1<=>2;
    // echo "$x";

    // $a=5; $a==10;
    // echo "$a"

    $age = 50;

    if($age < 30){
        echo " thì ít hơn 30";
    }elseif($age >30 && $age <40){
        echo " thì sấp sỉ trên 30 hoặc bằng 40";
    }elseif($age > 40 && $age <= 50 ){
        echo " thì lớn hơn 40 hoặc nhỏ hơn bằng 50";
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
                        <h2 class="">Code Lab 2, bài 2</h2>
                    </div>
                    <pre class="language-js" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
    
        &lt;?php
                $salaries = array(
                "mohammad" => 200,
                "qudir" => 500,
                "zara" => 100
                );
                echo "salary of mohammad is". $salaries['mohammad']."&lt;br/>";
                echo "salary of qudir is". $salaries['qudir']."&lt;br/>";
                echo "salary of zara is". $salaries['zara']."&lt;sbr/>";
        ?>
        
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php
 $salaries = array(
    "mohammad" => 200,
    "qudir" => 500,
    "zara" => 100
);
echo "salary of mohammad is". $salaries['mohammad']."<br/>";
echo "salary of qudir is". $salaries['qudir']."<br/>";
echo "salary of zara is". $salaries['zara']."<br/>";
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
                        <h2 class="">Code Lab 2, bài 2, phần 2</h2>
                    </div>
                    <pre class="language-html" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
    
      <xmp>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                < ?php
                    $max = 0;
                    echo $i = 0;
                    echo ",";
                    echo $j = 1;
                    echo ",";
                    $result = 0;

                    while($max <10){
                        $result = $i + $j;
                        $i=$j;
                        $j= $result;

                        $max = $max + 1;
                        echo $result;
                        echo ",";

                    }
                ?>
            </body>
            </html>
      </xmp>
        
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php
         $max = 0;
         echo $i = 0;
         echo ",";
         echo $j = 1;
         echo ",";
         $result = 0;
 
         while($max <10){
             $result = $i + $j;
             $i=$j;
             $j= $result;
 
             $max = $max + 1;
             echo $result;
             echo ",";
 
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
                        <h2 class="">Code Lab 2, bài 3</h2>
                    </div>
                    <pre class="language-js" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
      
        &lt;?php
            define('LOCATOR',    "/locator" );
            define('CLASSES',   LOCATOR."/code/classes" );
            define('FUNCITION', LOCATOR."/code/funcition" );
            define('USERDIR',   LOCATOR."/user" );
        ?>
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php
 define('LOCATOR',    "/locator" );
 define('CLASSES',   LOCATOR."/code/classes" );
 define('FUNCITION', LOCATOR."/code/funcition" );
 define('USERDIR',   LOCATOR."/user" );
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
                        <h2 class="">Code Lab 2, bài 3, phần 2</h2>
                    </div>
                    <pre class="language-html" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
      
         <xmp>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                </head>
                <body>
                    < ?php
                        $fruits = array('apple','banana','orager','grapes' );
                        foreach ($fruits as $fruit){
                            echo $fruit;
                            echo "<br>";
                        }
                        $employee = array('name' => 'john smith', 'age' => 30, 'level' => 'profession');
                        foreach ($employee as $key => $value) {
                            echo $key . ":" . $value . "<br/>";
                            
                        }         
                    
                    ?>
                </body>
                </html>
         </xmp>
    </code>
  </pre>
                </div>
                <div class="tab-content__item">
                    <div class="tab-title">
                        <h2 class="">Kết quả</h2>
                    </div>

                    <?php
    $fruits = array('apple','banana','orager','grapes' );
    foreach ($fruits as $fruit){
        echo $fruit;
        echo "<br>";
    }
    $employee = array('name' => 'john smith', 'age' => 30, 'level' => 'profession');
    foreach ($employee as $key => $value) {
        echo $key . ":" . $value . "<br/>";
        
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
                        <h2 class="">Code Lab 2, bài 4</h2>
                    </div>
                    <pre class="language-js" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 0px;
              top : -40px">
      
      &lt;?php
            echo 'simple break';
            for($i = 1; $i <=2; $i++){
                echo "\n".'$i = '.$i. '';
                for( $j = 1; $j<=5; $j++){
                if($j==2){
                    break;
                }
                echo '$j = '.$j. '';

                }
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
   echo 'simple break';
   for($i = 1; $i <=2; $i++){
       echo "\n".'$i = '.$i. '';
       for( $j = 1; $j<=5; $j++){
          if($j==2){
           break;
          }
          echo '$j = '.$j. '';

       }
   }
?>
   


                </div>

            </div>
        </div>
    </div>


    <script src="../highlight/rainbow-custom.min.js"> </script>
</body>

</html>