<?php
 namespace App\Modules\ProblemType\Controllers;
 use System\HMVC\HMVC;
 use System\Security\ACL;
 use App\Models\problem_type as tbmap;
  class ProblemType extends HMVC{
       protected  $db;
       protected  $row;
       
       public function __construct() {
           ACL::check("STAFF");
           parent::__construct();
           
       }
       
       public function index() {
            $this->db = new tbmap();
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
