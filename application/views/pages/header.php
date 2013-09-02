		<div id="header">
			<div class="logo"><a href="<?php echo URL::site('home'); ?>"><img src="assets/img/logo.png" alt=""/></a></div>
			<div class="taglines">
				<h4>L and A's Hotel</h4>
				<h5>have it your way ...</h5>
			</div>
			<div id="navigation">
				<ul>
					<li class="<?php echo (Request::$current->controller()==='home') ? 'selected':''?>">
						<a href="<?php echo URL::site('home'); ?>">Home</a>
					</li>
					<li class="<?php echo (Request::$current->controller()==='table') ? 'selected':''?>">
						<a href="<?php echo URL::site('appointment'); ?>">Appointment</a>
					</li>
					<li><a href="#">Menu3</a></li>
					<div id="clear"></div>
				</ul>
			</div>
		</div>