<?php

 namespace App\Modules\Soil\Controllers;
 use System\HMVC\HMVC;
 use App\Models\soil as  tbmap;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
         Validate::has($_POST['soil_name']);
         Validate::has($_POST['soil_type']); 
         Validate::number($_POST['soil_type']); 
         Validate::has($_POST['soil_factor']);
         Validate::has($_POST['soil_problem']); 
         Validate::has($_POST['soil_nutrition']); 
         
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
