<!DOCTYPE html>

<html> 

 <head> 

 <title>Group Assignment #3</title>



 <style type="text/css">

  input {

    display:block;

  }

  label {

    display:block;

  }

 </style>



</head> 

<body> 









<?php

  

  $radioArray = array('yes', 'no');

  $checkboxArray = array('Always', 'Sometimes', 'Maybe', 'Once', 'Never', 'Do Not Check This Box');

  $selectArray = array(

      'CA' => 'California',

      'VA' => 'Virginia',

      'CO' => 'Colorado',

      'NY' => 'New Yawk',

      'DC' => 'Washington DC'

    );



if(isset($_POST['submit']) && isset($_POST['radio1'])) {


  $radio1= $_POST['radio1'];
  echo('<p>$radio1</p>');


  // Enter the Code you want to execute after the form has been submitted

    // Dispaly Success or failure Message if any 







  

}

else               

{

    // Display the Form and the Submit Button

    echo('<form method="POST" action="groupAssignment3.php">');

    echo('<label>Do you like Snacks?</label>');

      foreach($radioArray as $v) {

        echo('<input type="radio" name="radio1" value="'. $v . '">' . $v . '</input>');

      }

    echo("<label>Do you like PHP?</label");

      foreach($radioArray as $v) {

        echo('<input type="radio" name="radio1" value="'. $v . '">' . $v . '</input>');

      }

    echo("<input type=\"submit\" name=\"submit\" value=\"Submit It\">");

    echo("</form>");

}



?>