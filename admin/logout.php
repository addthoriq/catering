<?php
session_start();
session_destroy();
header('location: http://localhost/ilma/index.php');