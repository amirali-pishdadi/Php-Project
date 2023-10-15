<?php 

$a = true;

$b = false;

$isLogin = false;

// Change Type = (type) => (int) & (string)

// * / - + ** % ++ 

// Logical Operators => ( && and )[Both True] ( || or )[$a True Or $b True] ( Xor )[One of them True] ( !$a )[True if $a is not True.]

if ($a == true and $b == false) {
    echo "Both of them is True";
    
} else {
    echo "one of them is not True";
}
if ($a == true xor $b == true) {
    echo "One of them is True and the other one is false";

} else {
    echo "both of them is True of False";
}
if ($a == true or $b == true) {
    echo "one or both of them is True";

} else {
    echo "none of them is True";
}
if (!$a) {
    echo 'upside $a';

}

?>