<?php

namespace App\Modules\WelcomePage\Controllers;

use App\Models\sys_welcome_page AS welcome_page;
use System\HMVC\HMVC;
use System\Utils\JS;
use System\Utils\File;

class Add extends HMVC {

    public function index() {
        if ($_POST['pic'] = File::upPic('AttachFile/welcome_page/', 'pic'));
        $STR = new welcome_page();
        if ($STR->insert()) {
            echo JS::addComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::addFail();
            echo JS::back();
        }
    }

}
