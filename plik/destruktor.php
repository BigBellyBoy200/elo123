$sql = "SELECT id, firstname, lastname FROM myGuests";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: ". $row["id"] ." name: ". $row["firstname"] ." lastname: ". $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
