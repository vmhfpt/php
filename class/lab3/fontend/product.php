<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="./style/a.css">
</head>


<?php
$products = [
    [
        'img' => 'https://media.istockphoto.com/id/977527196/vi/vec-to/bi%E1%BB%83u-t%C6%B0%E1%BB%A3ng-%C4%91%E1%BB%93ng-h%E1%BB%93-h%E1%BA%B9n-gi%E1%BB%9D-10-ph%C3%BAt.jpg?s=1024x1024&w=is&k=20&c=D0DUvxp5ZIrVvyKSW9WP1B87upbbIkwun4S8WkeIP3k=',
        'name' => '10p',
        'price' => 200,
        'category' => 'Viet Nam',
    ],
    [
        'img' => 'https://media.istockphoto.com/id/1149038683/vector/clock-timer-icon-20-minutes.jpg?s=612x612&w=is&k=20&c=rNzrVSHoeIuSwRW3_CUUaVjbrfsDyIyhDKemgKEb-gU=',
        'name' => '20p',
        'price' => 400,
        'category' => 'Trung Quoc',
    ],
    [
        'img' => 'https://media.istockphoto.com/id/1149038646/vi/vec-to/%C4%91%E1%BB%93ng-h%E1%BB%93-h%E1%BA%B9n-gi%E1%BB%9D-bi%E1%BB%83u-t%C6%B0%E1%BB%A3ng-30-ph%C3%BAt.jpg?s=1024x1024&w=is&k=20&c=09ePJV2cSOKKmHGLGR63Owz64MblSnkfahG_E6jpE78=',
        'name' => '30p',
        'price' => 600,
        'category' => 'Nhat Ban',

    ]
];

function showProduct($products) {
    foreach($products as $key =>$value) {
        echo '
        <div class="items">
            <div class="img">
                <img src="'.$value['img'].'" alt="">
            </div>
            <h3 class="name">'.$value['name'].'</h3>
            <p class="price">'.$value['price'].' USD</p>
            <p class="category">Category: '.$value['category'].'</p>
            <button><i class="fa fa-cart-plus" aria-hidden="true"></i> View Detalis</button>
        </div>
        ';
    }
}
?>


<div class="flexs">
    <?=
        showProduct($products);
    ?>
</div>