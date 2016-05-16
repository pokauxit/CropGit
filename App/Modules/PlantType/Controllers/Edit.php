<?php

namespace App\Modules\PlantType\Controllers;
 use System\HMVC\HMVC;
 use App\Models\type_plant;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
         Validate::has($_POST['type_name']);
         Validate::has($_POST['note']);
         
        $std =  new type_plant();
        if($std->update(ID)){
            echo JS::editComplate();
            echo JS::re($this->route->backToModule());
        }else{
            echo JS::editFail();
            echo JS::back();
        }
    }

  
}
?>
