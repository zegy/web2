<?php 
$host = "localhost";
$dbname = "sisfonews";
$username = "root";
$password = "satu";
$db = "";

try {
      $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
      die("Connection error: ".$exception->getMessage());
}

$query = $db->prepare("SELECT * FROM berita");
$query->execute();
$data = $query->fetchAll();

foreach ($data as $ib) { ?> 
    <h1> <?php echo $ib['judul']; ?> </h1>
    <p> <?php echo $ib['isi'];  ?> </p>
<?php } ?>
