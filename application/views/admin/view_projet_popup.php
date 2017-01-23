<table>
<?php
foreach($view_banner_popup as $rec)
{

?>

<tr>
<td style="font-weight:bold">Project Title:</td>
<td><?php echo $rec->name; ?></td>
</tr>




<tr>
<td style="font-weight:bold">Image:</td>
<td><img src="<?php echo base_url(); ?>public/project/<?php echo $rec->image; ?>" width="251"></td>
</tr>

<tr>
<td style="font-weight:bold">Description:</td>
<td><?php echo stripslashes($rec->content); ?></td>
</tr>

<?php }  ?>
</tr>
</table>


