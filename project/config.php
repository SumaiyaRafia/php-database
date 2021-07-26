<?php

switch($_SERVER['SCRIPT_NAME']){
	case '/project/login.php':
    $CURRENT_PAGE = "Login";
    $PAGE_TITLE= "Login Page";
	break;
    case '/project/registration-form.php':
    $CURRENT_PAGE = "Registration";
    $PAGE_TITLE= "Registration Page";
	break;
	case '/project/dashboard.php':
    $CURRENT_PAGE = "WELCOME TO RESTAURANT MANAGEMENT SYSTEM";
    $PAGE_TITLE= "Dashboard";
	break;
	case '/project/event.php':
    $CURRENT_PAGE = "Book Event";
    $PAGE_TITLE= "Book Event";
	break;
	case '/project/feedback.php':
    $CURRENT_PAGE = "Dashboard";
    $PAGE_TITLE= "Welcome to Restaurent Management System";
	break;
	case '/project/payment.php':
    $CURRENT_PAGE = "PAYMENT";
    $PAGE_TITLE= "Comfirm your payment here-";
	break;
	case '/project/book.php':
    $CURRENT_PAGE = "Book Your Dining Here-";
    $PAGE_TITLE= "Book Dining";
	break;
	case '/project/dAccount.php':
    $CURRENT_PAGE = "Delete Account-";
    $PAGE_TITLE= "Delete Account";
	break;


	default:
	$CURRENT_PAGE = "Home";
    $PAGE_TITLE= "HomePage";
	break; 
 }
?>