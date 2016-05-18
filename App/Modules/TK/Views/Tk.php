<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 18/5/2559
 * Time: 9:19
 */

echo "Hello Tk";
?>
<a href="<?php echo $this->route->Add(); ?>">Add</a>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Detail</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($rc = $this->db->fetch()): ?>
        <tr>
            <td><?php echo $rc->problem_type_id; ?></td>
            <td><?php echo $rc->problem_type_name; ?></td>
            <td><?php echo $rc->problem_type_detail; ?></td>
            <td>
                <a href="<?php echo $this->route->Edit($rc->problem_type_id);?>">Edit</a>
                <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->problem_type_id);?>"">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
