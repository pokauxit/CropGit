<?php

namespace App\Modules\Staff\Controllers;
 use System\HMVC\HMVC;
 use App\Models\staff as  stf; 
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $std =  new stf();
        if($std->delete(ID)){
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule());
        }else{
            echo JS::deleteFail();
            echo JS::back();
        }
    }

  
}
?>
