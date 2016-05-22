<a href="<?php echo $this->route->Add(); ?>">Add</a>
<table width="100%" border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Pic</th>
        <th>Active</th>
        <th>Action</th>
    </tr>
    <?php while ($rc = $this->db->fetch()) { ?>
        <tr>
            <td><?php echo $rc->id; ?></td>
            <td><?php echo $rc->name; ?></td>
            <td><img src="AttachFile/welcome_page/<?php echo $rc->pic; ?>" height="50"></td>
            <td align="center"><?php echo $rc->active; ?></td>
            <td align="center">
                <?php if ($rc->active == 1) { ?>
                    <a href="<?php echo $this->route->go("Unactive/" . $rc->id); ?>">Unactive</a>
                <?php } else { ?>
                    <a href="<?php echo $this->route->go("Active/" . $rc->id); ?>">Active</a>
                <?php } ?>
                |
                <a href="<?php echo $this->route->Edit($rc->id); ?>">Edit</a> |
                <a onclick="return confirm('ยืนยันการลบ')"  href="<?php echo $this->route->Delete($rc->id); ?>"">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
