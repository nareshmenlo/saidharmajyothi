<table>
<?php
foreach($view_banner_popup as $rec)
{

?>

<tr>
<td style="font-weight:bold">Service Name:</td>
<td><?php echo $rec->strategies_name; ?></td>
</tr>

<!--<tr>
<td style="font-weight:bold">Banner Link:</td>
<td><?php echo $rec->link; ?></td>
</tr>-->


<!--<tr>
<td style="font-weight:bold">Image:</td>
<td><img src="<?php echo base_url(); ?>public/banner/<?php echo $rec->image; ?>" width="251"></td>
</tr>-->

<tr>
<td style="font-weight:bold">Content:</td>
<td><?php echo stripslashes($rec->content); ?></td>
</tr>

<?php }  ?>
</tr>
</table>


