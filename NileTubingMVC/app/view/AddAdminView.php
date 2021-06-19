<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	
</head>

<?php 
require_once(__ROOT__ . "view/View.php");
include 'CSS/AddAdminCSS.php';


class AddAdminView extends View
{
    public function output()
    {
        $str="";

        $str.="<div class='container h-100'><div class='d-flex justify-content-center h-100'>
        <div class='user_card'>

        <div class='d-flex justify-content-center'>
        <div class='brand_logo_container'>
            <img src='".__ROOT__."/view/Images/NTLogo.png' class='brand_logo' alt='Logo'>
        </div>
        </div>

         <div class='d-flex justify-content-center form_container'>

         <form id='frame' method='POST' Action='AddAdmin.php'> 
         <div> <h1> Add Admin </h1> </div>
            <div class='input-group mb-3'>

                <div class='input-group-append'>  <!-- ba append el icon m3 el text field-->
                    <span class='input-group-text'><i class='fas fa-user'></i></span>
                </div>
                <input type='text' name='username' id='username' class='form-control input_user' value='' placeholder='username' required='' >
            </div>


            <div class='input-group mb-2'>
                <div class='input-group-append'>
                    <span class='input-group-text'><i class='fas fa-key'></i></span>
                </div>
                <input type='password' name='password' id='password' class='form-control input_pass' value='' placeholder='password' required=''>
            </div>
             <br>

          
            <div class='d-flex justify-content-center mt-3 login_container'>
           
            <input type='submit' id = 'button' name='button' class='btn login_btn' value='Add Admin'> 
            
            </div>
          </form>
        </div>


        </div>
        </div>
        </div>

            ";

            return $str;
    }
}