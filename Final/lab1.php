<!DOCTYPE html>
<body>
<?php
function checknumber($number) {
    if ($number > 0) {
        $val="positive";}
    elseif ($number == 0) {
        $val= "Zero";}
    else($number<0);
    {
        $val= "negatice";
    }
    switch ($number%2) {
        case 1: $valu= "Even";
        break;
        default: $valu= "odd";
    }
    echo "number $number: $valu";
}
for ($i= 0; $i< 10; $i++) {
    checknumber($i);
}
?>
</body>
</html>