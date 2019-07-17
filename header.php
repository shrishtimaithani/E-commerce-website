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

<title> header!</title>

	<link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<style type="text/css">


         #top {
	  
	  height:46px;
	  background-color:#252527;
	  width:100%;
	  color:white;
	  text-align:center;
	  padding-top:8px;
	  margin:0px;
	  
	  }
	  
	  #start {
	  
	  font-weight:bold;
	  font-size:20px;
	  padding-left:24px;
	  
	  }
	  
	  #fashion {
	  
	  font-size:20px;
	  
	  }
	  
	  #timer {
	  
	  padding:50px;
	 
	  
	  
	  }
	  
	  #second {
	  
	 background-color:pink;
	 height:70px;
	 width:100%;
	 text-align:center;
	 
	   
	   
	  
	  }
	  
	  .texts {
	  
	  font-size:38px;
	   color:#323333;
	  font-family: 'Akronim';
	  }
	  
	
  #search {
  
  width:270px;
  
  
  }
  
  

   
   input[type=search] {
   
 
  background:white; 
  background-image:url("search-icon.jpg");
  background-size:21px;
  background-repeat:no-repeat;
  background-position:5px;
  padding:12px 20px 12px 35px;
  
  }
  
  #user {
  
  color:black;
  font-size:24px;
  width:15px;
  
  
  }
  
  #bag {
  
  color:black;
  font-size:24px;
  width:40px;
  
  }
  
 #heart {
 
  color:black;
  font-size:24px;
  width:40px;
 
 }
 
 #bell {
 
 color:black;
  font-size:24px;
  width:40px;
 
 }

  

	 
  
  
 
	
	


</style>

</head>

<body>


	<nav id="top" class="alert alert-warning alert-dismissible" "navbar">
	
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 
	 <span aria-hidden="true">&times;</span>
	 
	 </button>
	 
      <span id="fashion">FASHION TRENDS BROADCAST!</span>
	  
	    <span id="start">START AT ₹200</span>
		
		<strong><span id="timer"></span></strong>
		
		</nav>
		
	

 <nav class="navbar navbar-expand-lg navbar fixed-position navbar-light" id="second">
  <a class="navbar-brand texts" href="#">Wardrobe Essentials</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="men.php"><strong>Men</strong></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="women.php"><strong>Women</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kids.php"><strong>Kids</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php"><strong>Home & living</strong></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
	
      <input class="form-control mr-sm-2" id="search" 
	  type="search" placeholder="Search" aria-label="Search">
	 
	 
	 <a class="nav-link" href="login.php">
	 
	 <i class="fas fa-user" id="user"></i></a>
	 
	 <i class="far fa-bell" id="bell"></i>
	  
	 <i class="far fa-heart" id="heart"></i>
	 
	 <i class="fas fa-shopping-bag" id="bag"></i>
	  
    </form>
  </div>
</nav>






	
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
	
	
	<script type="text/javascript">

var countDownDate = new Date("FEB 21, 2021 15:37:25").getTime();


var x = setInterval(function() {

  
  var now = new Date().getTime();
    
  
  var distance = countDownDate - now;
    
 
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    

  document.getElementById("timer").innerHTML = days + " D " + hours + " H "
  + minutes + " M " + seconds + " S ";
    
 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
	
	
  </body>
  
  
</html>