<?php

namespace App\Modules\Anusit\Controllers;
 use System\HMVC\HMVC;
 use App\Models\anu;
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $db =  new anu();
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
