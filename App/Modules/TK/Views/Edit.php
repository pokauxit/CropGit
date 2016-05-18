<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 18/5/2559
 * Time: 9:42
 */

?>

<form action="" method="post">
    name<input type="text" name="problem_type_name" id="problem_type_name" required
               value="<?php echo $this->rowId->problem_type_name; ?>">
    <br>
    detail<textarea name="problem_type_detail" id="problem_type_detail" cols="30" rows="10" required><?php echo $this->rowId->problem_type_detail; ?></textarea>
    <br>
    <input type="submit" value="Save" name="submit">
</form>
