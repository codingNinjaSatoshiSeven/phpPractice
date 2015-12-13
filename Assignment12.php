
<?php
class Address
{
	private $street_address;
	private $secondary_address;
	private $city;
	private $state;
	private $zip;

	public function __construct(){
	}

	public function getStreetAddress(){
		return $this->street_address;
	}

	public function setStreetAddress($street_address){
		if (!$this->validateAddress($street_address)){
			// invalid
			return false;
		} else {
			$this->street_address = $street_address;
			return $this->street_address;
		}
	}

	public function getSecondaryAddress(){
		return $this->secondary_address;
	}

	public function setSecondaryAddress($secondary_address){
	
		$this->$secondary_address = $secondary_address;
		return $this->secondary_address;

	}

	public function getCity(){
		return $this->city;
	}

	public function setCity($city){
		if (!$this->validateAddress($city)){
			// invalid
			return false;
		} else {
			$this->city = $city;
			return $this->city;
		}
	}

	public function getState(){
		return $this->state;
	}

	public function setState($state){
		if (!$this->validateAddress($state)){
			// invalid
			return false;
		} else {
			$this->state = $state;
			return $this->state;
		}
	}


	public function getZip(){
		return $this->zip;
	}

	public function setZip($zip){
		if (!$zip){
			// empty zip
			return false;
		} else {
			if ($this->validateZip($zip)){
				$this->zip = $zip;
				return $this->zip;
			} else {
				return false;
			}
		}
	}

	public function validateAllParameters(){
		if ($this->validateAddress($this->street_address)
			&& $this->validateAddress($this->city)
			&& $this->validateAddress($this->state)
			&& $this->validateZip($this->zip)
			) {
			return true;
		} else {
			return false;
		}
	}

	private function validateAddress($var){
		if (!is_string($var) || strlen($var)<1){
			// invalid
			return false;
		} else {
			return true;
		}
	}

	private function validateZip($zip){
		// right now set for US zip only
		preg_match('/\D/',$zip, $matches);
		if (count($matches)>0){
			return false;
		} else {
			return true;
		}
	}
}

class Client {
	private $lname;
	private $fname;
	public $address;
	private $mysqli;

	public function __construct(){
		$this->mysqli =  mysqli_connect('127.0.0.1','sli325','jan1088.sl','test_sli325');
	}

	public function setFirstName($var){
		$this->fname = $var;
	}

	public function setLastName($var){
		$this->lname = $var;
	}

	public function setAddress($var){
		$this->address = $var;
	}

