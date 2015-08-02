<!--
<html>
<body>
<table>
	<tr>
		<th>Name</th>
		<th>User Type</th>
		<th>User ID</th>
		<th>Created Date</th>
		<th>Modified Date</th>	
	</tr>
	<?php foreach ($use as $u) { ?>
	<tr>
		<td><?php echo $u->name; ?></td>
		<td><?php echo $u->user_type; ?></td>
		<td><?php echo $u->user_id; ?></td>
		<td><?php echo $u->created_at; ?></td>
		<td><?php echo $u->updated_at; ?></td>
	</tr>
	<?php
}
	?> 
</table>
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
	<?php if(Session::has('success')) { ?>
    <div class="alert-box success">
        <h2>{{ Session::get('success') }}</h2>
    </div>
	<?php } ?>

    <h1>Show Information of Users</h1><?php echo Auth::id(); ?> 

	<table class="table table-striped table-bordered">
	<tr>
		<th>Name</th>
		<th>User Type</th>
		<th>User ID</th>
		<th>Created Date</th>
		<th>Modified Date</th>	
		<th>Action</th>	
	</tr>
	<?php foreach ($use as $u) { ?>
	<tr>
		<td><?php echo $u->name; ?></td>
		<td><?php echo $u->user_type; ?></td>
		<td><?php echo $u->user_id; ?></td>
		<td><?php echo $u->created_at; ?></td>
		<td><?php echo $u->updated_at; ?></td>
		<td>
			<a href="edit/<?php echo $u->id; ?>"><button type="submit" class="btn btn-default">Edit</button></a>
			<a href="delete/<?php echo $u->id; ?>"><button type="submit" class="btn btn-default">Delete</button></a>
		</td>
	</tr>
	<?php
}
	?> 
	</table>
	<a href="logout"><button type="submit" class="btn btn-default">Logout</button></a>
	<?php //echo $use->render(); ?>
<!-- <center>
<nav>
  <ul class="pagination">
    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</center> -->
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>