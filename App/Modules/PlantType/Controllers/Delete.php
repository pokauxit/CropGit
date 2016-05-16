<?php

namespace App\Modules\PlantType\Controllers;
 use System\HMVC\HMVC;
 use App\Models\type_plant;
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $db =  new type_plant();
        if($db->delete(ID)){
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule());
        }else{
            echo JS::deleteFail();
            echo JS::back();
        }
    }

  
}
?>
