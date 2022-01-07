<!DOCTYPE html>
<html>

<body>

    <?php
    
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, lastname, age FROM alijalizavi.tbl;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Specifications: " . $row["name"]. " " . $row["lastname"]." ". $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>

</html>