<html>
    <body>
        <form action="d3getpostregform.php" method="post">
<div>
<h1> Registration form</h1>
<p>Please fill in the details to create an account.</p>
<hr>
<label for="name"><b>First Name</b></label>
<input type="text" placeholder="Enter First Name" name="name">

<br><br><label for="name"><b>Last Name</b></label>
<input type="text" placeholder="Enter Last Name" name="name">

<br><br><label for="gender"><b>Gender</b></label>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female 
<input type="radio" name="gender" value="Other"> Other

<br><br><label for="city"><b>City</b></label>
<select name="city">
<option value ="none">Select city</option>
<option value ="vadodara">Vadodara</option>
<option value ="ahmedabad">Ahmedabad</option>
<option value ="surat">Surat</option>
</select> 



<br><br><label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email">

<br><br><label for="pwd"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="pwd">

<br><br><label for="confirm"><b>Confirm Password</b></label>
<input type="password" placeholder="Confirm Password" name="confirm">
<hr>
<button type="submit" class="registerbtn"><strong>Submit</strong></button>
</div>

</form>
    </body>
</html>

