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
<td style="font-weight:bold">Product Link:</td>
<td><?php echo $rec->link; ?></td>
</tr>-->


<!--<tr>
<td style="font-weight:bold">Image:</td>
<td><img src="<?php echo base_url(); ?>public/products/<?php echo $rec->image; ?>" width="251"></td>
</tr>-->

<tr>
<td style="font-weight:bold">Content:</td>
<td><?php echo stripslashes($rec->content); ?></td>
</tr>

<!--<tr>
<td style="font-weight:bold">Applications:</td>
<td><?php echo stripslashes($rec->content1); ?></td>
</tr>

<tr>
<td style="font-weight:bold">Operation:</td>
<td><?php echo stripslashes($rec->content2); ?></td>
</tr>-->

<tr>
<td style="font-weight:bold">Created Date:</td>
<td><?php echo $rec->date; ?></td>
</tr>

<?php }  ?>
</tr>
</table>


