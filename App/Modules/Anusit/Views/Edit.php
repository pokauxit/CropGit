<?php echo System\Utils\JS::load();?>

<script>function check(obj){
    if(!CHECK.val(obj.type_name)){
        return MSG.enter('ชื่อชนิด');   
    }
      if(!CHECK.val(obj.note)){
        return MSG.enter('หมายเหตุ');   
    }
}</script>
<form name="anu" method="post" action="" onsubmit="return check(this)" >
	Name :  <input type="text" name="anu_name" value="<?php echo $this->row->anu_name?>"><br>
	Note :  <input type="text" name="anu_note" value="<?php echo $this->row->anu_note?>"><br>
       
	<input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"> 
           <input type="reset" name="back" value="Back" onclick="window.location.href='<?php echo $this->route->backToModule()?>'"> 
</form>