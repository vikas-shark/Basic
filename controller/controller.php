<?php 
include('model/model.php');
 class Controller{
 	
 	function getName() {
 		
 	    $model= new Model();
 	    $data=$model->getData();
 	    $content=$data['content'];
 	    $title=$data['title'];
 	    if(isset($_POST['username'])) {
 	    	$userName = $_POST['username'];
 	    	$password =  $_POST['password'];
 	    } else {
 	    	$userName='Guest';
 	    }
 	    
 		include('view/header.html');
 		include('view/content.html');
 		include('view/footer.html');
 	}
 }

?>