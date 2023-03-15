<?php
$user = "temp";
$password = "temp";
$database = "contact_form";
$table = "tbl_contact";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>Contact Details of DM Users</h2><ol>"; 
  foreach($db->query("SELECT * FROM $table order by tbl_contact_id DESC") as $row) {
    echo "<li>" . "<b><p>Name:</b>" .  $row['fullname'] . "</li> </p>";
    echo "<b><p>Email:</b>" . $row['email']."</p>"; 
    echo "<b><p>Message:</b>" .  $row['user_message']."</p>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>