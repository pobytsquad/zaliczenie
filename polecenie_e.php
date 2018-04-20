<form action = "index.php?id=zmien" method="POST">
  Nazwisko:<br>
  <input type="text" name="nazwisko">
  <br><br>
  <input type="submit" value="Submit" name="button">
</form>

<?php
if (isset($_POST['button']))
{
    $nazwisko = isset($_POST['nazwisko']) ? $_POST['nazwisko']:"";
}

    $query = "SELECT id, imie, nazwisko, miejsce_urodzenia, data FROM dane_osobowe WHERE nazwisko='$nazwisko' ";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
    echo "<table border=\"1\">";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    echo '<tr><td>' .$row['id']. '</td><td>' .$row['imie'] . '</td><td>' .$row['nazwisko']. '</td><td>' .$row['miejsce_urodzenia']. '</td><td>' .$row['data']. '</td></tr>';
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
