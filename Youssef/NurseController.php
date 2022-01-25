<?php

include_once 'input.php';
include_once 'MoveDown.php';
include_once 'MoveLeft.php';
include_once 'MoveRight.php';
include_once 'MoveUp.php';
include_once 'RemoteControlInput.php';
include_once 'Bed.php';
if ($_POST) {
 
     
  
      
 
    if(isset($_POST['Move']))
	{
		$mov_adjuster = null;
		if($_POST['MoveOption'] == 'LEFT')
		{
			$mov_adjuster = new moveLeft($_POST['BedID']);
			$b = new Bed();
			$b->takeInput($mov_adjuster);
			$b->executeInput();
		}
		if($_POST['MoveOption'] == 'RIGHT')
		{
			$mov_adjuster = new moveRight($_POST['BedID']);
			$b = new Bed();
			$b->takeInput($mov_adjuster);
			$b->executeInput();	
		}
		if($_POST['MoveOption'] == 'UP')
		{
			 
		 
			$mov_adjuster = new moveUp($_POST['BedID']);
			$b = new Bed();
			$b->takeInput($mov_adjuster);
			$b->executeInput();	
		}
		if($_POST['MoveOption'] == 'DOWN')
		{
			$mov_adjuster = new moveDown($_POST['BedID']);
			$b = new Bed();
			$b->takeInput($mov_adjuster);
			$b->executeInput();	
		}
	}

	
     
 }
   
   
     




?>