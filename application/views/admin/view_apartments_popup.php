<table>
<?php
foreach($view_banner_popup as $rec)
{
?>


<tr>
<td style="font-weight:bold">Name:</td>
<td><?php echo $rec->name; ?></td>
</tr>




<tr>
<td style="font-weight:bold">Description:</td>
<td><?php echo stripslashes($rec->content); ?></td>
</tr>




<?php } ?>
</tr>
</table>


