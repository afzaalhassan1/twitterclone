<div class="row">
	<div class="col-md-6">
		<h1>Sign up</h1>
		<form class="form-horizontal" role="form" action="/user/signup" method="POST" >
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Username</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" placeholder="Enter your username" name="username">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" placeholder="Enter your password" name="password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Sign up</button>
		    </div>
		  </div>
		</form>
	</div>
	<div class="col-md-6">
		<h1>Sign in</h1>
		<form class="form-horizontal" role="form">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="usernameInput" placeholder="Username">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="passwordInput" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default" id="signin_button"> Sign in</button>
		    </div>
		  </div>
		</form>
	</div>
</div>