<?php
 namespace App\Modules\TypeFertilizer\Controllers;
 use System\HMVC\HMVC;
 use System\Security\ACL;
 use App\Models\type_fertilizer as tbmap;
 
  class TypeFertilizer extends HMVC{
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
