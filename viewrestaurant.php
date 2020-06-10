<?php>
  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "tianfatt98", "pwd" => "Wishes_98", "Database" => "DDAC_WebAppTutorial2", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:webapp-db-tp042163.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
  
  if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection to Db: Success!";

//   $sql= "SELECT * FROM [dbo].[restaurant]";
//   $getResults = sqlsrv_query($conn, $sql);
//   if ($getResults == FALSE)
//   {
//     die(sqlsrv_errors());
//   }
//   echo "<table border = '1'>";
//   while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
//   {
//   echo "<tr>";
//   echo "<td>". $row['restaurant_id'] . "</td>";
//   echo "<td>". $row['restaurant_name'] ."</td>";
//   echo "<td>". $row['restaurant_address'] . "</td>";
//   echo "<td>". $row['restaurant_phone'] . "</td>";
//   echo "</tr>";
//   }
//   echo "</table>";
//   sqlsrv_free_stmt($getResults);
?>
