<html>
<body>
<form action="login" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <?php if(Session::has('success')) { ?>
    <div class="alert-box success">
        <h3>{{ Session::get('success') }}</h3>
    </div>
	<?php } ?>
    
    User Id:<input type="text" name="user_id"><br>
    Password:<input type="password" name="password"><br>
    <input type="submit" value="Submit">

    
  </form>
</body>
</html> 