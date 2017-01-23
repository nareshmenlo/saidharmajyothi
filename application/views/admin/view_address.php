<div class="control-group">
<label class="control-label">Select Sub Category </label>
<div class="controls">
 <select name="address"  id="category" class="medium m-wrap" value="<?php echo set_value('address'); ?>" required>
<option selected="selected" value="">[Select]</option>
<?php
foreach($view_address as $loc)
{
?>
<option value="<?php echo $loc->sno; ?>"><?php echo $loc->category; ?></option>
        <?php } ?>
       </select>
<div style="color:#F00"><?php echo form_error('address'); ?></div>
</div>
</div>