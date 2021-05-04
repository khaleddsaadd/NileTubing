
<html>
<head>
	<title>Ride</title>
	<link rel="stylesheet" href="Ride.css">
</head>


<body>
<div class="container">
	<div class="row">
      <div class="col-md" id="rec1">

	<p id="price">100 EGP</p>
	<p id="per">per person</p>
	<p id="date">Date</p>

	<div class="date">
		<input class="form-control" name="date" type="date" id="currentDate" required>
	</div>

	<p class="persons">Persons</p>

	<div class="quantity">

		<input type="number"  class="form-control" id="quantity" value="1" name="quantity" min="1"  required>

	</div>

	<p id="cap"> 4 Left </p>

	<div class="sub">
	<button class="submit-btn" name="book">Ride now</button>
		</div>

	</div>


  <div class="col-md">
  	<h1>Ride Name</h1>
  	<p id="des"> Loren Ipsum</p>
  	<div class="avg-rating">
  		<p id="avg"> Average Rating</p>
  		<!-- <input  type="text" class="rating" data-size="xl" data-readonly="true"> -->
  	</div>
  	
  </div>
  


</div>
<div class="row-md" id="rec2">
	<h1 id="rev">Reviews</h1>
	<div class="wrev">
		<input type="text" id="name" name="name" placeholder="Write your name"><br>
		<input type="text" id="rev-box" name="rev-box" placeholder="Write your review"><br>
	</div>

	<div>
		<button class="submit-btn" name="rev-sub" id="rev-sub">Submit</button>
	</div>
     </div>

</div>


      


</body>

</html>