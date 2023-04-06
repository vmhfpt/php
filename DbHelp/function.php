<?php
function getData($filter, $array){
  $arrayNew = [];
for($i = 0; $i < (int)count($array); $i++){
  
  if($filter == $array[$i]['business_name']){
    $arrayNew[] = $array[$i];
  }
}
return ($arrayNew);
}



function createMenuTree($menuList, $parent_id, $lever){
  $menuTree = array();
  foreach($menuList as $key => $menu){
    if($menu['parent_id'] == $parent_id){
       $menu['lever'] = $lever;
    
       $menuTree[] = $menu;
     unset($menuList[$key]);
       $children = createMenuTree($menuList, $menu['id'], $lever + 1);
       $menuTree = array_merge($menuTree, $children);
    }
  }
  return ($menuTree);
}

 function validateUploadFile($file, $uploadPath) {

   $Test_Valid = false ;
     // Kiểm tra xem file có vượt quá mức dung lượng cho phép không !!!
     if ($file['size'] > 50 * 1024 * 1024) { // 2Mb = 2 * 1024kb * 1024 bite
      // echo $file['size'] . "<br/>"; die(); 
         return (0);
     }
    // Kiểm tra file có đúng hợp lệ không
     $validTypes = array('jpg', 'jpeg', 'png', 'bmp');
     $fileType = substr($file['name'], strrpos($file['name'], ".") + 1) ;
     // if (!in_array($fileType, $validTypes)) {
      //   return false ;
  //   }
      for ($i = 0; $i < count($validTypes); $i ++){
           if ($fileType == $validTypes[$i]){
                $Test_Valid = true ;
                break ;
           } else {
               continue ;
           }
      }
      if ($Test_Valid == false){
        return (1) ;
      }
      // kiểm tra file tồn tại hay chưa,nếu đã tồn tại => đổi tên file đó
      $Num = 1;
      $fileName = substr($file['name'], 0, strrpos($file['name'], "."));
      while (file_exists($uploadPath . '/' . $fileName . '.' . $fileType)) {
        $fileName =  $fileName . "(". $Num .")";
        $Num ++;
      }
      $file['name'] = $fileName . '.' . $fileType;
      return ($file);
 }
     
      function upLoadFiles($uploadedFiles){
        $count = 1;
        $files = array();
        $error = array();
          foreach ($uploadedFiles as $key => $values){
             $count = count($values);
          }
         if($count == 1){
            // Xử lí với một file
           // var_dump($uploadedFiles);
            foreach ($uploadedFiles as $key => $values){
                 foreach ($values as $index => $value){
                      $files[$index][$key]= $value;
                 }
            }
            $uploadPath = "../../public/img/" ;
           
            $Remember_name = $files[0]['name'];
            $files[0] = validateUploadFile($files[0], $uploadPath);
           
            if ($files[0] == 0 || $files[0] == 1){
              if ($files[0] == 0) {
                 $error[] = '*File ' .$Remember_name. ' Vượt quá 4.5Mb';
              } else if ($files[0] == 1){
                $error[] = '*File ' . $Remember_name. ' không đúng với định dạng hình ảnh';
              }
              $error[] = true;
            } else {
              $random =  mt_rand(100000, 999999);
              $error[] = $random.$files[0]["name"] ;
            
              move_uploaded_file($files[0]["tmp_name"],$uploadPath .$random.$files[0]["name"]);
            }
         
           return ($error);
         }
     }
      // hàm hiển thị ra tất cả file ảnh 
      function getAllFiles(){
        $allFiles = array();
        $allDirs = glob('uploads/*');
        foreach ($allDirs as $dir){
               $allFiles = array_merge($allFiles, glob($dir . "/*"));
        }
        return $allFiles ;
      }

      function createSlug($string)
      {
          $search = array(
              '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
              '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
              '#(ì|í|ị|ỉ|ĩ)#',
              '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
              '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
              '#(ỳ|ý|ỵ|ỷ|ỹ)#',
              '#(đ)#',
              '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
              '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
              '#(Ì|Í|Ị|Ỉ|Ĩ)#',
              '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
              '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
              '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
              '#(Đ)#',
              "/[^a-zA-Z0-9\-\_]/",
          );
          $replace = array(
              'a',
              'e',
              'i',
              'o',
              'u',
              'y',
              'd',
              'A',
              'E',
              'I',
              'O',
              'U',
              'Y',
              'D',
              '-',
          );
          $string = preg_replace($search, $replace, $string);
          $string = preg_replace('/(-)+/', '-', $string);
          $string = strtolower($string);
          return $string;
      }