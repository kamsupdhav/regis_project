<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="www/regis/bootstaps/css/style.css">
      <link rel="shortcut icon" href="favicon.ico">
      <link rel="icon" type="image/gif" href="animated_favicon1.gif">
</head>

<body>

<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
 
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">

    <form  method="post" action="confrim_repass.php">
      <div class="input-container" color="#66b3ff">
        <input type="text" id="#{label}" required="required" name="txtpassword"/>
        <label for="#{label}">password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" required="required" name="txtPassword"/>
        <div></div>
        <label for="#{label}">Re-Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container" type="submit">
        <button><span>Re-Password</span></button>
      </div>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="g/js/index.js"></script>

</body>
</html>
