<?php

namespace App\Modules\Anusit\Controllers;

use App\Models\anu;
use System\HMVC\HMVC;
use System\Security\ACL;

class Anusit extends HMVC {

    protected $db;
    protected $row;

    public function __construct() {
        //ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new anu();
        $this->db->select();
        $this->view();
    }

//Controller/add.php
    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->view("Add");
        }
    }

//Controller/edit.php
    public function Edit() {
        $this->db = new anu();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->row = $this->db->get(ID);
            $this->view("Edit");
        }
    }

//Controller/delete.php
    public function Delete() {
        $this->controller();
    }

}

?>
