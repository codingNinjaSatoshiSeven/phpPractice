<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
</head>
<body>
<?php
if (count($_REQUEST) && isset($_REQUEST['fname']) && $_REQUEST['fname'] !== '') {
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];
    $email = $_REQUEST['email'];
    $city = $_REQUEST['city'];
    $state = $_REQUEST['state'];
    $zip = $_REQUEST['zip_code'];
    $country = $_REQUEST['country'];
    
//this print statement is running before data is inputted
    print "<p>Welcome aboard, $fname $lname</p>";
    print "<p>Gender: $gender</p>";
    print "<p>Date of Birth: $dob</p>";
    print "<p>Email: $email</p>";
    print "<p>City: $city</p>";
    print "<p>State: $state</p>";
    print "<p>Zip: $zip</p>";
    print "<p>Country: $country</p>";

} else {
//what code are we adding here?

?>
 <p style='color:red'>Please enter all the required field</p>
 <form method="GET" action="group.php">
 <div>
   <p>First Name <input type="text" name="fname" value="<?php echo $_REQUEST['fname']; ?>"></p>
   <p>Last Name <input type="text" name="lname" value="<?php echo $_REQUEST['lname']; ?>"></p>
   <p>Gender
     <input type="radio" name="gender" <?php if (isset($gender) && $gender = "male") echo "checked"; ?> value="male"> Male<br>
     <input type="radio" name="gender" <?php if (isset($gender) && $gender = "female") echo "checked"; ?> value="female"> Female<br>
     <input type="radio" name="gender" <?php if (isset($gender) && $gender = "other") echo "checked"; ?> value="other"> Other<br>
   </p>

   <p>DOB<input type="datetime" name="dob" value="<?php echo $_REQUEST['dob']; ?>"></p>
   <p>Email<input type="email" name="email" value="<?php echo $_REQUEST['email']; ?>"></p>
 </div>
 <div>
   <p>City <input type="text" name="city" value="<?php echo $_REQUEST['city']; ?>"></p>
   <p>State
      <select name="state" value="<?php echo $_REQUEST['state']; ?>">
        <option value="CA">CA</option>
        <option value="IL">IL</option>
        <option value="MA">MA</option>
        <option value="NY">NY</option>
        <option value="TX">TX</option>
      </select>
   <p>Zip Code <input type="text" name="zip_code" value="<?php echo $_REQUEST['zip_code']; ?>"></p>
   <p>Country <input type="text" name="country" value="<?php echo $_REQUEST['country']; ?>"></p>
 </div>


 <p><input type="submit" value="Submit Form"></p>
 </form>
 </body>
</html>
<?php
}
?>
</body>
</html>

