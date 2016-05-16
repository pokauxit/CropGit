<?php

 while ($rc  = $this->db->fetch()){
     print_r($rc);
   ?>
         <a href="<?php echo $this->route->Edit($rc->problem_type_id);?>">edit </a> 
         <a  onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->problem_type_id);?>"> delete</a>
         <?php  echo "<hr>";
 }
 
?>
<a href="<?php echo $this->route->Add();?>">Add</a>
 