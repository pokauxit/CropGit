<?php

namespace App\Modules\WelcomePage\Controllers;

use App\Models\sys_welcome_page AS welcome_page;
use System\HMVC\HMVC;

class WelcomePage extends HMVC {

    protected $db;
    protected $rowId;

    function index() {
        $this->db = new welcome_page();
        $this->db->select();
        $this->view();
    }

    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->view("Add");
        }
    }

    public function Edit() {
        $this->db = new welcome_page();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->rowId = $this->db->get(ID);
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

    public function Active() {
        $this->controller();
    }
    public function Unactive() {
        $this->controller();
    }
    

}
