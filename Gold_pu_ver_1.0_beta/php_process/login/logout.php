<?php
  session_start();
  unset($_SESSION['userid']);
  unset($_SESSION['userlevel']);

  echo "
    <script>
      location.href='/Gold/index.php';
    </script>
  ";

?>