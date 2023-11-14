<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "5ina22";


// create connection
$conn = mysqli_connect($servername, $username, $password,$database);
//connection check
if (!$conn) {
    die("Conncetion failed". mysqli_connect_error());
}
echo"Connected succesfully";


// $sql = "CREATE DATABASE $database";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully <br>";
// } else {
//     echo "Error creating database". mysqli_error($conn);
// }


if(mysqli_select_db($conn, $database)) {
    echo "Database $database selected <br>";
} else {
    echo "Error select database". mysqli_error($conn);
}



$sql = "SELECT id, firstname, lastname FROM myGuests";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {s
        echo "id: ". $row["id"] ." name: ". $row["firstname"] ." lastname: ". $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
    // select data
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0){
        //output data of each row
        while($row = mysqli_fetch_assoc($result)){
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else{
        echo "0 results";
    }

<div>
    <table>
        <?php
        $sql = "SELECT id, firstname, lastname FROM myGuests";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo " <td> id: ". $row["id"]. "</td>";
                echo " <td> name: ". $row["firstname"]. "</td>";
                echo " <td> lastname: ". $row["lastname"]. "</td>". "<br>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</div>
</html>