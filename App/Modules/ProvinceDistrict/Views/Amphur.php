<?php while ($amphur = $this->amphurs->fetch()): ?>
    <option value="<?php echo $amphur->AMPHUR_ID; ?>"><?php echo $amphur->AMPHUR_NAME; ?></option>
<?php endwhile; ?>
