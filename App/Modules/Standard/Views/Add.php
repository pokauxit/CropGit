<?php echo System\Utils\JS::load();?>

<script>function check(obj){
    if(!CHECK.val(obj.standard_name)){
        return MSG.enter('ชื่อมาตรฐาน');   
    }
      if(!CHECK.val(obj.org)){
        return MSG.enter('หน่วยงาน');   
    }
}</script>
<form name="form_insert_standard" method="post" action="" onsubmit="return check(this)" >
	standard_name <input type="text" name="standard_name" value=""><br>
	org <input type="text" name="org" value=""><br>
	<input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"> 
              <input type="reset" name="back" value="Back" onclick="window.location.href='<?php echo $this->route->backToModule()?>'"> 
</form>