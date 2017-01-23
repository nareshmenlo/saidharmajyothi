<table>
<?php
foreach($view_banner_popup as $rec)
{

?>

<tr>
<td style="font-weight:bold">Name:</td>
<td><?php echo $rec->name; ?></td>
</tr>

<!--<tr>
<td style="font-weight:bold">Company Name:</td>
<td><?php echo $rec->link; ?></td>
</tr>-->


<!--<tr>
<td style="font-weight:bold">Image:</td>
<td><img src="<?php echo base_url(); ?>public/banner/<?php echo $rec->image; ?>" width="251"></td>
</tr>-->

<tr>
<td style="font-weight:bold">Description:</td>
<td><?php echo stripslashes($rec->content); ?></td>
</tr>

<tr>
<td style="font-weight:bold">Date:</td>
<td><?php echo $rec->date; ?></td>
</tr>

<?php }  ?>
</tr>
</table>


