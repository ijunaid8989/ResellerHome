<!DOCTYPE html>
<html>
<head>
	<title>Order || Reseller Home</title>
	<link rel="stylesheet" type="text/css" href="css/order.css">
	<link rel="stylesheet" href="css/helper.css">
	<script src="js/countryy.js"></script>
</head>

<body>
<header id="Fixuture" class = "mainHead">
	<a href="index.html" class="hlogo"></a>
</header>
<div class="alert alert-dismissible alert-info foreb">
  
  <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>,Kindly fill properly to get your order to our SALES department.
</div>
<section id="Forms">
	<form  method="post" action="package.php">
		<div class="form-group">
			<label for="FirstName">First Name:</label>
			<input type="text" class="form-control" name="fname" placeholder="First Name" required>
		</div>
		<div class="form-group">
			<label for="Last Name">Last Name:</label>
			<input type="text" class="form-control" name="lname" placeholder="Last Name" required>
		</div>
		<div class="form-group">
			<label for="Email">Email:</label>
			<input type="email" class="form-control" name="email" placeholder ="Email" required>
		</div>
		<div class="form-group">
			<label for="Phone">Phone:</label>
			<input type="phone" class="form-control" name="phone" placeholder ="phone" required>
		</div>
		<div class="form-group">
			<label for="Mobile">Mobile:</label>
			<input type="phone" class="form-control" name="mobile" placeholder ="Mobile" required>
		</div>
		<div class="form-group">
			<label for="Address">Address:</label>
			<textarea name="address" id="" cols="30" rows="10" class="form-control" required></textarea>
		</div>
		<div class="form-group">
			<label for="Country">Country:</label>
			<select name="country" id="country" class="form-control" required></select>
		</div>
		<div class="form-group">
			<label for="State">State:</label>
			<select name ="state" id ="state" class="form-control" required></select>
			<script language="javascript">
				populateCountries("country", "state");
 			</script>
		</div>
		<div class="form-group">
			<label for="City">City:</label>
			<input type="text" name="city" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="ZipCode">Zip Code:</label>
			<input type="number" name="zip" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="Package">Select Package:</label>
			<select name="package" id="" class="form-control" required>
				<option value="Basic $5.95 - Month">Basic $5.95 - Month</option>
				<option value="Business $9.95 - Month">Business $9.95 - Month</option>
				<option value="Economy $7.95 - Month">Economy $7.95 - Month</option>
				<option value="Basic $59.95 - Year">Basic $59.95 - Year</option>
				<option value="Business $89.95 - Year">Business $89.95 - Year</option>
				<option value="Economy $79.95 - Year">Economy $79.95 - Year</option>
			</select>
		</div>
		<div class="form-group">
			<label for="Payment Method">Payment Method:</label>
			<select name="pmethod" id="" class="form-control" required>
				<option value="Bank Transfer">Bank Transfer</option>
				<option value="Easypaisa">Easypaisa</option>
			</select>
		</div>
		<div class="row">
			<div class="form-group col-sm-5 col-md-6">
				<label for="Domain">Enter Your Domain Name</label>
				<input type="text" name="domain" value="" placeholder="Enter Domain Name" class="form-control" required>
			</div>
			<div class="form-group col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
				<label for="Domain Option">Domain Option</label>
				<select name="doption" id="" class="form-control" required>
					<option value="Want to Register new domain">Want to Register new domain</option>
					<option value="Want to transfer existing domain">Want to transfer existing domain</option>
					<option value="Want to update name servers">Want to update name servers</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="Notes">Notes</label>
			<textarea name="notes" id="" cols="30" rows="10" class="form-control" required></textarea>
		</div>
		<input type="submit" class="btn btn-primary" name="submit" value="Submit">
	</form>
</section>
</body>
</html>