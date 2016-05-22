<?php

namespace App\Modules\WelcomePage\Controllers;

use App\Models\sys_welcome_page AS welcome_page;
use System\HMVC\HMVC;
use System\Utils\JS;

class Delete extends HMVC {

    public function index() {
        $STR = new welcome_page();
        if ($STR->delete(ID)) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }

}
