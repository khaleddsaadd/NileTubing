<head>
	<title>Reservations</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Outline' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet'>

	
</head>

<?php
require_once(__ROOT__ . "view/View.php");
include 'CSS/AdminReservationsCSS.php';


class resView extends View
{
   
    public function output()
    {
        $allusers =$this->model->All();
        echo '<center>
        <div class="all">
        <div id="resDiv"> 
            <h1>Reservations List</h1>
            <form method="POST">
                <input type="submit" value="Download Reservations List" id="printBtn" name="pr">
            </form>
            <div id="resData">';
        echo '<table class="table table-dark">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Ride_ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Gender</th>
              <th scope="col">Payment Method</th>
              <th scope="col">Date and Time</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total Price</th>
              
            </tr>
          </thead>';
        foreach($allusers as $user)
        {
            echo '<tr>
              <th>'.$user->id.'</th>
              <th>'.$user->rideId.'</th>
              <td>'.$user->Username.'</td>
              <td>'.$user->mail.'</td>
              <td>'.$user->gender.'</td>
              <td>'.$user->payment.'</td>
              <td>'.$user->date.'</td>
              <td>'.$user->quantity.'</td>
              <td>'.$user->price.' EGP</td>

              

            </tr>
            </div>';
        }
        
   

    }
}
?>