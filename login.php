<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>

  <style>
    #login .container #login-row #login-column #login-box {
        margin-top: 120px;
        max-width: 600px;
        height: 300px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
    }
    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
      margin-top: -85px;
    }
  </style>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- FORM LOGIN -->
    <div class="text-center">
    <div class="jumbotron">
    <div class="rerun"><a href="#">ดูรายงาน</a></div>
        <div class="row justify-content-center" style="">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-info">Login</h3><br>
                        <form  method="post" action="check_login.php">
                            <div class="form-group">
                                <input type="text" class="form-control"  required="required" placeholder="Enter Username" name="txtUsername"/> 
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  required="required" placeholder="Enter Password" name="txtPassword"/>
                            </div>
                            <div class="help-block text-right"><a href="#">ลืมรหัสผ่าน?</a></div>
                            <button type="submit" id="sendlogin" class="btn btn-primary">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    </div>
    

</body>
</html>
