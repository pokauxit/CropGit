<?php

/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 18/5/2559
 * Time: 9:18
 */
namespace App\Modules\Tk\Controllers;

use App\Models\problem_type;
use System\HMVC\HMVC;


class Tk extends HMVC
{
    protected $db;
    protected $rowId;

    public function index()
    {
        $this->db = new problem_type();
        $this->db->select();
        $this->view();
    }

    public function Add()
    {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->view("Add");
        }
    }

    public function Edit()
    {
        $this->db = new problem_type();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->rowId = $this->db->get(ID);
            $this->view("Edit");
        }
    }

    public function Delete()
    {
        $this->controller();
    }
}