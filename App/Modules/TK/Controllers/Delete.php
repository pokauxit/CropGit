<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 18/5/2559
 * Time: 9:35
 */

namespace App\Modules\Tk\Controllers;


use App\Models\problem_type;
use System\HMVC\HMVC;
use System\Utils\JS;

class Delete extends HMVC
{

    public function index()
    {
        // TODO: Implement index() method.
        $sth = new problem_type();
        if ($sth->delete(ID)) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }
}