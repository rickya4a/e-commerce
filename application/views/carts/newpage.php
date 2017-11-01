<?php 

$cost_id = $_POST['city_id']; //read the supplier id from the post

 $query = "SELECT cost FROM ongkir WHERE city_id = " . $cost_id; //build a query to retrieve the required field

 $row = fetch_row($query); //execute the query and get the results.

 $json = array('field' => $row['field1'], 'field2' => $row['field2']);

 echo json_encode($json);

 ?>