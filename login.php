<html>
<head>

 <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1,
	shrink-to-fit=no">

    
    <link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1
	/css/bootstrap.min.css" integrity="sha384-
	GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
	crossorigin="anonymous">

<title>Login!</title>

	<link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<style type="text/css">
	
	
	
	#login {
		
		margin-top:50px;
		margin-bottom:10px;
		font-size:36px;
		font-family:sans-serif;
			text-align:center;
			color:#3D4246;
		
	}
	
	.form-group {
		
		font-family:sans-serif;
		width:590px;
		position:relative;
		left:270px;
		
	}
	
	#exampleInputEmail1 {
		
		margin-bottom:25px;
		font-family:sans-serif;
		background-color:#F2F2F2;
		
			
		
	}
	
	#exampleInputPassword1 {
		
		margin-bottom:25px;
		font-family:sans-serif;
		background-color:#F2F2F2;
		
		
		
	}
	
	#sign {
		
		background-color:#C82333;
		border:#C82333;
	    position:relative;
		left:510px;
		
	}
	
	#create {
		
		margin-top:20px;
		margin-bottom:40px;
		
	}
	
</style>

</head>

<body>

   <?php include"header.php" ?>


    <div class="container">
	
	<p id="login">Login</p>
	
	<form>
  <div class="form-group">
  
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" 
	id="exampleInputEmail1" aria-describedby="emailHelp" 
	placeholder="Enter email">
	
     </div>
	 
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"
	id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <p style="text-align:center; font-family:sans-serif;"> Forgot your password?</p>
  
  <button type="submit" class="btn btn-primary" id="sign">
  SIGN IN</button>
  
  
    <p style="text-align:center; font-family:sans-serif;" id="create">
	 Create account</p>
  
</form>
	
	
	
	
	
	</div>






	
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
	integrity="sha384-
	q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
	crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6
	/umd/popper.min.js" integrity="sha384-
	wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
	crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1
	/js/bootstrap.min.js" 
	integrity="sha384-
	B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" 
	crossorigin="anonymous"></script>
	
	
	
	 <?php include"footer.php" ?>
	
		
  </body>
  
  
</html>
	