<table>
<?php
foreach($view_career_popup as $rec)
{
?>
<tr>
<td style="font-weight:bold">Name:</td>
<td><?php echo $rec->name; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Email:</td>
<td><?php echo $rec->email; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Phone Number:</td>
<td><?php echo $rec->phone; ?></td>
</tr>

<tr>
<td style="font-weight:bold">subject:</td>
<td><?php echo $rec->subject; ?></td>
</tr>

<tr>
<td style="font-weight:bold">block:</td>
<td><?php echo $rec->block; ?></td>
</tr>

<tr>
<td style="font-weight:bold">road:</td>
<td><?php echo $rec->road; ?></td>
</tr>

<tr>
<tr>
<td style="font-weight:bold">area:</td>
<td><?php echo $rec->area; ?></td>
</tr>



<tr>
<tr>
<td style="font-weight:bold">message:</td>
<td><?php echo stripslashes($rec->message); ?></td>
</tr>

<tr>
<td style="font-weight:bold">Posted Date:</td>
<td><?php echo $rec->date; ?></td>
</tr>



<?php } ?>
</tr>
</table>

