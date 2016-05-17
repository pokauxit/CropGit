<?php

namespace App\Modules\Anusit\Controllers;
 use System\HMVC\HMVC;
 use App\Models\anu;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Add extends HMVC{
     public function index() {
         Validate::has($_POST['anu_name']);
         Validate::has($_POST['anu_note']);
         
        $std =  new anu();
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
