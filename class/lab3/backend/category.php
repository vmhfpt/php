<?php

$name = ['CCTV', 'Computer Set', 'Hard Disk', 'Keyboard', 'Laptops', 'Memory', 'Mouse'];

function showName($name)
{
    $i = 0;
    foreach ($name as $vl) {
        echo '
        <div class="flex">
            <div class="col6">
                <p>' . $vl . '</p>
            </div>
            <div class="col3">
                <p class="x openPopup" onclick="editName(\''.$vl.'\')">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                    Edit
                </p>
            </div>
            <div class="col3">
                <p  class="x" onclick="deleteName("name",\''.$i.'\')>
                    <i class="fa fa-times" aria-hidden="true"></i>
                    xxx
                </p>
            </div>
        </div>
    ';
        $i++;
    }
}

if (!empty($_GET)) {
    if (isset($_GET['ca'])) {
        $caEdit = $_GET['ca'];
    }
    if (isset($_GET['name'])) {
        $nameEdit = $_GET['name'];
    }

    foreach ($name as $vl) {
        if ($vl == $caEdit) {
            $name =  str_replace($caEdit, $nameEdit, $name);
            echo '<br>';
        }
    }
}

// if(!empty($_POST)) {
//     if(isset($_POST['cass'])) {
//         $caDelete = $_POST['cass'];
//          unset($name[$caDelete]);
//          print_r($name);
//         // foreach($name as $vl) {
//         //     if($vl==$caDelete){
//         // var_dump('1');
//         //         unset($name['CCTV']);
//         //     }
//         // }
//     }

// }
?>

<div class="category-base">
    <div class="category-base-header">
        <div class="flex">
            <div class="col6">
                <h3>Name</h3>
            </div>
            <div class="col6">
                <h3>Action</h3>
            </div>
        </div>
    </div>
    <div class="category-base-content">
        <?php
        showName($name);
        ?>

    </div>
</div>
<div class="categoty-popup">
    <div class="close-pop"></div>
    <div class="form">
        <h2>Sửa</h2>
        <div class="close">
            <i class="fa fa-times-circle" aria-hidden="true"></i>
        </div>
        <form action="" method="get">
            <div class="input">
                <input type="text" class="nameinput" name="name" value="...">
                <input type="hidden" class="ca" name="ca" value="">
            </div>

            <input type="submit" value="Save">
        </form>
    </div>
</div>
</div>


<script>
    var openPopup = document.getElementsByClassName('openPopup')[0]
    var popup = document.getElementsByClassName('categoty-popup')[0]
    var closePopup = document.getElementsByClassName('close')[0]
    var input = document.getElementsByClassName('nameinput')[0]
    var ip2 = document.getElementsByClassName('ca')[0]
    var flex = document.getElementsByClassName('category-base-content')[0].getElementsByClassName('flex')

    function editName(name) {
        popup.style.display = 'flex';
        input.value = name
        ip2.value = name
    }
    // openPopup.addEventListener('click',function() {
    // })

    closePopup.addEventListener('click', function() {
        popup.style.display = 'none';
    })

    function deleteName(name,index) {
        alert('Bạn có chắc muốn xóa không')
        flex[index].innerHTML = ''
    }
</script>