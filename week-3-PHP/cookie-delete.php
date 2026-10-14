<?php

unset($_COOKIE['theme']);
setcookie('theme', "", time() - 3600);
