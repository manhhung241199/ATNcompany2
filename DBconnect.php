<html>
<head>
    <!-- Required meta tags -->
   
    <title>Product Database</title>
  </head>
<body>



<?php


//Refere to database
$db = parse_url(getenv("DATABASE_URL"));
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
  //you sql query
  $sql = "SELECT  CatId, CatName, IMG FROM Category";

  $stmt = $pdo->prepare($sql);
  //execute the query on the server and return the result set
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $stmt->execute();
  $resultSet = $stmt->fetchAll();
  //desplay the data
?> 

</body>
</html>