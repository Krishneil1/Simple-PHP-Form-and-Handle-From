<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml"xml:lang="en"lang="en">
    <head>
      <meta http-equiv="content-type" content="text/html";
            charset="utf-8"/>
            <title>HTML Contact Form</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
		<div class="container">
		  <!---Script 2.1 - form.html -->
		  <form action="handle_form.php" method="post" class="form-horizontal">
			<h2><center>Get in Touch:</center></h2>
			<h2><center>Enter your information in the form below:</center></h2>
			<div class="form-group">
			  <label class="control-label col-sm-2"> Name: </label> 
				<div class="col-sm-8">
					<input class="form-control" type="text" name="name" size="20" maxlength="40" placeholder="Enter Name"/>
				</div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2"> Email: </label> 
				<div class="col-sm-8">
					<input class="form-control" <input type="text" name="email" size="40" maxlength="60"/placeholder="Enter Email"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"> Gender: </label> 
					<div class="radio col-sm-8">
					  <label><input type ="radio" name="gender" value = "M"/>Male</label>
					  <label><input type ="radio" name="gender" value = "F"/>Female</label>
					</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"> Age: </label> 
				<div class="col-sm-8">
					<select class="form-control"id="age" name= "age">
					  <option value = "0-29">Under 30 </option>
					  <option value = "30-60">Between 30-60 </option>
					  <option value = "60+"> Over 60 </option>
					</select>
				</div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="comment">Comment:</label>
			  <div class="col-sm-8">
				<textarea class="form-control" rows="5" id="comments" name="comments" cols="40"></textarea>
				</div>
			</div>
			  <p align = "center"><input type="submit" name="submit" value="Submit My Information" class="btn btn-success"/> </p>
			</form>
		</div>
    </body>
  </html>
