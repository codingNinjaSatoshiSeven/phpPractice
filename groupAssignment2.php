<html>
<head>
  <title>Registration Form</title>
</head>
<body>
<?php
if (count($_REQUEST) && isset ($_REQUEST['fname']) && $_REQUEST['fname'] !== '') {
    $fname = $_REQUEST['fname'];
    $state = $_REQUEST['state'];
    

    print "<p>First Name: $fname</p>";
    print "<p>State: $state</p>";

} else {
?>
<html>
 <head><title>User Registration Form</title></head>
 <body>
 <form method="GET" action="groupAssginment2.php">
 <div>
   <p>First Name <input type="text" name="fname"></p>
   <p>Last Name <input type="text" name="lname"></p>
   <p>Gender
     <input type="radio" name="gender" value="male"> Male<br>
     <input type="radio" name="gender" value="female"> Female<br>
     <input type="radio" name="gender" value="other"> Other<br>
   </p>

   <p>DOB<input type="datetime" name="dob"></p>
   <p>Email<input type="email" name="email"></p>
 </div>
 <div>
   <p>City <input type="text" name="city"></p>
   <p>State
      <select name="state">
        <option value="CA">CA</option>
        <option value="IL">IL</option>
        <option value="MA">MA</option>
        <option value="NY">NY</option>
        <option value="TX">TX</option>
      </select>
   <p>Zip Code <input type="text" name="zip_code"></p>
   <p>Country <input type="text" name="country"></p>
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