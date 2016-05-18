<?php echo System\Utils\JS::load();?>

<script>function check(obj){
    if(!CHECK.val(obj.staff_name)){
        return MSG.enter('ชื่อ-สกุล');
    }
    if(!CHECK.val(obj.staff_user)){
        return MSG.enter('ชื่อผู้ใช้');   
    }
      if(!CHECK.val(obj.staff_pass)){
        return MSG.enter('รหัสผ่าน');   
    }
      if(!CHECK.is(obj.staff_pass, obj.staff_pass_confirm)){
          return MSG.enter('รหัสผ่านไม่ตรงกัน');
      }
}</script>
<form name="form_insert_standard" method="post" action=""  onsubmit="return check(this)" >
    <table>
        <tr>
            <td>Name :</td>
            <td><input type="text" name="staff_name" value="<?php echo $this->row->staff_name?>"></td>
        </tr>
        <tr>
            <td>Username :</td>
            <td><input type="text" name="staff_user" value="<?php echo $this->row->staff_user?>"></td>
        </tr>
        <tr>
            <td colspan="2">
            <input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"> 
            <input type="reset" name="back" value="Back" onclick="window.location.href='<?php echo $this->route->backToModule()?>'">             
            </td>
        </tr>
</form>