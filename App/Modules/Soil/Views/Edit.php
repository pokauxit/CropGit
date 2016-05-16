<?php echo System\Utils\JS::load();?>

<script>function check(obj){
    if(!CHECK.val(obj.soil_name)){
        return MSG.enter('ชื่อของดิน');   
    }
     if(!CHECK.val(obj.soil_type)){
        return MSG.enter('ชนิดของดิน');   
    }
     if(!CHECK.val(obj.soil_factor)){
        return MSG.enter('จุดเด่นของดิน');   
    }
     if(!CHECK.val(obj.soil_problem)){
        return MSG.enter('ปัญหาของดิน');   
    }
      if(!CHECK.val(obj.soil_nutrition)){
        return MSG.enter('คุณค่าของดิน');   
    }
       
}</script>
<form name="type_plant" method="post" action="" onsubmit="return check(this)" >
	soil_name <input type="text" name="soil_name" value="<?php echo $this->row->soil_name?>"><br>
        soil_type <input type="text" name="soil_type" value="<?php echo $this->row->soil_type?>"><br>
        soil_factor <input type="text" name="soil_factor" value="<?php echo $this->row->soil_factor?>"><br>
        soil_problem <input type="text" name="soil_problem" value="<?php echo $this->row->soil_problem?>"><br>
       soil_nutrition<input type="text" name="soil_nutrition" value="<?php echo $this->row->soil_nutrition?>"><br>
       
	<input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"> 
        <input type="reset" name="back" value="Back" onclick="window.location.href='<?php echo $this->route->backToModule()?>'"> 
</form>