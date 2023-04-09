<?php
  class Helper {
    public function View($data = [], $view){
       
               if(! file_exists('view/'.$view.'.php')){
                 return false;
               }
               extract($data);
               require('view/'.$view.'.php');
    }
  }

?>