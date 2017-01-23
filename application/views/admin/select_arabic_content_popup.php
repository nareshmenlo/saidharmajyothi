<table>
<?php
foreach($edit_content as $rec)
{
?>
<tr>
<tr>
<td style="font-weight:bold">Content Name:</td>
<td><?php echo $rec->content_name; ?></td>
</tr>

<tr>
<tr>
<td style="font-weight:bold">Content In Arabic:</td>
<td><?php echo stripslashes($rec->content_arabic); ?></td>
</tr>

<tr>
<td style="font-weight:bold">Date:</td>
<td><?php echo $rec->Date; ?></td>
</tr>



<?php } ?>
</tr>
</table>

