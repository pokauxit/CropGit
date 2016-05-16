<?php echo System\Utils\JS::load();?>

<script>function check(obj){
    if(!CHECK.val(obj.type_fertilizer_name)){
        return MSG.enter('ชนิดปุ๋ย');   
    }
       
}</script>
<form name="type_plant" method="post" action="" onsubmit="return check(this)" >
	type_fertilizer_name <input type="text" name="type_fertilizer_name" value=""><br>
 
       
	<input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"> 
        <input type="reset" name="back" value="Back" onclick="window.location.href='<?php echo $this->route->backToModule()?>'"> 
</form>