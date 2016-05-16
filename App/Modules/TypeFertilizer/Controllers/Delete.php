<?php

namespace App\Modules\TypeFertilizer\Controllers;
 use System\HMVC\HMVC;
 use App\Models\type_fertilizer as tbmap;
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $db =  new tbmap();
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
