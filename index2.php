<h1>Full web solution + monitoring deploy</h1>
<h4>Autor: Ionut Dimache</h4>
<h4>Data: MIKE MAMBO Iunie 2019</h4>
<?php
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$dbname = 'mysql';
$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Aplicatia permite autentificarea urmatorilor useri: <br>";
$sql = "select USER_ID,FIRST_NAME,LAST_NAME,PROFILE from USERS";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<strong>USER_ID: </strong>" . $row["USER_ID"]. "<strong> NUME: </strong>". $row["FIRST_NAME"] . " " . $row["LAST_NAME"] . "<strong> DREPTURI: </strong>". $row["PROFILE"].  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
