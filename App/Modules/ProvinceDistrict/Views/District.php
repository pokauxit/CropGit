<?php while ($district = $this->districts->fetch()): ?>
    <option value="<?php echo $district->DISTRICT_ID; ?>"><?php echo $district->DISTRICT_NAME; ?></option>
<?php endwhile; ?>
