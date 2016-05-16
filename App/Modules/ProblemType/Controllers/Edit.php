<?php

 namespace App\Modules\ProblemType\Controllers;
 use System\HMVC\HMVC;
 use App\Models\problem_type as  tbmap;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
        Validate::has($_POST['problem_type_name']);
        Validate::has($_POST['problem_type_detail']); 
         
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
