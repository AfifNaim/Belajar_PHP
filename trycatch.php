<?php

try {
    echo "Check";
    selamatPagi();
} catch (Exception $error) {
    echo "Error : {$error->getMassage()}";
}
?>