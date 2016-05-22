<form action="" method="post" enctype="multipart/form-data">
    Name : <input type="text" name="name" value="<?php echo $this->rowId->name; ?>"><br>
    Pic : <input type="file" name="pic" value="<?php echo $this->rowId->pic; ?>"><br>
    Active : 
    <select name="active">
        <option value="0" <?php if($this->rowId->active=='0'){echo 'selected';}?>>Hidden</option>
        <option value="1" <?php if($this->rowId->active=='1'){echo 'selected';}?>>Show</option>
    </select>
    <br>
    <input type="submit" value="Save" name="submit">
</form>
