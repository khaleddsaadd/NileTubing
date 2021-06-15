<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="Contactus.css">
    
</head>


<body>
    
<div class="container">
<div class="row">

        <div class="row-md">
            <div class="indexBG">
                <?php include 'userNavBar.html';?>
                <h1 id="CU" class="CU">Contact Us </h1>
	        </div>
        
        </div>  

        <div class="row-md" id="box"> 
            <form>   
                <br><br><br><br><br>
               
                <label><b>Name
                </b>
                <br>
                </label>    
                <input type="text"  id="text1"  name="name" required="">    

                <br><br><br><br><br><br><br><br><br><br>

                <label><b>Email
                </b>
                <br>
                </label>
                <input type="text"  id="text2"  name="name" required="">    
                <br><br><br><br><br><br><br><br><br><br>

                <label><b>Gender
                </b>
                <br>
                </label>
                <select id="gender">
                    <option> Male</option>
                    <option> Female</option>
                </select> 
                <br><br><br><br><br><br><br><br><br><br>   

                <label><b>Age
                </b>
                <br>
                </label>
                <input type="text"  id="text3"  name="name" required=""> 
                <br><br><br><br><br><br><br><br><br><br>

                <label><b>Write your message here
                </b>
                <br>
                </label>
                <input type="text"  id="text4"  name="name" > 
                <br><br><br><br><br><br><br><br>

                <input type="submit" name="send" id="send" value="Send">    

            </form>
        </div>
</div> 

</div>




</body>
</html>