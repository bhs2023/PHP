<?php

    setcookie("userid", "", time() - 3600);
    header("Location: http://localhost:9000/sample/ch4/loginForm.html")
?>