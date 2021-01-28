<?php
session_start();
session_unset();
session_destroy();
unlink("../session.json");
header("location://localhost:8000");
