<table>
<?php
foreach($edit_banner as $rec)
{
?>





<tr>
<td style="font-weight:bold">Category:</td>
<td><?php echo $rec->category; ?></td>
</tr>

<tr>
<td style="font-weight:bold"> Title:</td>
<td><?php echo $rec->title; ?></td>
</tr>


<tr>
<td style="font-weight:bold"> Location:</td>
<td><?php echo $rec->location; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Details:</td>
<td><?php echo stripslashes($rec->address); ?></td>
</tr>




<?php } ?>
</tr>
</table>


