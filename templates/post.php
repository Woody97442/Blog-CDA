<?php
$title = "Post"; ?>

<?php ob_start(); ?>
<h1> Post </h1>


<?php $content = ob_get_clean();
require 'layout.php';
?>