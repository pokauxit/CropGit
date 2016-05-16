<?php

namespace App\Modules\Symptom\Controllers;
 use System\HMVC\HMVC;
 use App\Models\symptom as  sym;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
        Validate::has($_POST['symptom_name']);
         Validate::has($_POST['symptom_detail']); 
         
        $std =  new sym();
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
