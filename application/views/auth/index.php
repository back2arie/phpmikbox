<blockquote>
	<p>Welcome to <strong>phpmikbox</strong>, the web-based mikrotik management</p>
	<small>Still under slow-pace development, you are welcome to contribute. Fork it on <a href="http://github.com/back2arie/phpmikbox">Github.</a></small>
</blockquote>

<form class="well form-inline" action="<?php echo site_url('auth/login');?>" method="post">
	<div class="divider"> </div>
	<input type="text" name="address" class="input-medium" placeholder="Mikrotik IP Address">
	<input type="text" name="port" class="input-medium" placeholder="Mikrotik API Port" value="8728">
	<input type="text" name="username" class="input-medium" placeholder="Username">
	<input type="password" name="password" class="input-medium" placeholder="Password">
	<button type="submit" class="btn">Log in</button>
</form>