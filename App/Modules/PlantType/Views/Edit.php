<?php echo System\Utils\JS::load();?>

<script>function check(obj){
    if(!CHECK.val(obj.type_name)){
        return MSG.enter('ชื่อชนิด');   
    }
      if(!CHECK.val(obj.note)){
        return MSG.enter('หมายเหตุ');   
    }
}</script>
<form name="type_plant" method="post" action="" onsubmit="return check(this)" >
	type_name <input type="text" name="type_name" value="<?php echo $this->row->type_name?>"><br>
	note <input type="text" name="note" value="<?php echo $this->row->note?>"><br>
       
	<input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"> 
           <input type="reset" name="back" value="Back" onclick="window.location.href='<?php echo $this->route->backToModule()?>'"> 
</form>