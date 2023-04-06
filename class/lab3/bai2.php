<?php

include 'header.php';

function bai4()
{
    $strings = "Twinkle, twinkle, little star,\nHow i wonder what you are.\nUp above the world so high,\n Like adiamond in the sky.";

    function cutString($string)
    {
        $newString = explode("\n", $string);
        foreach ($newString as $v) {
            echo $v . '<br><br>';
        }
    }
    cutString($strings);
}
?>
<style class="">
  .flex {
    display  : flex;
  }
  .flexs {
    display : flex;
  }
  .flexs .items {
    width: 100%;
    flex-direction: column;
    display : flex;
    justify-content: center;
    align-items: center;
  }
  .items img {
    width : 100%;
  }
</style>

<div class="item">
    <p><span>Bai 4:</span> Chuyển đổi phần tử</p>
    <?= bai4(); ?>
</div>

<div class="item">
    <p><span>Bai 6:</span> PHP & HTML</p>
    <p> Fontend</p>
    <?php 
        include './fontend/product.php';
    ?>
        <p>Backend</p>
    <?php 
        include './backend/category.php';
        
    ?>
</div>