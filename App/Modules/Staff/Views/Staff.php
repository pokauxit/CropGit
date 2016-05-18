<table border="1">
    <tr>
    <th>เลขไอดี</th>
    <th>ชื่อ-สกุล</th>
    <th>ชื่อผู้ใช้</th>
    <th>สถานะ</th>
    <th>ตัวเลือก</th>
    </tr>
<?php 
    while ($rc  = $this->db->fetch()){
?>
    <tr>
    <td><?php echo $rc->staff_id?></td>
    <td><?php echo $rc->staff_name?></td>
    <td><?php echo $rc->staff_user?></td>
    <td><?php echo $rc->staff_level?></td>
    <td>
        <a href="<?php echo $this->route->Edit($rc->staff_id);?>">edit </a> |  
        <a  onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->staff_id);?>"> delete</a>
    </td>
    </tr>
<?php } ?>
    <tr>
    <td colspan="5">
        <a href="<?php echo $this->route->Add();?>">Add</a>
    </td>
    </tr>
</table>