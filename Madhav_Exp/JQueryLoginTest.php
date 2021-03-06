<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login to the application</title>
<link rel="stylesheet" type="text/css" href="jQuery_Login_style.css" />
<!--<script type="text/javascript" src="jquery-1.5.2.min.js"></script> This was the original one-->

<script type="text/javascript" src="\jQuery_jsLibs\jquery\jquery-1.7.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	$("#login").click(function() {
	
		var action = $("#form1").attr('action');
		var form_data = {
			username: $("#username").val(),
			password: $("#password").val(),
			is_ajax: 1
		};
		
		$.ajax({
			type: "POST",
			url: action,
			data: form_data,
			success: function(response)
			{
				if(response == 'success')
					$("#form1").slideUp('slow', function() {
						$("#message").html("<p class='success'>You have logged in successfully!</p>");
					});
				else
					$("#message").html("<p class='error'>Invalid username and/or password.</p>");	
			}
		});
		
		return false;
	});
	
});
</script>
</head>

<body>
<p>&nbsp;</p>
<div id="content">
  <h1>Login Form</h1>
  <form id="form1" name="form1" action="doLogin.php" method="post">
    <p>
      <label for="username">Username: </label>
      <input type="text" name="username" id="username" />
    </p>
    <p>
      <label for="password">Password: </label>
      <input type="password" name="password" id="password" />
    </p>
    <p>
      <input type="submit" id="login" name="login" />
    </p>
  </form>
    <div id="message"></div>
</div>
</body>
</html>