<html>  
    <head>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="admin_Login.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Outline' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet'>

 

    </head>
    <body>
        <center>

            <img src="NTLogo.png">
            <h1>Admin Login</h1>
        
        </center>

        <center>
            <div class="frame">    
        <form id="frame" method="POST" Action="">   
            <br><br><br><br><br>
           
            <label><b>Username
            </b>
            <br>
            </label>    
            <input type="text"  id="username" placeholder="Username" name="username" required="">    
            <br><br>
            <label><b>Password     
            </b> 
            <br>  
            </label>    
            <input type="Password" id="password" placeholder="Password" name="password" required="">    
            <br><br><br><br>  

            <input type="submit" name="loginbutton" id="loginbutton" value="Log in">       
            <br><br>        

        </form>
            </div> 


        </center>


        <?php      
                $host = "localhost";  
                $user = "root";  
                $password = '';  
                $db_name = "niletubing";  
                
                $conn = new mysqli('localhost' , 'root' , '' , 'niletubing');
                if(!$conn)
                {
                    die("Connection failed".mysqli_connect_error());
                }

                  if(isset($_POST['loginbutton']))
    
                  {
                      $userN = $_POST['username']; 
                      $pass = $_POST['password'];
                      $sql= "SELECT * FROM adminaccounts WHERE username = '$userN' AND password = '$pass' ";
                      $result = mysqli_query($conn,$sql);

                      $i=0;
                      $userN = array();
                      $pass = array();

                      if ($result->num_rows > 0)
                      {
                        while($row = $result->fetch_assoc()) 
                        {
                            $userN[$i] = $row["username"];
                            $pass[$i] = $row["password"];

                          header('Location: AdminRidesH.php');
                      }
                    }
                      else
                      {
                        echo "<script>  alert('Invalid Username or Password !'); </script>";
                        
                      }
                  }
    
        ?>
    

</body>
</html>
