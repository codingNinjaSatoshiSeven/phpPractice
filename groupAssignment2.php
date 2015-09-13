<html>
<head>
  <title>Registration Form</title>
</head>
<body>
<?php
  $fname_value = isset($_REQUEST['fname']) 
    ? $_REQUEST['fname'] : "";
  $lname_value = isset($_REQUEST['lname']) 
    ? $_REQUEST['lname'] : "";
  $gender_value = isset($_REQUEST['gender']) 
    ? $_REQUEST['gender'] : "";
  $dob_value = isset($_REQUEST['dob']) 
    ? $_REQUEST['dob'] : "";
  $email_value = isset($_REQUEST['email']) 
    ? $_REQUEST['email'] : "";
  $username_value = isset($_REQUEST['username']) 
    ? $_REQUEST['username'] : "";
  $password_value = isset($_REQUEST['password']) 
    ? $_REQUEST['password'] : "";
  $city_value = isset($_REQUEST['city']) 
    ? $_REQUEST['city'] : "";
  $state_value = isset($_REQUEST['state']) 
    ? $_REQUEST['state'] : "";
  $zip_value = isset($_REQUEST['zip_code']) 
    ? $_REQUEST['zip_code'] : "";
  $country_value = isset($_REQUEST['country']) 
    ? $_REQUEST['country'] : "";

  if(isset($_REQUEST['submitform']) && ($_REQUEST['fname'] == ""
    || $_REQUEST['lname'] == "" || $_REQUEST['dob'] == ""
    || $_REQUEST['email'] == "" || $_REQUEST['username'] == ""
    || $_REQUEST['password'] == "")) {
    $error = "Please enter all the required field";
  }

  if(count($_REQUEST) && !isset($error)
    && isset($_REQUEST['fname'])) {
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $dob = $_REQUEST['dob'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $city = $_REQUEST['city'];
    $state = $_REQUEST['state'];
    $zip = $_REQUEST['zip_code'];
    $country = $_REQUEST['country'];

    print "<p>First Name: $fname</p>";
    print "<p>Last Name: $lname</p>";
    if(isset($_REQUEST['gender'])) {
      $gender = $_REQUEST['gender'];
      print "<p>Gender: $gender</p>";
    } else {
      print "<p>Gender: </p>";
    }
    print "<p>Date Of Birth: $dob</p>";
    print "<p>Email: $email</p>";
    print "<p>Username: $username</p>";
    print "<p>Password: $password</p>";
    print "<p>City: $city</p>";
    print "<p>State: $state</p>";
    print "<p>ZIP: $zip</p>";
    print "<p>Country: $country</p>";
  } else {
?>
<html>
  <head><title>User Registration Form</title></head>
  <body>
  <h3>User Registration Form</h3>
  <?php
    if(isset($error)) {
      print "<p style='color:red'>$error</p>";
    }
  ?>
  <form method="POST" action="groupAssignment2.php">
    <table>
      <tr>
        <td valign="top">First Name* </td>
        <td><input type="text" name="fname" 
          value = "<?php echo $fname_value; ?>"></td>
      </tr>
      <tr>
        <td valign="top">Last Name* </td>
        <td><input type="text" name="lname" 
          value = "<?php echo $lname_value; ?>"></td>
      </tr>
      <tr>
        <td valign="top">Gender </td>
        <td><input type="radio" name="gender" value="Male" 
          <?php if($gender_value == "Male") { echo "checked"; } 
            ?>> Male<br>
          <input type="radio" name="gender" value="Female"
          <?php if($gender_value == "Female") { echo "checked"; } 
            ?>> Female<br>
          <input type="radio" name="gender" value="Other"
          <?php if($gender_value == "Other") { echo "checked"; } 
            ?>> Other<br>
        </td>
      </tr>
      <tr>
        <td valign="top">DOB* </td>
        <td><input type="datetime" name="dob" 
          value = "<?php echo $dob_value; ?>"></td>
      </tr>
      <tr>
        <td valign="top">Email* </td>
        <td><input type="email" name="email" 
          value = "<?php echo $email_value; ?>"></td>
      </tr>
      <tr>
        <td valign="top">Username* </td>
        <td><input type="text" name="username" 
          value = "<?php echo $username_value; ?>"></td>
      </tr>
      <tr>
        <td valign="top">Password* </td>
        <td><input type="password" name="password" 
          value = "<?php echo $password_value; ?>"></td>
      </tr>
      <tr>
        <td valign="top">City </td>
        <td><input type="text" name="city" 
          value = "<?php echo $city_value; ?>"></td>
      </tr>
      <tr>
        <td valign="top">State </td>
        <td>
          <select name="state">
            <option value="NULL">OTHER</option>
            <option value="AL" <?php if($state_value == "AL") 
              { echo("selected"); } ?>>ALABAMA</option>
            <option value="AK" <?php if($state_value == "AK") 
              { echo("selected"); } ?>>ALASKA</option>
            <option value="AZ" <?php if($state_value == "AZ") 
              { echo("selected"); } ?>>ARIZONA</option>
            <option value="AR" <?php if($state_value == "AR") 
              { echo("selected"); } ?>>ARKANSAS</option>
            <option value="CA" <?php if($state_value == "CA") 
              { echo("selected"); } ?>>CALIFORNIA</option>
            <option value="CO" <?php if($state_value == "CO") 
              { echo("selected"); } ?>>COLORADO</option>
            <option value="CT" <?php if($state_value == "CT") 
              { echo("selected"); } ?>>CONNECTICUT</option>
            <option value="DE" <?php if($state_value == "DE") 
              { echo("selected"); } ?>>DELAWARE</option>
            <option value="FL" <?php if($state_value == "FL") 
              { echo("selected"); } ?>>FLORIDA</option>
            <option value="GA" <?php if($state_value == "GA") 
              { echo("selected"); } ?>>GEORGIA</option>
            <option value="HI" <?php if($state_value == "HI") 
              { echo("selected"); } ?>>HAWAII</option>
            <option value="ID" <?php if($state_value == "ID") 
              { echo("selected"); } ?>>IDAHO</option>
            <option value="IL" <?php if($state_value == "IL") 
              { echo("selected"); } ?>>ILLINOIS</option>
            <option value="IN" <?php if($state_value == "IN") 
              { echo("selected"); } ?>>INDIANA</option>
            <option value="IA" <?php if($state_value == "IA") 
              { echo("selected"); } ?>>IOWA</option>
            <option value="KS" <?php if($state_value == "KS") 
              { echo("selected"); } ?>>KANSAS</option>
            <option value="KY" <?php if($state_value == "KY") 
              { echo("selected"); } ?>>KENTUCKY</option>
            <option value="LA" <?php if($state_value == "LA") 
              { echo("selected"); } ?>>LOUISIANA</option>
            <option value="ME" <?php if($state_value == "ME") 
              { echo("selected"); } ?>>MAINE</option>
            <option value="MD" <?php if($state_value == "MD") 
              { echo("selected"); } ?>>MARYLAND</option>
            <option value="MA" <?php if($state_value == "MA") 
              { echo("selected"); } ?>>MASSACHUSETTS</option>
            <option value="MI" <?php if($state_value == "MI") 
              { echo("selected"); } ?>>MICHIGAN</option>
            <option value="MN" <?php if($state_value == "MN") 
              { echo("selected"); } ?>>MINNESOTA</option>
            <option value="MS" <?php if($state_value == "MS") 
              { echo("selected"); } ?>>MISSISSIPPI</option>
            <option value="MO" <?php if($state_value == "MO") 
              { echo("selected"); } ?>>MISSOURI</option>
            <option value="MT" <?php if($state_value == "MT") 
              { echo("selected"); } ?>>MONTANA</option>
            <option value="NE" <?php if($state_value == "NE") 
              { echo("selected"); } ?>>NEBRASKA</option>
            <option value="NV" <?php if($state_value == "NV") 
              { echo("selected"); } ?>>NEVADA</option>
            <option value="NH" <?php if($state_value == "NH") 
              { echo("selected"); } ?>>NEW HAMPSHIRE</option>
            <option value="NJ" <?php if($state_value == "NJ") 
              { echo("selected"); } ?>>NEW JERSEY</option>
            <option value="NM" <?php if($state_value == "NM") 
              { echo("selected"); } ?>>NEW MEXICO</option>
            <option value="NY" <?php if($state_value == "NY") 
              { echo("selected"); } ?>>NEW YORK</option>
            <option value="NC" <?php if($state_value == "NC") 
              { echo("selected"); } ?>>NORTH CAROLINA</option>
            <option value="ND" <?php if($state_value == "ND") 
              { echo("selected"); } ?>>NORTH DAKOTA</option>
            <option value="OH" <?php if($state_value == "OH") 
              { echo("selected"); } ?>>OHIO</option>
            <option value="OK" <?php if($state_value == "OK") 
              { echo("selected"); } ?>>OKLAHOMA</option>
            <option value="OR" <?php if($state_value == "OR") 
              { echo("selected"); } ?>>OREGON</option>
            <option value="PA" <?php if($state_value == "PA") 
              { echo("selected"); } ?>>PENNSYLVANIA</option>
            <option value="RI" <?php if($state_value == "RI") 
              { echo("selected"); } ?>>RHODE ISLAND</option>
            <option value="SC" <?php if($state_value == "SC") 
              { echo("selected"); } ?>>SOUTH CAROLINA</option>
            <option value="SD" <?php if($state_value == "SD") 
              { echo("selected"); } ?>>SOUTH DAKOTA</option>
            <option value="TN" <?php if($state_value == "TN") 
              { echo("selected"); } ?>>TENNESSEE</option>
            <option value="TX" <?php if($state_value == "TX") 
              { echo("selected"); } ?>>TEXAS</option>
            <option value="UT" <?php if($state_value == "UT") 
              { echo("selected"); } ?>>UTAH</option>
            <option value="VT" <?php if($state_value == "VT") 
              { echo("selected"); } ?>>VERMONT</option>
            <option value="VA" <?php if($state_value == "VA") 
              { echo("selected"); } ?>>VIRGINIA</option>
            <option value="WA" <?php if($state_value == "WA") 
              { echo("selected"); } ?>>WASHINGTON</option>
            <option value="WV" <?php if($state_value == "WV") 
              { echo("selected"); } ?>>WEST VIRGINIA</option>
            <option value="WI" <?php if($state_value == "WI") 
              { echo("selected"); } ?>>WISCONSIN</option>
            <option value="WY" <?php if($state_value == "WY") 
              { echo("selected"); } ?>>WYOMING</option>
          </select>
        </td>
      </tr>
      <tr>
        <td valign="top">Zip Code </td>
        <td><input type="text" name="zip_code" 
          value = "<?php echo $zip_value; ?>"></td>
      </tr>
      <tr>
        <td valign="top">Country </td>
        <td><input type="text" name="country" 
          value = "<?php echo $country_value; ?>"></td>
      </tr>
    </table>
    <p><input type="submit" value="Submit Form" 
      name="submitform"></p>
  </form>
  </body>
</html>
<?php
}
?>
</body>
</html>