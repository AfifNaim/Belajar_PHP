<?php

// Error Handle Function
function customError($errno, $errstr){
    echo "<br>Error:</br> [$errno] $errstr";
}

//Set Error handler
set_error_handler("customError");

//Trigger error
echo($test);

$test=2;
if ($test>=1){
    trigger_error("Error");
}

class User extends Exception{
    function Tampilkan($stringg){
    if (!is_numeric($stringg)) {
        echo "ini baru benar";
    }else{
        throw new User("Ini harus berupa Stirng");
    }
}
}
    try {
        $coba = new User();
        $coba->Tampilkan(10);
    } catch (Exception $e) {
        echo "error baris ke : ".$e->getLine();
        echo '<br>';
        echo "Pesan Errornya :". $e->getMessage();
    }


?>