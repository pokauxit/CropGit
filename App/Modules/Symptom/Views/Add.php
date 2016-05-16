<?php echo System\Utils\JS::load();?>

<script>function check(obj){
    if(!CHECK.val(obj.symptom_name)){
        return MSG.enter('ชื่ออาการ');   
    }
      if(!CHECK.val(obj.symptom_detail)){
        return MSG.enter('รายละเอียดอาการ');   
    }
}</script>
<form name="" method="post" action="" onsubmit="return check(this)" >
	symptom_name <input type="text" name="symptom_name" value=""><br>
	symptom_detail <input type="text" name="symptom_detail" value=""><br>
	<input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"> 
              <input type="reset" name="back" value="Back" onclick="window.location.href='<?php echo $this->route->backToModule()?>'"> 
</form>