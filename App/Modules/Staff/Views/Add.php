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
      if(!CHECK.eda(obj.staff_pass, obj.staff_pass_confirm)){
          return MSG.enter('รหัสผ่านไม่ตรงกัน');
      }
}</script>
<form name="form_insert_standard" method="post" action="" onsubmit="return check(this)" >
    <table border="0">
        <tr>
            <td>Name :</td>
            <td><input type="text" name="staff_name" value=""></td>
        </tr>
        <tr>
            <td>Username :</td>
            <td><input type="text" name="staff_user" value=""></td>
        </tr>
        <tr>
            <td>Password :</td>
            <td><input type="password" name="staff_pass" value=""></td>
        </tr>
        <tr>
            <td>Confirm Password :</td>
            <td><input type="password" name="staff_password_confirm" value=""></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Submit"> 
                <input type="reset" name="reset" value="Reset"> 
                <input type="reset" name="back" value="Back" onclick="window.location.href='<?php echo $this->route->backToModule()?>'">            
            </td>
        </tr>
    </table>
</form>