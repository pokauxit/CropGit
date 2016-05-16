<?php

 namespace App\Modules\ProblemType\Controllers;
 use System\HMVC\HMVC;
 use App\Models\problem_type as  tbmap;
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
