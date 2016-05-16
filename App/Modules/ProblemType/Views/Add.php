<?php echo System\Utils\JS::load();?>

<script>function check(obj){
    if(!CHECK.val(obj.problem_type_name)){
        return MSG.enter('ชนิดปัญหา');   
    }
    if(!CHECK.val(obj.problem_type_detail)){
        return MSG.enter('รายละเอียดของชนิด');   
    }
}</script>
<form name="" method="post" action="" onsubmit="return check(this)" >
	problem_type_name <input type="text" name="problem_type_name" value=""><br>
	problem_type_detail <input type="text" name="problem_type_detail" value=""><br>
	<input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"> 
              <input type="reset" name="back" value="Back" onclick="window.location.href='<?php echo $this->route->backToModule()?>'"> 
</form>