		<form method="post" action="<?php echo url::base();?>appointment/recordUpdate">
			<h2>Edit Appointment</h2>
			<table>
			<tr>
				<td>Name: </td>
				<td><input type="textbox" name="Name" value='<?=$data->Name ?>'/></td>
			</tr>
			<input type="hidden" value='<?=$data->ID ?>' name="ID">
			<tr>
				<td>Appointment: </td><td>
				<input type="textbox" name="Time" value='<?=$data->Time ?>'/></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Update" name="EditAppointment" class="button"/></td>
			</tr>
			</table>
		</form>