

		<div id="content">
			<div class="menu">
				<ul>
					<li><a href="<?php echo url::base();?>appointment">Show</a></li>
					<li><a href="#" id="addbutton">Add</a></li>
					<div id="clear"></div>
				</ul>
			</div>
			<table border='1' >
				<tr class="fieldName">
					<td></td>
					<td>ID</td>
					<td>Name</td>
					<td>Appointment Time</td>
				</tr>
					<?php 
						$count=1;
						foreach ($datas as $data){
							$color;
							$dtime = $data->Time;
								if($count%2==0){
									$color="white";
								}else{
									$color="gray";
								}
								if(substr($dtime,0,10)==Date("Y-m-d")){
									$color="red";
								}
					?>
				<tr id='<?=$color?>'>
						<td><a href="#" class='editbutton' id='<?=$data->ID;?>'>Edit</a> / 
							<a href="#" class='delbutton' id='<?=$data->ID;?>'>Delete</a>
						</td>
						<td><?=$data->ID; ?></td>
						<td><?=$data->Name; ?></td>
						<td><?=$data->Time; ?></td>
				</tr>
				<?php 
						$count++;
						}
				?>
			</table>
		</div>

		<div id="addForm">
				<form method="post" action="<?php echo url::base();?>appointment/save">
					<h2>Add Appointment</h2>

					<table>
					<tr>
						<td>Name: </td>
						<td><input type="textbox" name="Name"/></td>
					</tr>
					<tr>
						<td>Appointment Time: </td><td>
						<input type="textbox" name="Time" placeholder="yy-mm-dd hh:mm:ss"/></td>
					</tr>
					<tr>
						<th colspan="2"><input type="submit" value="Add" name="AddAppointment" class="button"/></th>
					</tr>
					</table>
			</form>
		</div>
			
		<div id="UpdateForm" >
			<div id="editcon">
			</div>
		</div>
			
		<script style="text/javascript">
						$(document).ready(function(){
				
					$('#addbutton').click(function(){
						$('#addForm').fadeIn( "fast" );
					});

					$('.editbutton').click(function(){
						var data = "ID=" + $(this).attr('ID');
						//alert(data);
						$.ajax({
							url: "<?php echo url::base();?>appointment/update",
							type: "POST",
							data: data,
							success: function(data){
								$("#editcon").html(data);
						}});
						$('#UpdateForm').fadeIn("fast");
					});

					$('.delbutton').click(function(){
						var data = "ID=" + $(this).attr('ID');
						$.ajax({
							url: "<?php echo url::base();?>appointment/delete",
							type: "POST",
							data: data,
							success: function(data){
								$("html").html(data);
						}});
					});
				});
		</script>