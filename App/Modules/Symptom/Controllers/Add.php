<?php

namespace App\Modules\Symptom\Controllers;
 use System\HMVC\HMVC;
 use App\Models\symptom as  sym;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Add extends HMVC{
     public function index() {
         Validate::has($_POST['symptom_name']);
         Validate::has($_POST['symptom_detail']); 
        $std =  new sym();
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
