<?php
session_start();
?>

<html>
<body>

Hello <?php echo $_SESSION['username']; ?>

</body>
</html>