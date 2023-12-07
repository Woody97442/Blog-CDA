<?php
$title = "404"; ?>

<?php ob_start(); ?>
<h1> Error 404 ! </h1>
<h2>Page non trouvée...</h2>


<?php $content = ob_get_clean();
require 'layout.php';
?>