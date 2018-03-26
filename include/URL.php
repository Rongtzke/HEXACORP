<?php
if (empty($_SERVER['HTTP_REFERER'])) {
    header('Location: index.php');
}
?>