<?php

namespace App\Modules\TypeFertilizer\Controllers;
 use System\HMVC\HMVC;
 use App\Models\type_fertilizer as tbmap;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
       Validate::has($_POST['type_fertilizer_name']);
         
        $tbmap =  new tbmap();
        if($tbmap->update(ID)){
            echo JS::editComplate();
            echo JS::re($this->route->backToModule());
        }else{
            echo JS::editFail();
            echo JS::back();
        }
    }

  
}
?>
