<?php
include("cria_session.php");
session_unset();
session_destroy();
header("Location: login_page.php");
?>