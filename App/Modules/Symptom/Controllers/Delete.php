<?php

namespace App\Modules\Symptom\Controllers;
 use System\HMVC\HMVC;
 use App\Models\symptom as  sym; 
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $std =  new sym();
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