	public function setClient(){
		//MySqli Insert Query
		if ($this->mysqli->connect_error) {
		    die('Error : ('. $this->mysqli->connect_errno .') '. $this->mysqli->connect_error);
		} else {
			//MySqli Insert Query
			$street_address= $this->address->getStreetAddress();
			$secondary_address = $this->address->getSecondaryAddress();
			$city = $this->address->getCity();
			$state = $this->address->getState();
			$zip = $this->address->getZip();
			$insert_row = $this->mysqli->query("INSERT INTO test_sli325.client_sli325 
				(name_last, name_first, street_address, secondary_address, city, state, zip) 
				VALUES('".$this->lname."', '".$this->fname."', '".$street_address
					."', '".$secondary_address."', '".$city."', '".$state."', '".$zip."')
				");

			if($insert_row){
			    print 'Success! Client is successfully created in the database <br />'; 
			    print 'Here are the clients in our database <br />'; 
			    $this->printAllClient();
			}else{
			    die('Error : ('. $this->mysqli->errno .') '. $this->mysqli->error);
			    print 'There is an error creating the Client in the database';
			}
			print "<a style='color:blue;' href='./Assignment12.php'>Click to submit another client</a>";
		}
	}

	public function printAllClient(){
		if ($this->mysqli->connect_error) {
		    die('Error : ('. $this->mysqli->connect_errno .') '. $this->mysqli->connect_error);
		} else {
			$query_rows = $this->mysqli->query("SELECT * From test_sli325.client_sli325 ");

			if($query_rows){
				echo "<table>";
				echo "<tr>";
				echo "<th>First Name</th>";
				echo "<th>Last Name</th>";
				echo "<th>Street Address</th>";
				echo "<th>Secondary Address</th>";
				echo "<th>City</th>";
				echo "<th>State</th>";
				echo "<th>Zip</th>";
				echo "</tr>";

			    while($row = mysqli_fetch_array($query_rows)){
			    echo "<tr>";
			    echo "<td>" . $row['name_first'] . "</td>";
			    echo "<td>" . $row['name_last'] . "</td>";
			    echo "<td>" . $row['street_address'] . "</td>";
			    echo "<td>" . $row['secondary_address'] . "</td>";
			    echo "<td>" . $row['city'] . "</td>";
			    echo "<td>" . $row['state'] . "</td>";
			    echo "<td>" . $row['zip'] . "</td>";
				}	
				echo "</tr>";
				echo "</table>";

			}else{
			    die('Error : ('. $this->mysqli->errno .') '. $this->mysqli->error);
			    print 'There is an error printing out all the clients';
			}
		}
	}
}

	function print_form(){

		$fname= isset($_POST['submitform']) ?  $_POST["fname"] :'';
		$lname= isset($_POST['submitform']) ? $_POST["lname"] :'';
		$street_address = isset($_POST['submitform']) ? $_POST["street_address"] :'';
		$secondary_address = isset($_POST['submitform']) ? $_POST["secondary_address"] :'';
		$city = isset($_POST['submitform']) ? $_POST["city"] : '';
		$state= isset($_POST['submitform']) ? $_POST["state"] : '';
		$zip = isset($_POST['submitform']) ? $_POST["zip"] : '';
print <<<FORM
  <form method="POST" action="Assignment12.php">
    <table width="100%">
      <tr>
        <td valign="top" width="20%">First Name*</td>
        <td><input type="text" name="fname" value="$fname"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">Last Name*</td>
        <td><input type="text" name="lname" value="$lname"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">Street Address*</td>
        <td><input type="text" name="street_address" value="$street_address"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">Secondary Address</td>
        <td><input type="text" name="secondary_address" value="$secondary_address"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">City*</td>
        <td><input type="text" name="city" value="$city"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">State</td>
        <td><input type="text" name="state" value="$state"></td>
      </tr>
      <tr>
        <td valign="top" width="20%">Zip Code</td>
        <td><input type="number" name="zip" value="$zip"></td>
      </tr>
    </table>
    <p>* Are required fields</p>
    <p><input type="submit" value="Submit Form" name="submitform"></p>
   </form>
FORM;
}
	// main body
	$my_address= new Address();
	
	if(isset($_POST['submitform']) 
		&& isset($_POST['fname']) &&!empty($_POST['fname'])
		&& isset($_POST['lname']) &&!empty($_POST['lname'])
		&& isset($_POST['street_address']) &&!empty($_POST['street_address'])
		&& isset($_POST['city']) &&!empty($_POST['city'])
		&& isset($_POST['state']) &&!empty($_POST['state'])
		&& isset($_POST['zip']) &&!empty($_POST['zip'])
	) { // if all the required fields are set
		$my_address->setStreetAddress($_POST['street_address']);
		$my_address->setSecondaryAddress($_POST['secondary_address']);
		$my_address->setCity($_POST['city']);
		$my_address->setState($_POST['state']);
		$my_address->setZip($_POST['zip']);
		$my_last_name = $_POST['lname'];
		$my_first_name = $_POST['fname'];
		if ($my_address->validateAllParameters()){
			$my_connection = new Client();
			$my_connection->setFirstName($my_first_name);
			$my_connection->setLastName($my_last_name);
			$my_connection->setAddress($my_address);
			$my_connection->setClient();
		} else {
			echo '<p style="color:red;">Some fields has invalid format</p>';
			print_form();
		}
	} else {
		// at least one require field is missing
		echo '<p style="color:red;">At least one required field is missing</p>';
		print_form();
	}
?>