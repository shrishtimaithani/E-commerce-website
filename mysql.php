<?php

  mysqli_connect("localhost","cl29-users-bzh", "YTTMcfhK.");
  
  if(mysqli_connect_error()) {
	  
	  echo "There was an error connecting to the database";  
	  
	  
  } else {
	  
	  echo "Database connection successful!";
	  
	  
  }




?>