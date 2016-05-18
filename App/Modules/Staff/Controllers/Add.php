<?php

namespace App\Modules\Staff\Controllers;
 use System\HMVC\HMVC;
 use App\Models\staff as  stf;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Add extends HMVC{
     public function index() {
         Validate::has($_POST['staff_user']);
         Validate::has($_POST['staff_pass']);
         Validate::has($_POST['staff_name']);
         
        $std =  new stf();
        if($std->insert()){
            echo JS::addComplate();
            echo JS::re($this->route->backToModule());
        }else{
            echo JS::addFail();
            echo JS::back();
        }
    }

  
}
?>
