<html>
   <head>
      <title>Connect to MariaDB Server</title>
   </head>

   <body>
   <?php
$mysqli = new mysqli("db", "root", "romn2011.", "lemp");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("db", "root", "romn2011.", "lemp", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>
   </body>
</html>