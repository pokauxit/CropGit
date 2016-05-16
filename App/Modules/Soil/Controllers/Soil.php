<?php
 namespace App\Modules\Soil\Controllers;
 use System\HMVC\HMVC;
 use App\Models\soil as  tbmap;
 use System\Security\ACL;
 
 
 class Soil extends HMVC{
     protected  $db;
     protected  $row;
     protected  $pk;
     public function __construct() {
         ACL::check("STAFF");
         parent::__construct();
     }

     public function index() {
        
        $this->db = new tbmap();
        $this->pk = $this->db->pk();
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
         $this->db = new tbmap();
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
