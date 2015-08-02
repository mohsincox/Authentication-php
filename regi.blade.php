<!-- 
<html>
<body>
	<form action="regist" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Name:<input type="text" name="name"><br>
    Password:<input type="password" name="password"><br>
	User Type:<input type="text" name="user_type"><br>
	User ID:<input type="text" name="user_id"><br>
    <input type="submit" value="Submit">

    
  </form>
</body>
</html> 
 -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
	<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/bootstrap-responsive.min.css') }}}" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container">

    <h1>Add Information of Users</h1>

<form class="form-horizontal" action="regist" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">User Type</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="User Type" name="user_type">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">User ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="User ID" name="user_id">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">ADD</button>
    </div>
  </div>
</form>

	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>