<?php

namespace App\Modules\Login\Controllers;

use System\HMVC\HMVC;
use App\Models\staff;

class Login extends HMVC {
    protected  $db;

    public function index() {
        echo "Please login";
        echo "<br>";
        echo "<a href='?Login/take'></a>";
    }

    public function take() {
        $staff = new staff();
        //$this->row = $this->db->get(ID);
        $this->session("STAFF", $staff->get(1));
        echo "Login success.";
    }

}

?>
