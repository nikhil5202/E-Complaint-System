 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
echo "session end";
 header("Location:/ecs/login.html");
?>

</body>
</html> 