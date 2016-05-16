<?php
 namespace App\Modules\PlantType\Controllers;
 use App\Models\type_plant;
 use System\HMVC\HMVC;
 use System\Security\ACL;
 
 class PlantType extends HMVC{
      protected  $db;
     protected  $row;
    
    public function __construct() {
         ACL::check("STAFF");
         parent::__construct();
     }
     
     public function index() {
        $this->db = new type_plant();
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
            $this->db = new type_plant();
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
