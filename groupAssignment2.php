<html>
<head>
  <title>Registration Form</title>
</head>
<body>
<?php
  if(isset($_POST['submitform']) && ($_POST['fname'] == ''
    || $_POST['lname'] == '' || $_POST['dob'] == ''
    || $_POST['email'] == '' || $_POST['username'] == ''
    || $_POST['password'] == '')){
    $error = "Please enter all the required field";
  }

  if(count($_REQUEST) && !isset($error)){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip_code'];
    $country = $_POST['country'];

    print "<p>First Name: $fname</p>";
    print "<p>Last Name: $lname</p>";
    if(isset($_POST['gender']))
    {
      $gender = $_POST['gender'];
      print "<p>Gender: $gender</p>";
    }
    else
    {
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
  if(isset($error))
  {
    print "<p style='color:red'>$error</p>";
  }
?>
  <form method="POST" action="groupAssignment2.php">
    <table width="100%">
      <tr>
        <td valign="top" width="20%">First Name*</td>
        <td><input type="text" name="fname"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">Last Name*</td>
        <td><input type="text" name="lname"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">Gender</td>
        <td><input type="radio" name="gender" value="Male"> Male<br>
          <input type="radio" name="gender" value="Female"> Female<br>
          <input type="radio" name="gender" value="Other"> Other<br>
        </td>
      </tr>
      <tr>
        <td valign="top" width="20%">DOB*</td>
        <td><input type="datetime" name="dob"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">Email*</td>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">Username*</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">Password*</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">City</td>
        <td><input type="text" name="city"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">State</td>
        <td>
          <select name="state">
            <option value="AL">ALABAMA</option>
            <option value="AK">ALASKA</option>
            <option value="AZ">ARIZONA</option>
            <option value="AR">ARKANSAS</option>
            <option value="CA">CALIFORNIA</option>
            <option value="CO">COLORADO</option>
            <option value="CT">CONNECTICUT</option>
            <option value="DE">DELAWARE</option>
            <option value="FL">FLORIDA</option>
            <option value="GA">GEORGIA</option>
            <option value="HI">HAWAII</option>
            <option value="ID">IDAHO</option>
            <option value="IL">ILLINOIS</option>
            <option value="IN">INDIANA</option>
            <option value="IA">IOWA</option>
            <option value="KS">KANSAS</option>
            <option value="KY">KENTUCKY</option>
            <option value="LA">LOUISIANA</option>
            <option value="ME">MAINE</option>
            <option value="MD">MARYLAND</option>
            <option value="MA">MASSACHUSETTS</option>
            <option value="MI">MICHIGAN</option>
            <option value="MN">MINNESOTA</option>
            <option value="MS">MISSISSIPPI</option>
            <option value="MO">MISSOURI</option>
            <option value="MT">MONTANA</option>
            <option value="NE">NEBRASKA</option>
            <option value="NV">NEVADA</option>
            <option value="NH">NEW HAMPSHIRE</option>
            <option value="NJ">NEW JERSEY</option>
            <option value="NM">NEW MEXICO</option>
            <option value="NY">NEW YORK</option>
            <option value="NC">NORTH CAROLINA</option>
            <option value="ND">NORTH DAKOTA</option>
            <option value="OH">OHIO</option>
            <option value="OK">OKLAHOMA</option>
            <option value="OR">OREGON</option>
            <option value="PA">PENNSYLVANIA</option>
            <option value="RI">RHODE ISLAND</option>
            <option value="SC">SOUTH CAROLINA</option>
            <option value="SD">SOUTH DAKOTA</option>
            <option value="TN">TENNESSEE</option>
            <option value="TX">TEXAS</option>
            <option value="UT">UTAH</option>
            <option value="VT">VERMONT</option>
            <option value="VA">VIRGINIA</option>
            <option value="WA">WASHINGTON</option>
            <option value="WV">WEST VIRGINIA</option>
            <option value="WI">WISCONSIN</option>
            <option value="WY">WYOMING</option>
          </select>
        </td>
      </tr>
      <tr>
        <td valign="top" width="20%">Zip Code</td>
        <td><input type="text" name="zip_code"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">Country</td>
        <td><input type="text" name="country"></td>
      </tr>
    </table>
    <p><input type="submit" value="Submit Form" name="submitform"></p>
  </form>
  </body>
</html>
<?php
}
?>
</body>
</html>
