<!DOCTYPE html>
<html>
<head>
	<title>Hire || Reseller Home</title>
	<link rel="stylesheet" type="text/css" href="css/order.css">
	<link rel="stylesheet" href="css/helper.css">
	<script src="js/countryy.js"></script>
</head>

<body>
<header id="Fixuture" class = "mainHead">
	<a href="index.html" class="hlogo"></a>
</header>
<div class="alert alert-dismissible alert-info foreb">
  <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>,Kindly fill properly to get your Development Ideas to our Development department.
</div>
<section id="Forms">
	<form  method="post" action="deve.php">
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
			<label for="Development">Development Category</label>
			<select name="development" id="" class="form-control">
				<option value="Website">Website</option>
				<option value="Web Application">Web Application</option>
				<option value="Content Management System">Content Management System</option>
				<option value="Landing Page Design">Landing Page Design</option>
			</select>
		</div>
		<div class="form-group">
			<label for="Development">Programming Language</label>
			<select name="plangauge" id="" class="form-control">
				<option value="HTML5">HTML5 + CSS3</option>
				<option value="RubyOnRails">Ruby On Rails with Ruby Gems</option>
				<option value="Javascript">Javascript</option>
				<option value="MEAN">Mean Stack</option>
				<option value="PHP">PHP</option>
			</select>
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