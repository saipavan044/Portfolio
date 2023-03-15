<html>
<head>
<meta charset="utf-8">
<?php
$user = "temp";
$password = "temp";
$database = "contact_form";
$table = "tbl_contact";

$fullname = $_POST["name"];
$email = $_POST["email"];
$user_message = $_POST["message"];

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $db->query("INSERT INTO tbl_contact (fullname, email, user_message) VALUES ('" . $fullname. "', '" . $email. "','" . $user_message. "')");
	$insert_id = mysql_insert_id();
  echo '<script>alert("Successfully Submitted")</script>';
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}
?>
</head>
<body>
</body>
</html>