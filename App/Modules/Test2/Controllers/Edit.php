<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 18/5/2559
 * Time: 9:47
 */

namespace App\Modules\Test2\Controllers;


use App\Models\problem_type;
use System\HMVC\HMVC;
use System\Utils\JS;

class Edit extends HMVC
{

    public function index()
    {

        // TODO: Implement index() method.
        $sth = new problem_type();
        if ($sth->update(ID)) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }
}