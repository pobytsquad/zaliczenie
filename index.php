<!DOCTYPE html> 
<html> 
 <head> 
   <meta charset="utf-8"> 
   <title>Projekt bazy danych</title> 
   <link rel="Stylesheet" type="text/css" href="style.css" />
   <meta name="description" content="Baza danych">
   <meta name="keywords" content="baza danych">
   <meta name="author" content="Gal Anonim">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>

  <div id="header">
    <h1>PROJEKT BAZY DANYCH</h1>
  </div>

  <div id="menu">
    <ul>
      <li><a href="index.php?id=home">Polecenie a)</a></li>
      <li><a href="index.php?id=pokaz">Polecenie b)</a></li>
      <li><a href="index.php?id=dodaj">Polecenie c)</a></li>
      <li><a href="index.php?id=usun">Polecenie d)</a></li>
      <li><a href="index.php?id=zmien">Polecenie e)</a></li>
    </ul>
        
    </nav>
  </div>
  
  <div id="content">
    <p>
        <?php
          require('config.inc.php');
            // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
        
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        switch($id)
        {
            case "home": require('polecenie_a.html'); break;
            case "pokaz": require('polecenie_b.html'); break;
            case "dodaj": require('polecenie_c.html'); break;
            case "usun": require('polecenie_d.html'); break;
            case "zmien": require('polecenie_e.php'); break;
            default: require('polecenie_a.html');
        }
        
         mysqli_close($conn);
        ?>
       
       
    </p>
  </div>

  <div id="footer">
        &copy; 2018 Gal Anonim
  </div>

</body>
</html>