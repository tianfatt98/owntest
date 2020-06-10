<?php>
  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "tianfatt98", "pwd" => "{Wishes_98}", "Database" => "DDAC_WebAppTutorial2", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:webapp-db-tp042163.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
  
  if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  else
  {
    echo "Connection to Db: Success!";
  }
<?>
