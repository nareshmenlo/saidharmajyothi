<table>
<?php
foreach($view_banner_popup as $rec)
{

?>


<tr>
<td style="font-weight:bold">Category:</td>
<td><?php echo $rec->category; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Sub Category:</td>
<td><?php echo $rec->sub_category; ?></td>
</tr>


<tr>
<td style="font-weight:bold"> Title:</td>
<td><?php echo $rec->name; ?></td>
</tr>




<tr>
<td style="font-weight:bold">Image:</td>
<td><img src="<?php echo base_url(); ?>public/facts/<?php echo $rec->image; ?>" width="251"></td>
</tr>

<tr>
<td style="font-weight:bold">Description:</td>
<td><?php echo stripslashes($rec->content); ?></td>
</tr>

<?php }  ?>
</tr>
</table>


