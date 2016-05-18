<?php
 namespace App\Modules\Staff\Controllers;
 use System\HMVC\HMVC;
 use App\Models\staff as  stf;
 use System\Security\ACL;
 
 
 class Staff extends HMVC{
     protected  $db;
     protected  $row;
     
     public function __construct() {
         ACL::check("STAFF");
         parent::__construct();
     }

     public function index() {
        $this->db = new stf();
        $this->db->select();
        $this->view();
     }
     
    public function  Add(){
        if(SUBMIT){
            $this->controller();
        }else{
            $this->view("Add");
        }
        
    }
    
    public function  Edit(){
         $this->db = new stf();
        if(SUBMIT){
            $this->controller();
        }else{
            $this->row = $this->db->get(ID);
            $this->view("Edit");
        }
        
    }
    
    public function Delete(){
        $this->controller();
    }
   

}
 
 
?>
