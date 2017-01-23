<table>
<?php
foreach($view_career_popup as $rec)
{
?>
<tr>
<td style="font-weight:bold">Company / Ministry:</td>
<td><?php echo $rec->company; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Event Date:</td>
<td><?php echo $rec->event_date; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Address:</td>
<td><?php echo $rec->address; ?></td>
</tr>

<tr>
<td style="font-weight:bold">P.O. Box:</td>
<td><?php echo $rec->pobox; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Contact Person:</td>
<td><?php echo $rec->person; ?></td>
</tr>

<tr>
<td style="font-weight:bold">E-mail Address::</td>
<td><?php echo $rec->email; ?></td>
</tr>

<tr>
<tr>
<td style="font-weight:bold">Alternative Contact Person:</td>
<td><?php echo $rec->alt_person; ?></td>
</tr>

<tr>
<tr>
<td style="font-weight:bold">CR:</td>
<td><?php echo $rec->cr; ?></td>
</tr>

<tr>
<tr>
<td style="font-weight:bold">Mobile:</td>
<td><?php echo ($rec->mobile); ?></td>
</tr>

<tr>
<td style="font-weight:bold">Fax :</td>
<td><?php echo $rec->fax; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Apply Date:</td>
<td><?php echo $rec->date; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Are you Al Zayani Investements W.L.L Customer?:</td>
<td><?php echo $rec->customer; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Are you authorized to apply for this kind of request?:</td>
<td><?php echo $rec->authorized; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Are you AL ZAYANI INVESTMENTS B.S.C Staff?:</td>
<td><?php echo $rec->investor; ?></td>
</tr>

<tr>
<td style="font-weight:bold">If yes, Please indicate your position:</td>
<td><?php echo $rec->indicate; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Did you apply previously for any other sponsorship?:</td>
<td><?php echo $rec->prev_apply; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Was the application Successful?:</td>
<td><?php echo $rec->successful; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Please name the Event:</td>
<td><?php echo $rec->event_name; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Type of event:</td>
<td><?php echo $rec->event_type; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Other Activity :</td>
<td><?php echo $rec->other_activity; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Duration of the event ( specify start date and end date ) :</td>
<td><?php echo $rec->duration; ?></td>
</tr>

<tr>
<td style="font-weight:bold">Why did you choose AL ZAYANI to sponsor such event? :</td>
<td><?php echo stripslashes($rec->why_zayani); ?></td>
</tr>

<tr>
<td style="font-weight:bold">What will AL ZAYANI gain from sponsoring this event? :</td>
<td><?php echo stripslashes($rec->gain); ?></td>
</tr>

<tr>
<td style="font-weight:bold">What sort of things will be done in this event to enhance AL ZAYANI's image, brand, services, & reputation? :</td>
<td><?php echo stripslashes($rec->reputation); ?></td>
</tr>

<tr>
<td style="font-weight:bold">What is the budget required for this event, in Bahraini Dinars? :</td>
<td><?php echo $rec->budget; ?></td>
</tr>


<tr>
<td style="font-weight:bold">Apply Sponsorship Date :</td>
<td><?php echo $rec->date; ?></td>
</tr>

<?php } ?>
</tr>
</table>

