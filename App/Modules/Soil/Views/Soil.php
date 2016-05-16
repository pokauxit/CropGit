<?php
$pk = $this->pk;
 while ($rc  = $this->db->fetch()){
     print_r($rc);
   ?>
         <a href="<?php echo $this->route->Edit($rc->$pk);?>">edit </a> 
         <a  onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->$pk);?>"> delete</a>
         <?php  echo "<hr>";
 }
 
?>
<a href="<?php echo $this->route->Add();?>">Add</a>