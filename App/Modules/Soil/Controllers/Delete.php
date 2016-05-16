<?php

 namespace App\Modules\Soil\Controllers;
 use System\HMVC\HMVC;
 use App\Models\soil as  tbmap;
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $tbmap =  new tbmap();
        if($tbmap->delete(ID)){
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule());
        }else{
            echo JS::deleteFail();
            echo JS::back();
        }
    }

  
}
?>
