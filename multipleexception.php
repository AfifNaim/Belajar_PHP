<?php
$a=5;
$b=0;
try {
    if($b < 1){
        throw new DivisionByZeroError('Variable $b tidak boleh 0');
    }
    echo $a /$b;
} catch (ArgumentCountError $error) {
    echo "ArrrgumemtCountError Exception : " . $error->getMessage();
} catch (DivisionByZeroError $error){
    echo "DivisionByZeroError Exception : " .$error->getMessage();
} catch (Exception $error){
    echo "Exception: " . $error->getMassage();
}
?>