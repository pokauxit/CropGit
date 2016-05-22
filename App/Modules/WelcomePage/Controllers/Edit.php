<?php

namespace App\Modules\WelcomePage\Controllers;

use App\Models\sys_welcome_page AS welcome_page;
use System\HMVC\HMVC;
use System\Utils\JS;
use System\Utils\File;

class Edit extends HMVC {

    public function index() {
        $sth = new welcome_page();
        if ($_POST['pic'] = File::upPic('AttachFile/welcome_page/', 'pic'));
        if ($sth->update(ID)) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }

}
