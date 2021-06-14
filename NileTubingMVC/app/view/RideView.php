<head>
	<title>Ride</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Bungee Outline' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet'>
<?php include 'NavBoot/index.html';?>
	
</head>

<?php 

include 'CSS/RideCSS.php';
   
class rideView
{
	
    public function output($model,$revmodal)
    {
        $rideinfo = $model->RideInfos($model->rideID);
		$reviews = $revmodal->Reviews($model->rideID);
		$list="";
		foreach ($rideinfo as $row) {
			
			$list.='<option value="'.$row->rideDate.'/'.$row->rideTime.'">'.$row->rideDate.'/'.$row->rideTime.' Capacity '.$row->currentCapacity.'</option>
		';}
		$review="<ul>";
		foreach ($reviews as $rev) {
			$review.='<li>Reviewer Name: '.$rev->Name.'</li><li>Review: '.$rev->Review.'</li>';
		}
		$review.='</ul>';

        $str='<div class="container">
		<div class="row">
		  <div class="col-md" id="rec1">
	
		  
		<p id="price">'.$model->Price.'</p>
		<p id="per">per person</p>
	
		<p id="date"> Ride Date/Time - Remaining capacity</p>
		<form action="checkout.php?id='.$model->rideID.'" method="post">
		<div class="date">
		<select id="rideinfo" name="rideDate">
			'.$list.'</select>
		</div>
	
		<p class="persons">Persons</p>
	
		<div class="quantity">
	
			<input type="number"  class="form-control" id="quantity" value="1" name="quantity" min="1"  required>
	
	
		</div>
	
		<p id="cap">'.$model->currentCapacity.'</p>
	
		<div class="sub">
		<button class="submit-btn" name="book">Ride now</button>
			</div>
	</form>
			
		
	
		</div>
	
	
	  <div class="col-md">
		  <h1>'.$model->Name.'</h1>
		  <p id="des">'.$model->Description.'</p>
		  
	  </div>
	  
	
	
	</div>
	<div class="row-md" id="rec2">
		<h1 id="rev">Reviews</h1>
		<form action="Ride.php?id='.$model->rideID.'" method="POST">
		<div class="wrev">
			<input type="text" id="name" name="name" placeholder="Write your name"><br>
			<input type="text" id="rev-box" name="rev-box" placeholder="Write your review"><br>
		</div>
	
		<div>
			<button class="submit-btn" name="rev-sub" id="rev-sub">Submit</button>
		</div></form>
		<div class="review">'.$review.'
		 </div>
		 </div>
	
	</div>';
        
        
        return $str;
    }
    
  
    
}
?>

