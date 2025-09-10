<?php
session_start();
session_destroy();
// unset($_SESSION['nama']);
// unset($_SESSION['level']);
header('Location: ../');