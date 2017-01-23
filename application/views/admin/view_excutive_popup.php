<table>
<?php
foreach($edit_banner as $rec)
{
?>

<!--<tr>
<td style="font-weight:bold">Business Category:</td>
<td><?php echo $rec->category; ?></td>
</tr>-->



<tr>
<td style="font-weight:bold">Member Name:</td>
<td><?php echo $rec->name; ?></td>
</tr>

<tr>
<td style="font-weight:bold"> Position:</td>
<td><?php echo $rec->position; ?></td>
</tr>



<tr>
<td style="font-weight:bold">Member Photo:</td>
<td><img src="<?php echo base_url(); ?>public/excutive/<?php echo $rec->image; ?>" width="251"></td>
</tr>



<tr>
<td style="font-weight:bold">Member Description:</td>
<td><?php echo stripslashes($rec->content); ?></td>
</tr>


<?php } ?>
</tr>
</table>


