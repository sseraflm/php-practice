<?php

session_start();

echo $_SESSION['user'] ?? 'Nothing is stored yet.';
