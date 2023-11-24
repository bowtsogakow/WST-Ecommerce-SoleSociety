<?php
  
  session_start();  

  

// Unset session variables explicitly
$_SESSION['ID'] = -1;

// Continue unsetting other var
    echo "<script>  alert('User succesfully log out'); window.location.href = 'index.php?0'; </script>";
?>