       <?php

  $mysql_host = "167.71.130.66";
  	$mysql_username = "phxrqesjrn";
  	$mysql_password = "6EwTRv2Wzg";
  	$mysql_database = "phxrqesjrn";

    $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
//chained PHP functions
$user_name = $mysqli->query("SELECT user_name FROM users_data WHERE id = 1")->fetch_object()->user_name;
$user_comments = $mysqli->query("SELECT user_comments FROM users_data WHERE id = 1")->fetch_object()->user_name;
echo "Hello this from " . $user_name . "!, this is a form made by";
echo "This is your comment " . $user_comments. "!";

//MySqli Select Query
$results = $mysqli->query("SELECT id, user_name, user_email, user_comments FROM users_data");

print '<table border="1">';
while($row = $results->fetch_object()) {
	print '<tr>';
    print '<td>'.$row->id.'</td>';
	print '<td>'.$row->user_name.'</td>';
	print '<td>'.$row->user_email.'</td>';
	print '<td>'.$row->user_comments.'</td>';

	print '</tr>';
}

print '</table>';
$mysqli->close();
?>