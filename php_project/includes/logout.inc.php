<?php

session_start();
session_unset();
session_destroy();


header("location: ../views/login_regestrater.php?error=none");
