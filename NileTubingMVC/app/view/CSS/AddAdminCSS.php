<?php 
require_once(__ROOT__ . "model/AddAdminModel.php");
require_once(__ROOT__ . "controller/AddAdminController.php");
require_once(__ROOT__ . "view/AddAdminView.php");

?>
<style>
body,
html {
    margin: 0;
    padding: 0;
    height: 100%;
    background:#1A3E92;
}
h1{
    font-size: 40px;
    padding-left: 5%;
    padding-bottom: 10%;
}
.user_card {
    height: 500px;
    width: 750px;
    margin-top: auto;
    margin-bottom: auto;
    background:  #fff;
    position: relative;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;

}
.brand_logo_container {
    position: absolute;
    height: 170px;
    width: 170px;
    top: -75px;
    border-radius: 50%;
    background: #F1D158;
    padding: 10px;
    text-align: center;
}
.brand_logo {
    height: 150px;
    width: 150px;
    border-radius: 50%;
    border: 2px solid white;
}
.form_container {
    margin-top: 100px;
}
.login_btn {
    width: 100%;
    background: #1F3351 ;
    color: white ;
}
.login_btn:focus {
    box-shadow: none ;
    outline: 0px ;
}
.login_container {
    padding: 0 2rem;
}
.input-group-text {
    background: #1F3351 ;
    color: white ;
    border: 0 ;
    border-radius: 0.25rem 0 0 0.25rem ;
}
.input_user,
.input_pass:focus {
    box-shadow: none ;
    outline: 0px ;
}
.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: #c0392b ;
}

.msg
{

margin-top:-14.5%;
margin-left:40%;
width: 20%;
height:5%;
}
</style>
